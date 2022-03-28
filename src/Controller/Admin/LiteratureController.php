<?php

namespace App\Controller\Admin;

use App\Utils\Utils;
use App\Entity\Seances;
use App\Form\SeancesType;
use App\Entity\Literature;
use App\Form\LiteratureType;
use App\Repository\LiteratureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LiteratureController extends AbstractController
{
    #[Route('/litterature', name: 'literature_browse')]
    public function index(LiteratureRepository $lr): Response
    {
        $literatures = $lr->findAll();

        return $this->render('literature/index.html.twig', [
            'controller_name' => 'LiteratureController',
            'literatures' => $literatures,
        ]);
    }

    #[Route('/litterature/read/{id<\d+>}', name: 'literature_read', methods: ['GET'])]
    public function read($id, LiteratureRepository $lr): Response
    {
        $literature = $lr->find($id);

        if (null === $literature) {
            throw $this->createNotFoundException('Oups ! Citation/Poésie non trouvée.');
        }

        return $this->render('literature/read.html.twig', [
            'controller_name' => 'LiteratureController',
            'literature' => $literature,
        ]);
    }

    #[Route('/litterature/display/{id<\d+>}', name: 'literature_display', methods: ['GET', 'POST'])]
    public function displayOnWebsite($id, LiteratureRepository $lr, Request $request, EntityManagerInterface $em): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('display-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $literature = $lr->find($id);

        if (null === $literature) {
            throw $this->createNotFoundException('Oups ! Citation/Poésie non trouvée.');
        }

        if (true === $literature->getDisplayable()) {
            $literature->setDisplayOnWebsite(!$literature->getDisplayOnWebsite());

            $em->persist($literature);
            $em->flush();
        }

        return $this->redirectToRoute('literature_browse');
    }

    #[Route('/litterature/add', name: 'literature_add', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $em, Utils $utils): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('add-edit-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $literature = new Literature();

        $form = $this->createForm(LiteratureType::class, $literature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $display = $utils->literatureDisplayableOnWebsite($literature);

            $literature = $utils->checkLiteratureContent($literature);

            if ($display) {
                $literature->setDisplayable(1);
            }
            else {
                $literature->setDisplayable(0);
            }

            $em->persist($literature);
            $em->flush();

            return $this->redirectToRoute('literature_browse');
        }

        return $this->render('literature/add_edit.html.twig', [
            'controller_name' => 'LiteratureController',
            'literature' => $literature,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/litterature/edit/{id<\d+>}', name: 'literature_edit', methods: ['GET', 'POST'])]
    public function edit($id, LiteratureRepository $lr, Request $request, EntityManagerInterface $em, Utils $utils): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('add-edit-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $literature = $lr->find($id);

        if (null === $literature) {
            throw $this->createAccessDeniedException('Citation/Poésie non trouvée !');
        }

        $form = $this->createForm(LiteratureType::class, $literature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $display = $utils->literatureDisplayableOnWebsite($literature);

            $literature = $utils->checkLiteratureContent($literature);

            if ($display) {
                $literature->setDisplayable(1);
            }
            else {
                $literature->setDisplayable(0);
            }

            $em->persist($literature);
            $em->flush();

            return $this->redirectToRoute('literature_browse');
        }

        return $this->render('literature/add_edit.html.twig', [
            'controller_name' => 'LiteratureController',
            'literature' => $literature,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/litterature/delete/{id<\d+>}', name: 'literature_delete', methods: ['GET', 'POST', 'DELETE'])]
    public function delete($id, LiteratureRepository $lr, Request $request, EntityManagerInterface $em): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('delete-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $literature = $lr->find($id);

        if (null === $literature) {
            throw $this->createAccessDeniedException('Citation/Poésie non trouvée !');
        }

        $em->remove($literature);
        $em->flush();

        return $this->redirectToRoute('literature_browse');
    }
}
