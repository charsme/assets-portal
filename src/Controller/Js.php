<?php

namespace Labs\Controller;

use \Slim\Container;

class Js
{
    protected $container;
    protected $config;
    protected $minify;

    // constructor receives container instance
    public function __construct(Container $container, $minify, $config = [])
    {
        $this->container = $container;
        $this->minify = $minify;
        $this->config = $config;
    }
    
    public function __invoke($request, $response, $args)
    {
        return $this->container->get('view')->render($response, 'base.twig', ['title' => 'Asset']);
    }
}
