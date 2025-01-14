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
    #[Route('/fauritte2', name: 'app_fauritte2')]
    public function index2(): Response
    {
        return $this->render('fauritte/index2.html.twig', [
            'controller_name' => 'FauritteController',
        ]);
    }
}
