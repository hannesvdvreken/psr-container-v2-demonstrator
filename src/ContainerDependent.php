<?php

namespace App;

use Exception;
use Psr\Container\ContainerInterface;

class ContainerDependent
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function execute($id)
    {
        if ($this->container->has($id)) {
            return $this->container->get($id);
        }

        throw new Exception('Not found');
    }
}
