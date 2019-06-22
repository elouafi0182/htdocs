<?php

namespace App\Controller;

use App\Entity\Reserveringen;
use App\Form\ReserveringenType;
use App\Repository\ReserveringenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reserveringen")
 */
class ReserveringenController extends AbstractController
{
    /**
     * @Route("/", name="reserveringen_index", methods={"GET"})
     */
    public function index(ReserveringenRepository $reserveringenRepository): Response
    {
        return $this->render('reserveringen/index.html.twig', [
            'reserveringens' => $reserveringenRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reserveringen_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reserveringen = new Reserveringen();
        $form = $this->createForm(ReserveringenType::class, $reserveringen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reserveringen);
            $entityManager->flush();

            return $this->redirectToRoute('reserveringen_index');
        }

        return $this->render('reserveringen/new.html.twig', [
            'reserveringen' => $reserveringen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reserveringen_show", methods={"GET"})
     */
    public function show(Reserveringen $reserveringen): Response
    {
        return $this->render('reserveringen/show.html.twig', [
            'reserveringen' => $reserveringen,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reserveringen_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reserveringen $reserveringen): Response
    {
        $form = $this->createForm(ReserveringenType::class, $reserveringen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reserveringen_index', [
                'id' => $reserveringen->getId(),
            ]);
        }

        return $this->render('reserveringen/edit.html.twig', [
            'reserveringen' => $reserveringen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reserveringen_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reserveringen $reserveringen): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reserveringen->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reserveringen);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reserveringen_index');
    }
}
