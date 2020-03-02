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
     * @Route("/contact" , name = "contact")
     * @return Response
     */
    public function contact() : Response
    {
        return new Response( $this->render('page/contact.html.twig'));
    }

    /**
     * @Route("/projet1" , name = "projet1")
     * @return Response
     */
    public function projet1() : Response
    {
        return new Response( $this->render('page/Projet1.html.twig'));
    }
}