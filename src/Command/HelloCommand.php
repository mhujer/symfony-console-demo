<?php
// src/Command/HelloCommand.php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('zdrojak:hello')
            ->setDescription('Jednoduchy Hello World!')
            ->addArgument('name', null, 'Koho zdravíme?', 'World')
            ->addOption('backwards', 'b', null, 'Pozpátku?')
            ->addOption('greeting', null, InputOption::VALUE_REQUIRED, 'Pozdrav', 'Hello');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $message = sprintf(
            '%s %s from Symfony Console!',
            $input->getOption('greeting'),
            $input->getArgument('name')
        );
        if ($input->getOption('backwards')) {
            $message = strrev($message);
        }
        $output->writeln($message);
    }
}
