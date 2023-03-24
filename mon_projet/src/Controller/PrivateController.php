<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin', name: 'admin')]
class PrivateController extends AbstractController
{
    #[Route('/admin', name: 'admin')]
    public function login(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'PrivateController',
        ]);
    }

    #[Route('/listing', name: 'liste')]
    public function listing(): Response
    {
        return $this->render('/listing/index.html.twig', [
            'controller_name' => 'PrivateController',
        ]);
    }
}