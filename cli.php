<?php
//cli.php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

//tady by byla inicializace containeru
$container = null;

$console = new Application('Symfony Console demo for Zdroják.cz', '3.7.4');

$command = new App\Command\HelloCommand();
$command->setContainer($container);
$console->add($command);

$console->add(new App\Command\QuestionCommand());
$console->add(new App\Command\ProgressBarCommand());
$console->add(new App\Command\TableCommand());
$console->add(new App\Command\MetaCommand());

$console->run();
