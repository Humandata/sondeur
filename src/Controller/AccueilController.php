<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index()
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'currentMenu'     => 'accueil',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('accueil/home.html.twig', [
            'controller_name' => 'AccueilController',
            'currentMenu'     => 'accueil',
        ]);
    }

    /**
     * @Route("/apropos", name="apropos")
     */
    public function apropos()
    {
        return $this->render('accueil/apropos.html.twig', [
            'controller_name' => 'À propos',
            'currentMenu'     => 'apropos',
        ]);
    }

    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation()
    {
        return $this->render('accueil/presentation.html.twig', [
            'controller_name' => 'Présentations',
            'currentMenu'     => 'presentation',
        ]);
    }

        /**
     * @Route("/dossier", name="dossier")
     */
    public function dossier()
    {
        return $this->render('accueil/dossier.html.twig', [
            'controller_name' => 'Dossier',
            'currentMenu'     => 'dossier',
        ]);
    }    
}
