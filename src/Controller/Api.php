<?php

namespace Raraz\Controller;

use \Slim\Container;

class Api
{
    protected $container;

    // constructor receives container instance
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    
    public function __invoke($request, $response, $args)
    {
        $this->container->get('log')->info('Api Route');
        return $this->container->get('view')->render($response, 'base.twig', ['title' => 'Api']);
    }
}
