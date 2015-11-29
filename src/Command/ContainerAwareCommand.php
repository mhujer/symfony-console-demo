<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;

abstract class ContainerAwareCommand extends Command
{
    /**
     * @var ...
     */
    private $container;

    /**
     * @param ... $container
     */
    public function setContainer($container)
    {
        $this->container = $container;
    }

    /**
     * @return ...
     */
    public function getContainer()
    {
        return $this->container;
    }
}
