<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Presentation;

class PresentationController extends AbstractController
{
    /**
     * @Route("/", name="presentation")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Presentation::class);
        $presentation = $repo->findAll();
        return $this->render('presentation/index.html.twig', [
            'presentations' => $presentation,
        ]);
    }
}
