<?php

namespace App\Controller;

use App\Entity\CollectionUser;
use App\Entity\Comment;
use App\Entity\Manga;
use App\Entity\Message;
use App\Entity\Photo;
use App\Entity\Tomes;
use App\Form\CommentType;
use App\Form\MangaType;
use App\Form\MessageType;
use App\Form\PhotoType;
use App\Form\TomeType;
use App\Repository\CommentRepository;
use App\Repository\MangaRepository;
use App\Repository\MessageRepository;
use App\Repository\TomesRepository;
use App\Search\Search;
use App\Search\SearchFullType;
use App\Service\MangaPhotoUploader;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
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
        $lastAdded = $mangaRepository->findBy([], ['date'=> 'DESC'], 4);
        $lastComment = $commentRepository->commentWithManga(4);
        $lastRelease = $tomesRepository->findByLastReleases(4);
        return $this->render('pages/home.html.twig', ['lastAdded'=> $lastAdded, 'lastComment'=>$lastComment, 'lastReleases'=>$lastRelease]);
    }

    /**
     * @Route("/collection", name="collection")
     */
    public function Collection(): Response
    {
        return $this->render('pages/collection.html.twig', );
    }

    /**
     * @Route("/add-collection", name="addCollection")
     */
    public function AddCollection(int $id, TomesRepository $tomesRepository, EntityManager $em): Response
    {
        $tomes = $tomesRepository->find($id);
        $collection = new CollectionUser($tomes);
        $collection->addTome($tomes);
        $em->persist($tomes);
        $em->persist($collection);
        $em->flush();
        return $this->render('pages/collection.html.twig', );
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
    if($form->isSubmitted() && $form->isValid()){
        $em->persist($message);
        $em->flush();
        return $this->redirectToRoute('contact');
    }
      return $this->render('pages/contact.html.twig', ['messageForm' => $form->createView()]);
    }


    /**
     * @Route("/single/{slug}", name="single")
     */
    public function viewManga(string $slug, MangaRepository $mangaRepository, TomesRepository $tomesRepository, Request $request, EntityManagerInterface $em): Response
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
        return $this->render('pages/single.html.twig', ['manga' => $manga, 'tomes'=>$tomes, 'commentForm'=>$commentForm->createView()]);
    }




    /**
     * @Route("/create-manga", name="create-manga")
     */
    public function createManga(Request $request, EntityManagerInterface $em, MangaPhotoUploader $mangaPhotoUploader): Response
    {

        $manga = new Manga();
        $formManga = $this->createForm(MangaType::class, $manga);
        $formManga->handleRequest($request);
        if($formManga->isSubmitted() && $formManga->isValid()){

            $photo = $mangaPhotoUploader->uploadPhoto($formManga->get('photo')); // le service a bien entendu été injecté via les arguments de la method
            $manga->setPhoto($photo);
            $em->persist($manga->getPhoto());
            $em->persist($manga);
            $em->flush();

            return $this->redirectToRoute('pages/admin/admin-books');
        }

        return $this->render('pages/create-manga.html.twig', ['mangaForm' => $formManga->createView()]);
    }


    /**
     * @Route("/create-tome", name="create-tome")
     */
    public function createTome(Request $request, EntityManagerInterface $em, MangaPhotoUploader $mangaPhotoUploader): Response
    {
        $tome = new Tomes();
        $formTome = $this->createForm(TomeType::class, $tome);
        $formTome->handleRequest($request);
        if ($formTome->isSubmitted() && $formTome->isValid()) {
            $photo = $mangaPhotoUploader->uploadPhoto($formTome->get('photo')); // le service a bien entendu été injecté via les arguments de la method
            $tome->setPhoto($photo);
            $em->persist($tome->getPhoto());
            $em->persist($tome);
            $em->flush();

            return $this->redirectToRoute('admin-books');
        }

        return $this->render('pages/create-tome.html.twig', ['tomeForm' => $formTome->createView()]);
    }

    /**
     * @Route("/edit_manga/{id<\d+>}", name="edit_manga")
     */
    public function editManga(int $id, Request $request, MangaRepository $mangaRepository, EntityManagerInterface $em): Response
    {
        $manga = $mangaRepository->find($id);
        $form = $this->createForm(MangaType::class, $manga);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($manga);
            $em->flush();

            return $this->redirectToRoute('admin-books');

            }

            return $this->render('pages/create-manga.html.twig',['mangaForm' => $form->createView()]);

    }

    /**
     * @Route("/edit_tome/{id<\d+>}", name="edit_tome")
     */
    public function editTome(int $id, Request $request, TomesRepository $tomesRepository, EntityManagerInterface $em): Response
    {
        $tome = $tomesRepository->find($id);
        $form = $this->createForm(MangaType::class, $tome);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tome);
            $em->flush();

            return $this->redirectToRoute('admin-books');

        }

        return $this->render('pages/create-manga.html.twig',['mangaForm' => $form->createView()]);

    }

    /**
     *@Route("/search", name="search")
     */
    public function search(MangaRepository $mangaRepository, Request $request): Response
    {
        $search = new Search();
        $form = $this->createForm(SearchFullType::class, $search);
        $form->handleRequest($request);
        $result = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $result = $mangaRepository->findBySearch($search);
        }
        return $this->render('pages/search.html.twig', ['mangas' => $result, 'searchFullForm' => $form->createView() ]);

    }


}