<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('ROOT', dirname(__DIR__));
require ROOT . '/vendor/autoload.php';
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
session_start();

use App\Repository\UserRepository;
use App\Controllers\UserController;
$userRepository = new UserRepository();
$userController = new UserController($userRepository);

switch ($path) {
    case '/':
        echo "Hello World!";
        break;
    default:
        http_response_code(404);
}

?>