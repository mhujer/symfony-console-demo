<?php
// src/Command/PhpReplCommand.php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

/**
 * V článku o něm nemluvím, jen mě to napadlo vyzkoušet, jestli to jde :-)
 */
class PhpReplCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('zdrojak:php:repl')
            ->setDescription('PHP REPL (Read-Eval-Print-Loop)');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Welcome to Symfony Console based REPL');
        $helper = $this->getHelper('question');
        $question = new Question('>> ');

        while ($command = $helper->ask($input, $output, $question)) {
            try {
                ob_start();
                eval($command . ';');
                $out = ob_get_clean();
                if (!$out) {
                    ob_start();
                    eval('var_dump(' . trim($command, ';') . ');');
                    $out = ob_get_clean();
                }
                $output->writeln($out);
            } catch (\ParseError $e) {
                $output->writeln(sprintf('<error>Could not parse: %s</error>', $command));
                $output->writeln($e->getMessage());
            }
        }
    }
}
