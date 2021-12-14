<?php

namespace App\Controller;

use App\Entity\Manga;
use App\Entity\Message;
use App\Entity\Photo;
use App\Entity\Tomes;
use App\Form\MangaType;
use App\Form\MessageType;
use App\Form\PhotoType;
use App\Form\TomeType;
use App\Repository\ClassificationRepository;
use App\Repository\EditorRepository;
use App\Repository\GenreRepository;
use App\Repository\MangaRepository;
use App\Repository\StatutRepository;
use App\Service\MangaPhotoUploader;
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
    public function home() {
        return $this->render('pages/home.html.twig');
    }

    /**
     * @Route("/search", name="search")
     */
    public function search() {
        return $this->render('pages/search.html.twig');
    }

    /**
     * @Route("/collection", name="collection")
     */
    public function collection() {
        return $this->render('pages/collection.html.twig');
    }

    /**
     * @Route("/wishlist", name="wishlist")
     */
    public function wishlist() {
        return $this->render('pages/wishlist.html.twig');
    }

    /**
     * @Route("/next-releases", name="next-releases")
     */
    public function nextReleases(): Response
    {
        return $this->render('pages/next-releases.html.twig');
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
    }

    return $this->render('pages/contact.html.twig', ['messageForm' => $form->createView()]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('pages/login.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(): Response
    {
        return $this->render('pages/register.html.twig');
    }

    /**
     * @Route("/single", name="single")
     */
    public function single(): Response
    {
        return $this->render('pages/single.html.twig');
    }


    /**
     * @Route("/admin-books", name="admin-books")
     */
    public function adminBooks(): Response
    {
        return $this->render('pages/admin-books.html.twig');
    }


    /**
     * @Route("/create-manga", name="create-manga")
     */
    public function createManga(Request $request, EntityManagerInterface $em, MangaPhotoUploader $mangaPhotoUploader): Response
    {

        $manga = new Manga();
        $formManga = $this->createForm(mangaType::class, $manga);
        $formManga->handleRequest($request);
        if($formManga->isSubmitted() && $formManga->isValid()){

            $photo = new Photo();
            $form = $this->createForm(PhotoType::class, $photo);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $mangaPhotoUploader->uploadPhoto($form); // le service a bien entendu été injecté via les arguments de la method
                $em->persist($manga->getPhoto());
            }

            $em->persist($manga);
            $em->flush();
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
            $photo = new Photo();
            $form = $this->createForm(PhotoType::class, $photo);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $mangaPhotoUploader->uploadFilesFromForm($form); // le service a bien entendu été injecté via les arguments de la method

                $em->persist($tome->getPhoto());
            }

            $em->persist($tome);
            $em->flush();
        }
        return $this->render('pages/create-tome.html.twig', ['tomeForm' => $formTome->createView()]);
    }

    /**
     * @Route("/edit-manga/{id<\d+>}", name="edit_manga")
     */
    public function editManga(int $id, Request $request, MangaRepository $mangaRepository, EntityManagerInterface $em): Response
    {
        $manga = $mangaRepository->find($id);
        $form = $this->createForm(MangaType::class, $manga);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($manga);
            }

            return $this->redirectToRoute('view_advert', ['id' => $manga->getId()]);

    }



    /**
     * @Route("/admin-reviews", name="admin-reviews")
     */
    public function adminReviews(): Response
    {
        return $this->render('pages/admin-reviews.html.twig');
    }

    /**
     * @Route("/admin-messages", name="admin-messages")
     */
    public function adminMessages(): Response
    {
        return $this->render('pages/admin-messages.html.twig');
    }

    /**
     *@Route("/search", name="search")
     */
    public function viewGenre(): Response
    {

        return $this->render('pages/search.html.twig');

    }


}