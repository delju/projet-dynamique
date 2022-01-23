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
     * @Route("{slug}/admin-tome/", name="admin-tome")
     */
    public function adminTome(string $slug, MangaRepository $mangaRepository): Response
    {
        $manga = $mangaRepository->findOneBySlug($slug);
        $tomes = $manga->getTomes();

        return $this->render('pages/admin/admin-tome.html.twig', ['tomes'=>$tomes] );
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
            1/*limit per page*/);

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
     * @Route("/delete/{id<\d+>}", name="delete", methods={"DELETE"})
     */
    public function deleteManga(int $id, MangaRepository $mangaRepository, TomesRepository $tomesRepository, EntityManagerInterface $em): Response
    {
        $manga = $mangaRepository->find($id);

        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
        $em->remove($manga);
        $em->flush();

        }

        return $this->render('pages/admin/element/delete-items.html.twig');
    }
}