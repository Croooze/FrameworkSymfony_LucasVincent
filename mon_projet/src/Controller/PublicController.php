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
        /*parent::__construct();*/
    }


    #[Route('/', name: 'app_public')]
    public function index(): Response
    {
        $listeObjet = $this->objetRepository->findAll();
        return $this->render('public/index.html.twig', [
            'controller_name' => 'PublicController',
            'liste' => $listeObjet,
        ]);
    }

    #[Route('/produit/{id}', name: 'app_produit')]
    public function produit($id): Response
    {
        $produit = $this->objetRepository->find(['id' => $id]);
        return $this->render('public/produit.html.twig', [
            'controller_name' => 'PublicController',
            'produit' => $produit,
        ]);
    }


    #[Route('/commande', name: 'app_commande')]
    public function commande(): Response
    {
        return $this->render('public/commande/index.html.twig', [
            'controller_name' => 'PublicController',
        ]);
    }
}