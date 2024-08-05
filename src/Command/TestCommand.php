<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:test',
    description: 'Execute une commande de test.'
)]
class TestCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("Execution de la commande de test");

        $output->writeln([
            'Ligne 01',
            'Ligne 02',
            'Ligne 03',
        ]);


        if( false ){
            $output->writeln("Erreur d'execution");

            return Command::FAILURE;
        }

        if( false ){
            $output->writeln("Arguments invalide");

            return Command::INVALID;
        }

        return Command::SUCCESS;
    }
}