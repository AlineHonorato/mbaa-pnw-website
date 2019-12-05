<?php
/*

This script handles AJAX requests from "Send me an email when it's done" form
and store emails in MailChimp subscribers list or in a file.

*/

require('config.php');
require('assets/lib/enterpos-sdk.php');

// Allow only post method
if($_SERVER["REQUEST_METHOD"] != "POST" && empty($_POST["email"])) {
	header('HTTP/1.1 403 Forbidden');
	header('Status: 403 Forbidden');
	exit;
}

$email = $_POST["email"];

// Send headers
header('HTTP/1.1 200 OK');
header('Status: 200 OK');
header('Content-type: application/json');


// Check if email is valid
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	exit;
}

// Get the instance and login
$api = PosErp::getInstance("mbaa");

$api->POST("api/sesion/iniciar", array(
        'password' => ENTERPOS_API_PASS,
        'usuario' => ENTERPOS_API_USER
     ));

$result = $api->POST("api/cliente/nuevo", array(
        'razon_social' => $_POST["email"],
        'email' => $_POST["email"]
     ));

if ($result->status == "error") {
	// This might mean that the user already exists
	$searchResult = $api->POST("api/cliente/buscar", array(
	        'query' => $_POST["email"]
	     ));

	$foundExistingUser = null;
	foreach($searchResult->resultados as $user)
	{
		if ($user->correo_electronico ==  $_POST["email"])
		{
			$foundExistingUser = $user;
			break;
		}
	}

	if ($foundExistingUser == null)
	{
		// Something is really wrong :/
		echo json_encode(array(
			"status" => "error",
			"type" => "EmailAlreadyInUse"
		));
		exit;
	}

	$result = $api->POST("api/cliente/seguimiento/nuevo", array(
        'id_cliente' => $foundExistingUser->id_usuario,
        'texto' => "User registered via website (" . $_SERVER['SERVER_NAME'] . ")"
     ));

	if ($foundExistingUser->clasificaciones_cliente == null) {
		$foundExistingUser->clasificaciones_cliente = [];

	} else if (is_string($foundExistingUser->clasificaciones_cliente)) {
		$foundExistingUser->clasificaciones_cliente = explode(",", $foundExistingUser->clasificaciones_cliente);

	}

	$result = $api->POST("api/cliente/editar", array(
        'id_cliente' => $foundExistingUser->id_usuario,
        'clasificacion_cliente' => array_merge($foundExistingUser->clasificaciones_cliente, array(2))
     ));

	echo json_encode(array("status" => "success" ));
	exit;
}

$userId = $result->id_cliente;

$result = $api->POST("api/cliente/seguimiento/nuevo", array(
        'id_cliente' => $userId,
        'texto' => "User registered via website (" . $_SERVER['SERVER_NAME'] . ")"
     ));

$result = $api->POST("api/cliente/editar", array(
        'id_cliente' => $userId,
        'clasificacion_cliente' => array(2)
     ));


echo json_encode(array("status" => "success" ));
