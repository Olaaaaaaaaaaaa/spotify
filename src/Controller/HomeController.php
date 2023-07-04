<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{


    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $message = 'C\'est moi wsh sur Spotify';

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'controller_message' => $message,
        ]);
    }
}
