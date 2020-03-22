<?php
namespace App\Controller;

use App\Entity\Dessin;
use App\Repository\DessinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DessinController extends AbstractController
{
    /** @var DessinRepository */
    private $respository;

    public function __construct(DessinRepository $repository)
    {
        $this->respository = $repository;
    }

    /**
     * @Route(path="/galery", name="Galery")
     */
    public function Drawing() : Response
    {
        $dessin = new Dessin();
        $dessin->setTitle('title');
        $dessin->setDescription('description');
        $dessin->setUrl('url');
        return $this->render('Dessin/Dessin.html.twig', [
            'dessins' => $dessin

        ]);
    }
}