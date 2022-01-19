<?php

namespace App\Controller;

use App\Repository\CommentRepository;
use App\Repository\MangaRepository;
use App\Repository\MessageRepository;
use App\Repository\TomesRepository;
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
    public function adminBooks(MangaRepository $mangaRepository): Response
    {
        $mangas = $mangaRepository->findBy([], ['frenchTitle'=>'asc']);
        return $this->render('pages/admin/admin-books.html.twig', ['mangas' => $mangas]);
    }

    /**
     * @Route("/admin-tome/{slug}", name="admin-tome")
     */
    public function adminTome(string $slug, MangaRepository $mangaRepository, TomesRepository $tomesRepository): Response
    {
        $manga = $mangaRepository->findWithTomes($slug);

        return $this->render('pages/admin/admin-tome.html.twig', ['mangas'=>$manga]);
    }


    /**
     * @Route("/admin-reviews", name="admin-reviews")
     */
    public function adminReviews(CommentRepository $commentRepository, PaginatorInterface $paginator, Request $request): Response
    {

        $queryBuilder = $commentRepository->commentWithManga(100);
        $pagination = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/);

        return $this->render('pages/admin/admin-reviews.html.twig', ['pagination' => $pagination]);
    }

    /**
     * @Route("/admin-messages", name="admin-messages")
     */
    public function adminMessages(MessageRepository $messageRepository): Response
    {
        $messages = $messageRepository->findBy([], ['date'=>'desc'], 20);

        return $this->render('pages/admin/admin-messages.html.twig', ['messages'=>$messages]);
    }

    /**
     * @Route("/delete/{id<\d+>}", name="delete")
     */
    public function adminDelete(int $id, MangaRepository $mangaRepository, TomesRepository $tomesRepository, EntityManagerInterface $em): Response
    {
        $manga = $mangaRepository->find($id);
        $tome = $tomesRepository->find($id);
        $em->remove($manga);
        $em->flush();

        return $this->render('pages/admin/element/delete-items.html.twig', ['manga'=>$manga]);
    }
}