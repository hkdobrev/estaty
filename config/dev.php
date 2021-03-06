<?php

use Silex\Provider\MonologServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

error_reporting(E_ALL);
ini_set('display_errors', 1);

// enable the debug mode
$app['debug'] = true;

$app['twig.options'] = ['debug' => true, 'cache' => false];

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../var/log/silex_dev.log',
    'monolog.name' => 'estaty'
));

if ('cli' !== PHP_SAPI) {
    $app->register(new WebProfilerServiceProvider(), array(
        'profiler.cache_dir' => __DIR__.'/../var/cache/profiler',
    ));
}
