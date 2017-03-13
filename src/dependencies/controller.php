<?php

use MatthiasMullie\Minify;

$container[\Labs\Controller\Css::class] = function ($c) {
    $config = $c->get('settings');
    
    return new \Labs\Controller\Css($c, new Minify\CSS() ,$config);
};

$container[\Labs\Controller\js::class] = function ($c) {
    $config = $c->get('settings');
    
    return new \Labs\Controller\Js($c, new Minify\JS() ,$config);
};