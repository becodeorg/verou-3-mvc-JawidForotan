<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require 'Model/Article.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/ArticleController.php';
require "./DB/config.php";
require "./DB/database.php";

// Get the current page to load
// If nothing is specified, it will remain empty (home should be loaded)
$page = $_GET['page'] ?? null;

$DB = new Database($config["host"], $config["user"], $config["password"], $config["dbName"]);
$DB->connection();

// Load the controller
// It will *control* the rest of the work to load the page

switch ($page) {
    case 'articles-index':
        // This is shorthand for:
        // $articleController = new ArticleController;
        // $articleController->index();
        (new ArticleController($DB))->index();
        break;
    case 'articles-show':
        // TODO: detail page
        (new ArticleController($DB))->show();
        break;
    case 'articles-create':
        (new ArticleController($DB))->create();
        echo "Hello from article controller";
        break;
    case 'home':
    default:
        (new HomepageController())->index();
        break;
}