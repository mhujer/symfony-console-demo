<?php
//cli.php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$console = new Application('Symfony Console demo for Zdroják.cz', '3.7.4');
$console->add(new App\Command\HelloCommand());
$console->add(new App\Command\QuestionCommand());
$console->add(new App\Command\ProgressBarCommand());
$console->add(new App\Command\TableCommand());

$console->run();
