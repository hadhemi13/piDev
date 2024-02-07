<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HadhController extends AbstractController
{
    #[Route('/hadh', name: 'app_hadh')]
    public function index(): Response
    {
        return $this->render('hadh/index.html.twig', [
            'controller_name' => 'HadhController',
        ]);
    }
}
