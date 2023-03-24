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
            ->setDescription('Creation Objet');
    }

    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln([
            'Création Objet',
            '================',
            '',
        ]);

        $io = new SymfonyStyle($input, $output);

        $objects = [];

        for ($i = 0; $i < 10; $i++) {
            $objects[] = new \stdClass();
        }
        $io->success('');

        return Command::SUCCESS;
    }
}