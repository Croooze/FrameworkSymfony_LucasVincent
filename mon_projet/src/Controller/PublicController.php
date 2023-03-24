<?php

namespace App\Controller;

use App\Repository\ObjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{

    private ObjetRepository $objetRepository;

    public function __construct(ObjetRepository $objetRepository)
    {
        $this->objetRepository = $objetRepository;
        parent::__construct();
    }

    #[Route('/public', name: 'home_page')]
    public function index(): Response
    {
        return $this->render('public/index.html.twig', [
            'controller_name' => 'PublicController',
        ]);
    }

    /*#[Route('/produit/{id}', name: 'home_page')]
    public function produit(): Response
    {
    return $this->render('public/produit/index.html.twig', [
    'controller_name' => 'PublicController',
    ]);
    }*/
    #[Route('/commande', name: 'home_page')]
    public function commande(): Response
    {
        return $this->render('public/commande/index.html.twig', [
            'controller_name' => 'PublicController',
        ]);
    }
}