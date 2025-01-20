<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FauritteController extends AbstractController
{
    #[Route('/fauritte', name: 'app_fauritte')]
    public function index(): Response
    {
        return $this->render('fauritte/index.html.twig', [
            'controller_name' => 'FauritteController',
        ]);
    }

    #[Route('/photos', name: 'app_photos')]
    public function photos(): Response
    {
        return $this->render('fauritte/photos.html.twig', [
            'controller_name' => 'FauritteController',
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('fauritte/cv.html.twig', [
            'controller_name' => 'FauritteController',
        ]);
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolios(): Response
    {
        return $this->render('fauritte/portfolio.html.twig', [
            'controller_name' => 'FauritteController',
        ]);
    }
}
