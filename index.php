<?php

require_once '/include/DbHandler.php';

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


//New Sample

$app->get('/getall', function() {
		
	$response = array();
	$db = new DbHandler();

	// fetching all user tasks
	$result = $db->getAll();
	//echo json_encode($result);
	echoRespnse(200,$result);
});


/**
 * Echoing json response to client
 * @param String $status_code Http response code
 * @param Int $response Json response
 */
function echoRespnse($status_code, $response) {
	$app = \Slim\Slim::getInstance();
	// Http response code
	$app->status($status_code);

	// setting response content type to json
	$app->contentType('application/json');

	echo json_encode($response);
}



$app->run();
