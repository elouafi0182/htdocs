<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Kamer;

class SeeRoomsController extends AbstractController
{
    /**
     * @Route("/see/rooms", name="see_rooms", methods={"GET"})
     */
    public function index()
    {
        $repository = $this-> getDoctrine()->getRepository(Kamer::class);
        $kamers = $repository->findall();

        return $this->render('see_rooms/index.html.twig', [
            'controller_name' => 'SeeRoomsController',
            'kamers' => $kamers,
        ]);
    }
}
