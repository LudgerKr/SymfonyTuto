<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TutoController extends AbstractController
{
    /**
     * @Route("/tuto", name="tuto")
     */
    public function index()
    {
        return $this->render('tuto/index.html.twig', [
            'controller_name' => 'TutoController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */

    public function home()
    {
        return $this->render('tuto/home.html.twig', [ 'title' => "Bienvenue dans ce tutoriel", 'age' => 22]);
    }
}
