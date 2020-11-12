<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * TODO:
     * IN PROGRESS :
     * DONE
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig',[
            'message' => 'Welcome to your new controller!',
            'controller_name' => 'HomeController',
        ]);
    }
}
