<?php

use Estaty\Application;
use Estaty\Controller\HomepageController;

$app['homepage.controller'] = $app->share(function(Silex\Application $app) {
    return new HomepageController();
});

$app->get('/', 'homepage.controller:show')
    ->bind('homepage');
