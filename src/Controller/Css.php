<?php

namespace Labs\Controller;

use \Slim\Container;

class Css
{
    protected $container;
    protected $config;
    protected $cache;

    // constructor receives container instance
    public function __construct(Container $container, $minify, $config = [])
    {
        $this->container = $container;
        $this->minify = $minify;
        $this->config = $config;
    }
    
    public function __invoke($request, $response, $args)
    {
        $this->container->get('log')->info('Home Route');
        return $this->container->get('view')->render($response, 'base.twig', ['title' => 'Home']);
    }
}
