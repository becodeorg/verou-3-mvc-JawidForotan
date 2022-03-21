<?php

declare(strict_types = 1);

require_once "../DB/config.php";
require_once "../DB/database.php";
require_once "../Model/Article.php";
        
class ArticleController
{


    public function index()
    {
        // Load all required data
        //$articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    public function getArticles()
    {
        //TODO: prepare the database connection
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        try {
            $dsn = new PDO("mysql:host=$serverName;dbname=mvc", $userName, $password);
            echo "Connected successfully";
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }

        $sql = "SELECT * FROM `articles`";
        $statement = $dsn->prepare($sql);
        $statement->execute();
        $elements = $statement->fetchAll();
        
        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // TODO: fetch all articles as $rawArticles (as a simple array)
        $rawArticles = $elements;
        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        }
        return $articles;
    }

    public function show() 
    {
        // TODO: this can be used for a detail page
    }
}
 

