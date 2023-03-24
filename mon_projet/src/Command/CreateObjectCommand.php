<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Objet;

#[AsCommand(
name: 'create_object',
description: 'Add a short description for your command',
)]

class CreateObjectCommand extends Command
{
    protected static $defaultName = 'app:create-objects';

    protected function configure(): void
    {
        $this
            ->setName('app:create-object')
            ->setDescription('Creation Objet');
    }

    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $entityManager = $this->doctrine->getManager();

        $objet1 = new Objet();
        $objet1->setTitre("Pelle");
        $objet1->setDescription("Outil de Jardin");
        $objet1->setPrix(15);
        $entityManager->persist($objet1);

        $objet2 = new Objet();
        $objet2->setTitre("Cisaille");
        $objet2->setDescription("Outil de Jardin");
        $objet2->setPrix(10);
        $entityManager->persist($objet2);

        $objet3 = new Objet();
        $objet3->setTitre("Tondeuse");
        $objet3->setDescription("Outil de Jardin");
        $objet3->setPrix(18);
        $entityManager->persist($objet3);

        $objet4 = new Objet();
        $objet4->setTitre("Fourche");
        $objet4->setDescription("Outil de Jardin");
        $objet4->setPrix(22);
        $entityManager->persist($objet4);

        $objet5 = new Objet();
        $objet5->setTitre("Rateau");
        $objet5->setDescription("Outil de Jardin");
        $objet5->setPrix(10);
        $entityManager->persist($objet5);

        $objet6 = new Objet();
        $objet6->setTitre("Sécateur");
        $objet6->setDescription("Outil de Jardin");
        $objet6->setPrix(7.80);
        $entityManager->persist($objet6);

        $objet7 = new Objet();
        $objet7->setTitre("Souffleur");
        $objet7->setDescription("Outil de Jardin");
        $objet7->setPrix(75);
        $entityManager->persist($objet7);

        $objet8 = new Objet();
        $objet8->setTitre("Marteau");
        $objet8->setDescription("Outil de Jardin");
        $objet8->setPrix(9.90);
        $entityManager->persist($objet8);

        $objet9 = new Objet();
        $objet9->setTitre("Pic");
        $objet9->setDescription("Outil de Jardin");
        $objet9->setPrix(2.80);
        $entityManager->persist($objet9);

        $objet10 = new Objet();
        $objet10->setTitre("Brouette");
        $objet10->setDescription("Outil de Jardin");
        $objet10->setPrix(27);
        $entityManager->persist($objet10);

        $entityManager->flush();
        return Command::SUCCESS;
    }
}