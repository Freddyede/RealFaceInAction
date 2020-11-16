<?php

namespace App\Controller;

use App\Entity\Produits;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * TODO:
     *  Mettre un formulaire d'erreur sur les problèmes des pages.
     *  Rendre le site attractif pour tous les utilisateurs.
     *  Mettre en avant les plus de notre société (FaceInAction), Message et vente libre et sécurisée.
     *  Mettre beaucoup de liens en direction de nos pages les plus côtés.
     * IN PROGRESS :
     *  Retourner tous les produits les plus vendus pour rendre accros nos utilisateurs.
     * DONE
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $produits = $this->getDoctrine()->getRepository(Produits::class)->findByLittlePriceAndMoreUser();
        return $this->render('home/index.html.twig',[
            'produits'=>$produits,
            'controller_name' => 'HomeController',
            'message' => 'Welcome to your new home controller!',
        ]);
    }
}
