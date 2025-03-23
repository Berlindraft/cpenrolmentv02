<?php

require_once __DIR__ . '/vendor/autoload.php'; // Autoload Composer dependencies

use Dotenv\Dotenv;

try {
    // Load environment variables from the .env file
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // Get database configuration from environment variables
    $host = $_ENV['DB_HOST'];
    $port = $_ENV['DB_PORT'];
    $dbname = $_ENV['DB_DATABASE'];
    $username = $_ENV['DB_USERNAME'];
    $password = $_ENV['DB_PASSWORD'];

    // Create a connection string
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Check connection
    if ($pdo) {
        echo "Connected to the PostgreSQL database successfully!";
    }
} catch (PDOException $e) {
    echo "Failed to connect to the PostgreSQL database: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error loading .env file: " . $e->getMessage();
}

?>
