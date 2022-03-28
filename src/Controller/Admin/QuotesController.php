<?php

namespace App\Controller\Admin;

use App\Utils\Utils;
use App\Entity\Quotes;
use App\Form\QuotesType;
use App\Repository\QuotesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuotesController extends AbstractController
{
    #[Route('/citations', name: 'quotes_browse')]
    public function index(QuotesRepository $qr): Response
    {
        $quotes = $qr->findAll();

        return $this->render('quotes/index.html.twig', [
            'controller_name' => 'QuotesController',
            'quotes' => $quotes,
        ]);
    }

    #[Route('/citations/read/{id<\d+>}', name: 'quotes_read', methods: ['GET'])]
    public function read($id, QuotesRepository $qr): Response
    {
        $quote = $qr->find($id);

        if (null === $quote) {
            throw $this->createNotFoundException('Oups ! Citation non trouvée.');
        }

        return $this->render('quotes/read.html.twig', [
            'controller_name' => 'QuotesController',
            'quote' => $quote,
        ]);
    }

    #[Route('/citations/display/{id<\d+>}', name: 'quotes_display', methods: ['GET', 'POST'])]
    public function displayOnWebsite($id, QuotesRepository $qr, Request $request, EntityManagerInterface $em): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('display-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $quote = $qr->find($id);

        if (null === $quote) {
            throw $this->createNotFoundException('Oups ! Citation non trouvée.');
        }

        if (true === $quote->getDisplayable()) {
            $quote->setDisplayOnWebsite(!$quote->getDisplayOnWebsite());

            $em->persist($quote);
            $em->flush();
        }

        return $this->redirectToRoute('quotes_browse');
    }

    #[Route('/citations/add', name: 'quotes_add', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $em, Utils $utils): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('add-edit-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $quote = new Quotes();

        $form = $this->createForm(QuotesType::class, $quote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $display = $utils->quotesDisplayableOnWebsite($quote);

            if ($display) {
                $quote->setDisplayable(1);
            }
            else {
                $quote->setDisplayable(0);
            }

            $em->persist($quote);
            $em->flush();

            return $this->redirectToRoute('quotes_browse');
        }

        return $this->render('quotes/add_edit.html.twig', [
            'controller_name' => 'QuotesController',
            'quote' => $quote,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/citations/edit/{id<\d+>}', name: 'quotes_edit', methods: ['GET', 'POST'])]
    public function edit($id, QuotesRepository $qr, Request $request, EntityManagerInterface $em, Utils $utils): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('add-edit-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $quote = $qr->find($id);

        if (null === $quote) {
            throw $this->createAccessDeniedException('Citation non trouvée !');
        }

        $form = $this->createForm(QuotesType::class, $quote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $display = $utils->quotesDisplayableOnWebsite($quote);

            if ($display) {
                $quote->setDisplayable(1);
            }
            else {
                $quote->setDisplayable(0);
            }

            $em->persist($quote);
            $em->flush();

            return $this->redirectToRoute('quotes_browse');
        }

        return $this->render('quotes/add_edit.html.twig', [
            'controller_name' => 'QuotesController',
            'quote' => $quote,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/citations/delete/{id<\d+>}', name: 'quotes_delete', methods: ['GET', 'POST', 'DELETE'])]
    public function delete($id, QuotesRepository $qr, Request $request, EntityManagerInterface $em): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('delete-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $quote = $qr->find($id);

        if (null === $quote) {
            throw $this->createAccessDeniedException('Citation non trouvée !');
        }

        $em->remove($quote);
        $em->flush();

        return $this->redirectToRoute('quotes_browse');
    }
}
