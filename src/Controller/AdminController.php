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
use Knp\Component\Pager\Pagination\PaginationInterface;
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
    public function adminBooks(MangaRepository $mangaRepository): Response
    {
        $mangas = $mangaRepository->findBy([], ['frenchTitle'=>'asc']);
        return $this->render('pages/admin/admin-books.html.twig', ['mangas' => $mangas]);
    }

    /**
     * @Route("{slug}/admin-tome/", name="admin-tome")
     */
    public function adminTome(string $slug, MangaRepository $mangaRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $manga = $mangaRepository->findOneBySlug($slug);
        $tomes = $manga->getTomes();

        $pagination = $paginator->paginate(
            $tomes, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/);

        return $this->render('pages/admin/admin-tome.html.twig', ['tomes'=>$pagination] );
    }


    /**
     * @Route("/admin-reviews", name="admin-reviews")
     */
    public function adminReviews(CommentRepository $commentRepository, PaginatorInterface $paginator, Request $request): Response
    {

        $comment = $commentRepository->commentWithManga(100);
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
        $messages = $messageRepository->findBy([], ['date'=>'desc'], 20);

        $pagination = $paginator->paginate(
            $messages, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/);

        return $this->render('pages/admin/admin-messages.html.twig', ['messages'=>$pagination]);
    }

    /**
     * @Route("/create-manga", name="create-manga")
     */
    public function createManga(Request $request, EntityManagerInterface $em, MangaPhotoUploader $mangaPhotoUploader): Response
    {

        $manga = new Manga();
        $formManga = $this->createForm(MangaType::class, $manga);
        $formManga->handleRequest($request);
        if ($formManga->isSubmitted() && $formManga->isValid()) {

            $photo = $mangaPhotoUploader->uploadPhoto($formManga->get('photo')); // le service a bien entendu été injecté via les arguments de la method
            $manga->setPhoto($photo);
            $em->persist($manga->getPhoto());
            $em->persist($manga);
            $em->flush();

            return $this->redirectToRoute('admin-books');
        }

        return $this->render('pages/admin/create-manga.html.twig', ['mangaForm' => $formManga->createView()]);
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

        return $this->render('pages/admin/create-tome.html.twig', ['tomeForm' => $formTome->createView()]);
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

        return $this->render('pages/admin/create-manga.html.twig', ['mangaForm' => $form->createView()]);

    }

    /**
     * @Route("/edit_tome/{id<\d+>}", name="edit_tome")
     */
    public function editTome(int $id, Request $request, TomesRepository $tomesRepository, EntityManagerInterface $em): Response
    {
        $tome = $tomesRepository->find($id);
        $form = $this->createForm(TomeType::class, $tome);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tome);
            $em->flush();

            return $this->redirectToRoute('admin-books');

        }

        return $this->render('pages/admin/create-manga.html.twig', ['mangaForm' => $form->createView()]);

    }

    /**
     * @Route("/delete/{id<\d+>}", name="delete", methods={"DELETE"})
     */
    public function deleteManga(int $id, MangaRepository $mangaRepository, TomesRepository $tomesRepository, EntityManagerInterface $em): Response
    {
        $manga = $mangaRepository->find($id);
         $em->remove($manga);
            $em->flush();

        return $this->render('pages/admin/element/delete-items.html.twig');
    }

    /**
     * @Route("/delete-comment/{id<\d+>}", name="delete-comment", methods={"DELETE"})
     */
    public function deleteComments(int $id,CommentRepository $commentRepository, EntityManagerInterface $em): Response
    {
            $comment = $commentRepository->find($id);
            $em->remove($comment);
            $em->flush();

        return $this->render('pages/admin/element/delete-items.html.twig');
    }
}