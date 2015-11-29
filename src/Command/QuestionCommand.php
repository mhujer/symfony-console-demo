<?php
// src/Command/QuestionCommand.php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class QuestionCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('zdrojak:question')
            ->setDescription('Ukázka Question helperu');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $questionHelper = $this->getHelper('question');
        $question = new Question('Zadejte jméno souboru: ', 'default.txt');

        $filename = $questionHelper->ask($input, $output, $question);

        $output->writeln(sprintf('Použije se soubor %s', $filename));
    }
}
