<?php
// src/Command/TableCommand.php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TableCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('zdrojak:table')
            ->setDescription('Ukázka Table helperu');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $table = new Table($output);
        $table
            ->setHeaders(array('Datum', 'Název', 'Autor'))
            ->setRows(array(
                array('27.11.2015', 'Lumines: Vytváříme hru v React.js 1', 'Tobiáš Potoček'),
                array('26.11.2015', 'Poznámky z Reactive 2015. Ochutnávka budoucnosti, včera bylo pozdě a použití teď a tady', 'Daniel Steigerwald'),
                array('24.11.2015', 'Global Day of Coderetreat 2015', 'Milan Lempera'),
                array('16.11.2015', 'Jaká byla konference W-JAX 2015', 'Tomáš Dvořák'),
            ));
        $table->render();
    }
}
