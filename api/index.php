<?php 
require '/var/www/Slim/vendor/autoload.php';  // include the Slim framework to the project
require 'routes/test.php';

$app = new \Slim\Slim(
    array( 'debug' => true )
);
$response = $app->response();
$app->setName('todo');

/* Routes */
$app->get('/', function() use ($app) {
    echo "hello world!";
});

// VERSION 1    
$app->group('/v1', function() use ($app) {
    // test route
    $app->group('/test', function() use($app) {
        $app->get('/', 'getTests');
    });
});

$app->run();  // load the application
    
