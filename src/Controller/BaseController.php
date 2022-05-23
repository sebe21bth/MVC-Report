<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function base(): Response
    {
        
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/report", name="report")
     */
    public function report(): Response
    {

        return $this->render('report.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {

        return $this->render('about.html.twig');
    }
}
