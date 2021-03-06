<?php

namespace App\Controller;

use App\Repository\PinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    /**
     * @Route("/pins", name="pins")
     */
    public function index(PinRepository $pinRepository): Response
    {
        $pins = $pinRepository->findAll();

        return $this->render('pins/index.html.twig', [
            'pin' => $pins,
        ]);
    }
}
