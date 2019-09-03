<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookRoomController extends AbstractController
{
    /**
     * @Route("/book/room", name="book_room")
     */
    public function index()
    {
        return $this->render('book_room/index.html.twig', [
            'controller_name' => 'BookRoomController',
        ]);
    }
}
