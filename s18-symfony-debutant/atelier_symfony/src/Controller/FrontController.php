<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="front")
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        $title = "bienvenu sur";
        $subtitle = "atelier";
        return $this->render('front/index.html.twig', [
            'title' => $title,
            'subtitle' => $subtitle
        ]);
    }
}
