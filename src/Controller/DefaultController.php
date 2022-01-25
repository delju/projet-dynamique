<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Message;
use App\Entity\User;
use App\Form\CommentType;
use App\Form\MessageType;
use App\Repository\CommentRepository;
use App\Repository\MangaRepository;
use App\Repository\TomesRepository;
use App\Search\Search;
use App\Search\SearchFullType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(MangaRepository $mangaRepository, CommentRepository $commentRepository, TomesRepository $tomesRepository): Response
    {
        $lastAdded = $mangaRepository->findBy([], ['date' => 'DESC'], 4);
        $lastComment = $commentRepository->commentWithManga(4);
        $lastRelease = $tomesRepository->findByLastReleases(4);
        return $this->render('pages/home.html.twig', ['lastAdded' => $lastAdded, 'lastComment' => $lastComment, 'lastReleases' => $lastRelease]);
    }

    /**
     * @Route("/collection", name="collection")
     */
    public function Collection(PaginatorInterface $paginator, Request  $request): Response
    {

        $user = $this->getUser();
        $mybooks = $user->getMyBook();

        $pagination = $paginator->paginate(
                $mybooks, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                15/*limit per page*/);


            $this->addFlash('login', 'Vous devez vous connecter pour créer votre collection');
            $this->addFlash('addCollection', 'Vous devez ajouter des tomes dans votre collection');

        return $this->render('pages/collection.html.twig', ['mybooks'=>$pagination]);
    }

    /**
     * @Route("/add-collection/{id<\d+>}", name="addCollection")
     */
    public function AddCollection(int $id, TomesRepository $tomesRepository, EntityManagerInterface $em): Response
    {
        // On récupère l'id de l'utilisateur
        $user = $this->getUser();

        $tomes = $tomesRepository->find($id);

        if($tomes !== null) {
            $user->addMyBook($tomes);

            $em->persist($tomes);
            $em->persist($user);
            $em->flush();

            $this->redirectToRoute('collection', ['mybooks'=>$tomes] );
        }
        return $this->render('pages/collection.html.twig');
    }


    /**
     * @Route("/next-releases", name="next-releases")
     */
    public function nextReleases(TomesRepository $tomesRepository): Response
    {
        $lastReleases = $tomesRepository->findUntilDate();
        return $this->render('pages/next-releases.html.twig', ['lastReleases' => $lastReleases]);
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function createMessage(Request $request, EntityManagerInterface $em): Response
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($message);
            $em->flush();
            return $this->redirectToRoute('contact');
        }
        return $this->render('pages/contact.html.twig', ['messageForm' => $form->createView()]);
    }


    /**
     * @Route("/single/{slug}", name="single")
     */
    public function viewManga(string $slug, MangaRepository $mangaRepository, Request $request, EntityManagerInterface $em, PaginatorInterface $paginator): Response
    {
        $manga = $mangaRepository->findOneBySlug($slug);
        $comment = new Comment();
        $comment->setManga($manga);
        $tomes = $manga->getTomes();
        $commentForm = $this->createForm(CommentType::class, $comment);

        $commentForm->handleRequest($request);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('single', ['slug' => $manga->getSlug()]);
        }

        $pagination = $paginator->paginate(
            $tomes, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/);

        return $this->render('pages/single.html.twig', ['manga' => $manga, 'tomes' => $pagination, 'commentForm' => $commentForm->createView()]);
    }

    /**
     * @Route("/delete-collection/{id<\d+>}", name="delete-collection")
     */
    public function deleteCollection(int $id, TomesRepository $tomesRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $tomes = $tomesRepository->find($id);
        $collection = $user->removeMyBook($tomes);
        $em->persist($collection);
        $em->flush();

        return $this->render('pages/admin/element/delete-items.html.twig');
    }

    /**
     * @Route("/search", name="search")
     */
    public function search(MangaRepository $mangaRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $search = new Search();
        $form = $this->createForm(SearchFullType::class, $search);
        $form->handleRequest($request);
        $result = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $result = $mangaRepository->findBySearch($search);
        }else{
            $result = $mangaRepository->findBy([], ['frenchTitle'=>'ASC']);
        }

        $pagination = $paginator->paginate(
            $result, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            30/*limit per page*/);

        return $this->render('pages/search.html.twig', ['mangas' => $pagination, 'searchFullForm' => $form->createView()]);

    }


}