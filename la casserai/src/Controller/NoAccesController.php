<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NoAccesController extends AbstractController
{
    /**
     * @Route("/no/acces", name="no_acces")
     */
    public function index()
    {
        return $this->render('no_acces/index.html.twig', [
            'controller_name' => 'NoAccesController',
        ]);
    }
}
