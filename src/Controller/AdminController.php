<?php

namespace App\Controller;

use App\Repository\CommentRepository;
use App\Repository\MangaRepository;
use App\Repository\MessageRepository;
use App\Repository\TomesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{


    /**
     * @Route("/admin-books", name="admin-books")
     */
    public function adminBooks(TomesRepository $tomesRepository, MangaRepository $mangaRepository ): Response
    {
        $manga = $mangaRepository->findAll();
        return $this->render('pages/admin/admin-books.html.twig', ['mangas' => $manga]);
    }

    /**
     * @Route("/admin-reviews", name="admin-reviews")
     */
    public function adminReviews(CommentRepository $commentRepository): Response
    {
        $comment = $commentRepository->findBy([], ['date' => 'desc'], 20, 0 );
        return $this->render('pages/admin/admin-reviews.html.twig', ['comments' => $comment]);
    }

    /**
     * @Route("/admin-messages", name="admin-messages")
     */
    public function adminMessages(MessageRepository $messageRepository): Response
    {
        $messages = $messageRepository->findBy([], ['date'=>'desc']);

        return $this->render('pages/admin/admin-messages.html.twig', ['messages'=>$messages]);
    }

}