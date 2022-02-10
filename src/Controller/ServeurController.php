<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Utilisateur;


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
         * @Route("/traitement", name="traitement")
         */
        public function traitement(request $request): Response
            {
            $login=$request->request-> get("pseudo");
            $password=$request -> request -> get("password");

           
        /* if (( $login == "root") && ($password == "toor"))

        {
            $text = "valide";
        }

        else {
            $text = "erreur";
        }

        */
        $reponse = $manager ->getRepository (Utilisateur::class) -> findOneBy(['login' => $login]); 
        
        if($reponse == NULL)
        {

            $valide="user n'existe pas";
        }

        else
        { 
            $password-$reponse -> getPassword(); 
        
            if($password==$password)
            
            { 
                $valide="valide";
            }else
            
            {
                $valide="password pas correct";
            }
            return $this->render('serveur/traitement.html.twig',
             [
                'controller_name' => 'ServeurController',
                'login' => $login,
                'password' => $password,
                'text' => $text,
            ]);
        }

    }
}