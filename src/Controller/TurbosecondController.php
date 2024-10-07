<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TurbosecondController extends AbstractController
{
    #[Route('/turbosecond', name: 'app_turbosecond')]
    public function index(): Response
    {
        return $this->render('turbosecond/index.html.twig', [
            'controller_name' => 'TurbosecondController',
        ]);
    }
}
