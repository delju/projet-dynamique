<?php

namespace App\Controller;

use App\Entity\Manga;
use App\Entity\Tomes;
use App\Form\MangaType;
use App\Form\TomeType;
use App\Repository\CommentRepository;
use App\Repository\MangaRepository;
use App\Repository\MessageRepository;
use App\Repository\TomesRepository;
use App\Service\MangaPhotoUploader;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{


    /**
     * @Route("/admin-books", name="admin-books")
     */
    public function adminBooks(MangaRepository $mangaRepository, PaginatorInterface $paginator, Request $request): Response
    {
        //On récupère les manga trié par leur titre
        $mangas = $mangaRepository->findBy([], ['frenchTitle' => 'asc']);
        //Pagination sur les manga
        $pagination = $paginator->paginate(
            $mangas, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/);

        return $this->render('pages/admin/admin-books.html.twig', ['mangas' => $pagination]);
    }

    /**
     * @Route("{slug}/admin-tome/", name="admin-tome")
     */
    public function adminTome(string $slug, MangaRepository $mangaRepository, Request $request, PaginatorInterface $paginator): Response
    {
        //On récupère le manga avec son slug
        $manga = $mangaRepository->findOneBySlug($slug);
        //On récupère les tomes liés au manga
        $tomes = $manga->getTomes();
        //Pagination du résultat
        $pagination = $paginator->paginate(
            $tomes, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/);

        return $this->render('pages/admin/admin-tome.html.twig', ['tomes' => $pagination]);
    }


    /**
     * @Route("/admin-reviews", name="admin-reviews")
     */
    public function adminReviews(CommentRepository $commentRepository, PaginatorInterface $paginator, Request $request): Response
    {
        //ON récupère les commentaires avec le manga qui lui est lié
        $comment = $commentRepository->commentWithManga(100);
        //Pagination du résultat
        $comment = $paginator->paginate(
            $comment, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/);

        return $this->render('pages/admin/admin-reviews.html.twig', ['comments' => $comment]);
    }

    /**
     * @Route("/admin-messages", name="admin-messages")
     */
    public function adminMessages(MessageRepository $messageRepository, Request $request, PaginatorInterface $paginator): Response
    {
        //ON récupère les messages triés par leur date 
        $messages = $messageRepository->findBy([], ['date' => 'desc'], 20);

        $pagination = $paginator->paginate(
            $messages, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/);

        return $this->render('pages/admin/admin-messages.html.twig', ['messages' => $pagination]);
    }

    /**
     * @Route("/create-manga", name="create-manga")
     */
    public function createManga(Request $request, EntityManagerInterface $em, MangaPhotoUploader $mangaPhotoUploader): Response
    {
        //ON crée un nouveau manga avec le formulaire mangatype
        $manga = new Manga();
        $formManga = $this->createForm(MangaType::class, $manga);
        $formManga->handleRequest($request);
        //SI le formulaire est envoyé et valide, on télécharge la photo selon le service mangaPhotoUploader
        if ($formManga->isSubmitted() && $formManga->isValid()) {

            $photo = $mangaPhotoUploader->uploadPhoto($formManga->get('photo')); // le service a bien entendu été injecté via les arguments de la method
            $manga->setPhoto($photo);
            $em->persist($manga->getPhoto());
            $em->persist($manga);
            $em->flush();
            //On retourne a la page admin-books
            return $this->redirectToRoute('admin-books');
        }

        return $this->render('pages/admin/create-manga.html.twig', ['mangaForm' => $formManga->createView()]);
    }


    /**
     * @Route("/create-tome", name="create-tome")
     */
    public function createTome(Request $request, EntityManagerInterface $em, MangaPhotoUploader $mangaPhotoUploader): Response
    {
        //Création d'un tome selon le formulaire tometype
        $tome = new Tomes();
        $formTome = $this->createForm(TomeType::class, $tome);
        $formTome->handleRequest($request);
        //Si le formulaire est envoyé et valide, on charge la photo avec le sercie photo uplaoder et on le lie au tome
        if ($formTome->isSubmitted() && $formTome->isValid()) {
            $photo = $mangaPhotoUploader->uploadPhoto($formTome->get('photo')); // le service a bien entendu été injecté via les arguments de la method
            $tome->setPhoto($photo);
            $em->persist($tome->getPhoto());
            $em->persist($tome);
            $em->flush();
            //On revient a la page admin-books
            return $this->redirectToRoute('admin-books');
        }

        return $this->render('pages/admin/create-tome.html.twig', ['tomeForm' => $formTome->createView()]);
    }

    /**
     * @Route("/edit_manga/{id<\d+>}", name="edit_manga")
     */
    public function editManga(int $id, Request $request, MangaRepository $mangaRepository, EntityManagerInterface $em): Response
    {
        //ON récupère le manga selon son id que l'on revoie dans le formulaire mangatype
        $manga = $mangaRepository->find($id);
        $form = $this->createForm(MangaType::class, $manga);
        $form->handleRequest($request);
        //Si le formulaire est envoyé et valide on persist
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($manga);
            $em->flush();
            //On retourne vers admin-books
            return $this->redirectToRoute('admin-books');

        }

        return $this->render('pages/admin/create-manga.html.twig', ['mangaForm' => $form->createView()]);

    }

    /**
     * @Route("/edit_tome/{id<\d+>}", name="edit_tome")
     */
    public function editTome(int $id, Request $request, TomesRepository $tomesRepository, EntityManagerInterface $em): Response
    {
        //On récupère le tome selon son id que l'on renvoie dans le formulaire tometype
        $tome = $tomesRepository->find($id);
        $form = $this->createForm(TomeType::class, $tome);
        $form->handleRequest($request);

        //Si le formulaire est envoyé et valid on persist le tome
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tome);
            $em->flush();
            //ON retourne a la page admin-books
            return $this->redirectToRoute('admin-books');

        }

        return $this->render('pages/admin/create-manga.html.twig', ['mangaForm' => $form->createView()]);

    }

    /**
     * @Route("/delete-manga/{id<\d+>}", name="delete-manga")
     */
    public function deleteManga(int $id, MangaRepository $mangaRepository, EntityManagerInterface $em): Response
    {

        //On récupère le manga selon son id et on le supprime
        $manga = $mangaRepository->find($id);
        $em->remove($manga);
        $em->flush();
        //Message lors de la suppression du manga qui s'affichera dans le layout de l'admin
        $this->addFlash('deleteManga', 'Le manga a bien été supprimé');
        //ON retourne vers admin-books
        return $this->redirectToRoute('admin-books');
    }

    /**
     * @Route("/delete-tome/{id<\d+>}", name="delete-tome")
     */
    public function deleteTome(int $id, TomesRepository $tomesRepository, EntityManagerInterface $em): Response
    {
        //On récupère le tome selon son id et on le supprime
        $tome = $tomesRepository->find($id);
        $em->remove($tome);
        $em->flush();

        //Message lors de la suppression du tome qui s'affichera dans le layout de l'admin
        $this->addFlash('deleteTome', 'Ce tome a bien été supprimé');
        //ON retourne vers admin-books
        return $this->redirectToRoute('admin-books');
    }

    /**
     * @Route("/delete-comment/{id<\d+>}", name="delete-comment")
     */
    public function deleteComments(int $id, CommentRepository $commentRepository, EntityManagerInterface $em): Response
    {
        //On récupère le commentaire selon son id et on le supprime

        $comment = $commentRepository->find($id);
        $em->remove($comment);
        $em->flush();

        //Message lors de la suppression du commentaire qui s'affichera dans le layout de l'admin
        $this->addFlash('deleteComment', 'Ce commentaire a bien été supprimé');
        //ON retourne vers admin-books
        return $this->redirectToRoute('admin-reviews');
    }

    /**
     * @Route("/delete-message/{id<\d+>}", name="delete-message")
     */
    public function deleteMessages(int $id, MessageRepository $messageRepository, EntityManagerInterface $em): Response
    {
        //On récupère le message selon son id et on le supprime

        $message = $messageRepository->find($id);
        $em->remove($message);
        $em->flush();
        //Message lors de la suppression du message qui s'affichera dans le layout de l'admin
        $this->addFlash('deleteMessage', 'Ce message a bien été supprimé');
        //ON retourne vers admin-books
        return $this->redirectToRoute('admin-messages');
    }


}