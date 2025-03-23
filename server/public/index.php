<?php
// filepath: /c:/xampp/htdocs/php_api/public/index.php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Autoload classes using Composer
require_once '../vendor/autoload.php';

// Define the base path
define('BASE_PATH', dirname(__DIR__));

// Load the core application
use App\Core\App;

require_once BASE_PATH . '/app/core/App.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Initialize the application
$app = new App();

?>