<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Rest\Controller(prefix="/", service="app.home.controller")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/" , name = "home")
     * @return Response
     */
    public function index() : Response
    {
        return new Response($this->render('page/home.html.twig'));
    }
}