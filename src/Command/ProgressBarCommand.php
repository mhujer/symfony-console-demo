<?php
// src/Command/ProgressBarCommand.php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ProgressBarCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('zdrojak:progress')
            ->setDescription('Ukázka ProgressBar helperu');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $data = range(1, 100);

        $progress = new ProgressBar($output, count($data));
        $progress->start();

        foreach ($data as $item) {
            //@todo do some work it $item
            usleep(30000);

            $progress->advance();
        }
        $progress->finish();
    }
}
