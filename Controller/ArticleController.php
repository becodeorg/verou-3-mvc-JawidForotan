<?php

declare(strict_types = 1);
require_once "./Model/Article.php";


class ArticleController
{
    private Database $database;

    public function __construct(Database $databaseP)
    {
        $this->database = $databaseP;
    }
    public function index()
    {
        // Load all required data
        
        $articles = $this->getArticles();
        require "View/articles/index.php";
        
        // Load the view
    }

    // Note: this function can also be used in a repository - the choice is yours
    public function getArticles()
    {
        //TODO: prepare the database connection

        $sql = "SELECT * FROM `articles`";
        $statement = $this->database->connection->prepare($sql);
        $statement->execute();
        $elements = $statement->fetchAll();

        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // TODO: fetch all articles as $rawArticles (as a simple array)

        $rawArticles = $elements;
        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['id'], $rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        }
        return $articles;
    }

    public function show() 
    {
        // TODO: this can be used for a detail page
        $sql = "SELECT * FROM `articles` WHERE `id` = '{$_GET["id"]}'";
        $statement = $this->database->connection->prepare($sql);
        $statement->execute();
        $element = $statement->fetch();
        $article = new Article($element['id'], $element['title'], $element['description'], $element['publish_date']);
        require "View/articles/show.php";
    }
}

?>


