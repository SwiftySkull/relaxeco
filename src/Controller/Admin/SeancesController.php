<?php

namespace App\Controller\Admin;

use App\Utils\Utils;
use App\Entity\Seances;
use App\Form\SeancesType;
use App\Repository\SeancesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SeancesController extends AbstractController
{
    #[Route('/seances', name: 'seances_browse')]
    public function index(SeancesRepository $sr): Response
    {
        $seances = $sr->findAll();

        return $this->render('seances/index.html.twig', [
            'controller_name' => 'SeancesController',
            'seances' => $seances,
        ]);
    }

    #[Route('/seances/display/{id<\d+>}', name: 'seances_display', methods: ['GET', 'POST'])]
    public function displayOnWebsite($id, SeancesRepository $sr, Request $request, EntityManagerInterface $em): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('display-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $seance = $sr->find($id);

        if (null === $seance) {
            throw $this->createNotFoundException('Oups ! Citation/Poésie non trouvée.');
        }

        if (true === $seance->getDisplayable()) {
            $seance->setDisplayOnWebsite(!$seance->getDisplayOnWebsite());

            $em->persist($seance);
            $em->flush();
        }

        return $this->redirectToRoute('seances_browse');
    }

    #[Route('/seances/add', name: 'seances_add')]
    public function add(SeancesRepository $sr, Request $request, EntityManagerInterface $em, Utils $utils): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('add-edit-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $seances = new Seances();

        $form = $this->createForm(SeancesType::class, $seances);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $display = $utils->seanceDisplayableOnWebsite($seances);

            if ($display) {
                $seances->setDisplayable(1);
            }
            else {
                $seances->setDisplayable(0);
            }

            $em->persist($seances);
            $em->flush();

            return $this->redirectToRoute('seances_browse');
        }

        return $this->render('seances/add_edit.html.twig', [
            'controller_name' => 'SeancesController',
            'seances' => $seances,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/seances/edit/{id<\d+>}', name: 'seances_edit')]
    public function edit($id, SeancesRepository $sr, Request $request, EntityManagerInterface $em, Utils $utils): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('add-edit-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $seances = $sr->find($id);

        if (null === $seances) {
            throw $this->createAccessDeniedException('Séance non trouvée !');
        }

        $form = $this->createForm(SeancesType::class, $seances);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $display = $utils->seanceDisplayableOnWebsite($seances);

            if ($display) {
                $seances->setDisplayable(1);
            }
            else {
                $seances->setDisplayable(0);
            }

            $em->persist($seances);
            $em->flush();

            return $this->redirectToRoute('seances_browse');
        }

        return $this->render('seances/add_edit.html.twig', [
            'controller_name' => 'SeancesController',
            'seances' => $seances,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/seances/delete/{id<\d+>}', name: 'seances_delete')]
    public function delete($id, SeancesRepository $sr, Request $request, EntityManagerInterface $em): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('delete-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $seances = $sr->find($id);

        if (null === $seances) {
            throw $this->createAccessDeniedException('Séance non trouvée !');
        }

        $em->remove($seances);
        $em->flush();

        return $this->redirectToRoute('seances_browse');
    }
}
