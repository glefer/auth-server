<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealmsController extends AbstractController
{
    #[Route('/realms', name: 'admin_realms')]
    public function index(): Response
    {
        return $this->render('realms/index.html.twig', [
            'controller_name' => 'RealmsController',
        ]);
    }
}
