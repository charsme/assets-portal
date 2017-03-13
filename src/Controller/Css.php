<?php

namespace Labs\Controller;

use \Slim\Container;

class Css
{
    protected $container;

    // constructor receives container instance
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    
    public function __invoke($request, $response, $args)
    {
        $this->container->get('log')->info('Home Route');
        return $this->container->get('view')->render($response, 'base.twig', ['title' => 'Home']);
    }
}
