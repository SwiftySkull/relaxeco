<?php

namespace App\Controller\Admin;

use App\Entity\Home;
use App\Utils\Utils;
use App\Form\HomeType;
use App\Repository\HomeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/accueil-page', name: 'home_page_browse')]
    public function index(HomeRepository $hr): Response
    {
        $home = $hr->find(1);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'home' => $home,
        ]);
    }

    #[Route('/accueil-page/edit', name: 'home_page_edit')]
    public function edit(HomeRepository $hr, Request $request, EntityManagerInterface $em, Utils $utils): Response
    {
        $token = $request->request->get('token');
        if (!$this->isCsrfTokenValid('add-edit-item', $token)) {
            throw $this->createAccessDeniedException('Action non autorisée !');
        }

        $home = $hr->find(1);

        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $home = $utils->checkContent($home);

            $em->flush();

            return $this->redirectToRoute('home_page_browse');
        }

        return $this->render('home/edit.html.twig', [
            'controller_name' => 'HomeController',
            'home' => $home,
            'form' => $form->createView(),
        ]);
    }

    // #[Route('/accueil-page/update', name: 'home_page_update')]
    // public function update(EntityManagerInterface $em): Response
    // {
    //     $home = new Home();

    //     $home->setContent('Passionnée depuis toujours par les remèdes naturels et les médecines douces, j’ai effectué ces 18 dernières années les formations nécessaires pour évoluer dans le bien-être tant au niveau personnel que professionel.

    //     En effet, je suis formée en reflexologie plantaire et globale, puis en massage harmonisant pour enfants, femmes enceintes et adultes; Praticienne en reiki (réequilibrage des energies) et conseillère phyto-aroma.
        
    //     Ces méthodes agissent au niveau physique, émotionel et energetique afin de chasser le stress bien trop présent dans nos vies.
        
    //     C’est avec plaisir que je vous accueille et vous conseille au chalet de bien -être Relax et Co du lundi au samedi sur RDV pour prendre soin de vous.');

    //     $em->persist($home);
    //     $em->flush();

    //     return $this->redirectToRoute('home_page_browse');
    // }
}
