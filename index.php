<?php

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

//GET Request
$app->get('/get/:id', function ($id) {
	 echo "Your GET Request is for :: $id";
});


// POST Request
$app->post('/post/:id', function ($id) {
	 echo "Your POST Request is for :: $id";
});


$app->run();
