<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\CommentFlag;
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
        //J'affiche les 4 derniers ajoutés
        $lastAdded = $mangaRepository->findBy([], ['date' => 'DESC'], 4);
        //Je récupère les 4 derniers commentaires
        $lastComment = $commentRepository->commentWithManga(4);
        //Je récupère les 4 derniers sortis
        $lastRelease = $tomesRepository->findByLastReleases(4);

        //Je les affiche dans la page home
        return $this->render('pages/home.html.twig', ['lastAdded' => $lastAdded, 'lastComment' => $lastComment, 'lastReleases' => $lastRelease]);
    }

    /**
     * @Route("/collection", name="collection")
     */
    public function Collection(PaginatorInterface $paginator, Request $request): Response
    {
        //Je récupère l'utilisateur actuel et je vais recherche les tomes qui lui sont liés dans la collection
        $user = $this->getUser();
        $mybooks = $user->getMyBook();
        //Pagination des résultats
        $pagination = $paginator->paginate(
            $mybooks, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            15/*limit per page*/);

       //Message a affiché si l'utilisateur n'a pas encore de tome dans sa collection
        $this->addFlash('addCollection', 'Vous devez ajouter des tomes dans votre collection');

        return $this->render('pages/collection.html.twig', ['mybooks' => $pagination]);
    }

    /**
     * @Route("/collection/add-collection/{id<\d+>}", name="addCollection")
     */
    public function AddCollection(int $id, TomesRepository $tomesRepository, EntityManagerInterface $em): Response
    {
        // On récupère l'utilisateur actuel
        $user = $this->getUser();
        //On va recherche le tome par son id
        $tomes = $tomesRepository->find($id);
        //Si le tome n'est pas null on l'ajoute dans la collection de l'utilisateur
        if ($tomes !== null) {
            $user->addMyBook($tomes);
        //On persist le tout
            $em->persist($tomes);
            $em->persist($user);
            $em->flush();
            //Si cela fonctionne on retourne a la collection

        }
        return $this->redirectToRoute('collection');
    }


    /**
     * @Route("/next-releases", name="next-releases")
     */
    public function nextReleases(TomesRepository $tomesRepository, PaginatorInterface $paginator, Request $request): Response
    {
        //Je récupère les tomes dont la date de sortie n'est pas encore passée.
        $lastReleases = $tomesRepository->findUntilDate();
        //Pagination du résulat
        $pagination = $paginator->paginate(
            $lastReleases,
            $request->query->getInt('page', 1),
            20

        );

        return $this->render('pages/next-releases.html.twig', ['lastReleases' => $pagination]);
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function createMessage(Request $request, EntityManagerInterface $em): Response
    {
        //Création d'un nouveau message a partir du formulaire MessageTYPE dans la page contact
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
        //Récupération des mangas par son slug.
        $manga = $mangaRepository->findOneBySlug($slug);
        //On récupère les tomes du manga
        $tomes = $manga->getTomes();
        //Création d'un commentaire
        $comment = new Comment();
        //On écrit le commentaire au manga correspondant
        $comment->setManga($manga);
        $commentForm = $this->createForm(CommentType::class, $comment);

        $commentForm->handleRequest($request);
        //Si formulaire est envoyé et valide on persist les commentaires et on redirige la page vers le single
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('single', ['slug' => $manga->getSlug()]);
        }
        //Pagination pour les tomes
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
        //On récupère l'utilisateur actuel
        $user = $this->getUser();
        //On va recherché le tome par son id
        $tomes = $tomesRepository->find($id);
        //On retire le tome de la collection de l'utilisateur identifié
        $collection = $user->removeMyBook($tomes);
        $em->persist($collection);
        $em->flush();
        //Message lors de la suppression du tome de la collection
        $this->addFlash('deleteCollection', 'Ce tome a bien été supprimé de votre collection');
        //Redirection vers la page collection
        return $this->redirectToRoute('collection');
    }

    /**
     * @Route("/search", name="search")
     */
    public function search(MangaRepository $mangaRepository, Request $request, PaginatorInterface $paginator): Response
    {
        //Création d'un recherche
        $search = new Search();
        //Retourne le formulaire de recherche
        $form = $this->createForm(SearchFullType::class, $search);
        $form->handleRequest($request);
        $result = [];
        //Si le formulaire est envoyé et valide, on effectue la recherche selon les critères de findbysearch
        if ($form->isSubmitted() && $form->isValid()) {
            $result = $mangaRepository->findBySearch($search);
            //Sinon, on récupère les manga triés par leur titre
        } else {
            $result = $mangaRepository->findBy([], ['frenchTitle' => 'ASC']);
        }
        //Pagination des résultats
        $pagination = $paginator->paginate(
            $result, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            12/*limit per page*/);

        return $this->render('pages/search.html.twig', ['mangas' => $pagination, 'searchFullForm' => $form->createView()]);

    }

    /**
     * @Route("/report-comment/{id}", name="reportComment", methods={"GET"})
     */
    public function reportComment(Comment $comment, EntityManagerInterface $em)
    {
        //Création d'un flag pour reporter les commentaires
        $flag = new CommentFlag();
        //On l'écrit dans le commentaire correspondant
        $flag->setComment($comment);
        $em->persist($flag);
        $em->flush();
        //Rendu de la réponse via flag response.
        return $this->render('pages/element/flag-response.html.twig');
    }

}