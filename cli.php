<?php
//cli.php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$console = new Application('Symfony Console demo for Zdroják.cz', '3.7.4');

$console->run();
