<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TurbofirstController extends AbstractController
{
    #[Route('/turbofirst', name: 'app_turbofirst')]
    public function index(): Response
    {
        return $this->render('turbofirst/index.html.twig', [
            'controller_name' => 'TurbofirstController',
        ]);
    }
}
