<?php

use Labs\Controller as C;
use MatthiasMullie\Minify;

$container[C\Css::class] = function ($c) {
    $config = $c->get('settings');
    
    return new C\Css($c, new Minify\CSS() ,$config);
};