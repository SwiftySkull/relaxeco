<?php

namespace App\Controller\Api;

use App\Repository\HomeRepository;
use App\Repository\LiteratureRepository;
use App\Repository\QuotesRepository;
use App\Repository\SeancesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/api/all', name: 'api_all')]
    public function apiAll(HomeRepository $hr, SeancesRepository $sr, LiteratureRepository $lr, QuotesRepository $qr): Response
    {
        $home = $hr->find(1);

        $allSeances = $sr->findBy(['displayable' => true, 'displayOnWebsite' => true, 'population' => 1]);
        $kidsSeances = $sr->findBy(['displayable' => true, 'displayOnWebsite' => true, 'population' => 2]);

        $poetry = $lr->findBy(['displayable' => true, 'displayOnWebsite' => true]);
        $quotes = $qr->findBy(['displayable' => true, 'displayOnWebsite' => true]);

        return $this->json([
            'home' => $home,
            'allSeances' => $allSeances,
            'kidsSeances' => $kidsSeances,
            'poetry' => $poetry,
            'quotes' => $quotes,
        ], 200, [], ['groups' => ['all']]);
    }
}
