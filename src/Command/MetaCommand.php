<?php
// src/Command/MetaCommand.php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MetaCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('zdrojak:meta')
            ->setDescription('Spusteni dalsich prikazu!');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //zavoláme HelloCommand s parametry
        $hello = $this->getApplication()->find('zdrojak:hello');
        $hello->run(new ArrayInput([
            'name' => 'Martin',
            '--greeting' => 'Nazdar',
        ]), $output);

        //zavoláme ProgressCommand bez parametrů
        $progress = $this->getApplication()->find('zdrojak:progress');
        $progress->run(new ArrayInput([]), $output);
    }
}
