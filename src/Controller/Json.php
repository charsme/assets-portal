<?php

namespace Raraz\Controller;

use \Slim\Container;

class Asset
{
    protected $container;

    // constructor receives container instance
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    
    public function __invoke($request, $response, $args)
    {
        return $this->container->get('view')->render($response, 'base.twig', ['title' => 'Asset']);
    }
}
