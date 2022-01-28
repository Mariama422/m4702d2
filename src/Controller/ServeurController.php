<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServeurController extends AbstractController
{
    /**
     * @Route("/serveur", name="serveur")
     */
    public function index(): Response
    {
        return $this->render('serveur/index.html.twig', [
            'controller_name' => 'ServeurController',
        ]);
    }


    
        /**
         * @Route("/formulaire", name="formulaire")
         */
        public function formulaire(): Response
        {
            return $this->render('serveur/formulaire.html.twig', [
                'controller_name' => 'ServeurController',
            ]);
        }
    

 /**
         * @Route("/docs", name="docs")
         */
        public function docs(): Response
        {
            return $this->render('serveur/docs.html.twig', [
                'controller_name' => 'ServeurController',
            ]);
        }

}
