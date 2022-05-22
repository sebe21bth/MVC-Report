<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/about2", name="about2")
     */
    public function about(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body><p>About</p></body></html>'
        );
    }
}
