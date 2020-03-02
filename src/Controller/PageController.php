<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Rest\Controller(prefix="/", service="app.page.controller")
 */
class PageController extends AbstractController
{
    /**
     * @Route("/contact" , name = "Contact")
     * @return Response
     */
    public function contact() : Response
    {
        return new Response( $this->render('page/contact.html.twig'));
    }

    /**
     * @Route("/projet/{projet}" , name = "Projet")
     * @return Response
     */
    public function projet($projet) : Response
    {
        return new Response( $this->render('page/projet/' . $projet . '.html.twig'));
    }
}