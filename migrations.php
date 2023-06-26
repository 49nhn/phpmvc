<?php
require __DIR__ . '/core/Application.php';
require __DIR__ . '/controllers/SiteController.php';
require __DIR__ . '/controllers/AuthController.php';
require_once __DIR__ . '/vendor/autoload.php';
use app\controller\AuthController;
use app\controllers\SiteController;
use app\core\Application;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();



$dbconfig = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application(__DIR__, $dbconfig);

$app->db->applyMigrations();