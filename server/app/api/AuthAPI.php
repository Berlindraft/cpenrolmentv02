<?php

require_once '../config/bootstrap.php'; // Load all required files (autoload, config)

use App\Controller\SignupController;

$request = json_decode(file_get_contents('php://input'), true);
$controller = new SignupController();
$response = $controller->signup($request);

header('Content-Type: application/json');
echo json_encode($response);
