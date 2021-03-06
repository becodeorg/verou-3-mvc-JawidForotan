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
            $articles[] = new Article($rawArticle['id'], $rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date'], $rawArticle["author"], $rawArticle["image"]);
        }
        return $articles;
    }

    // Get by id
    public function show() 
    {
        // TODO: this can be used for a detail page
        $sql = "SELECT * FROM `articles` WHERE `id` = '{$_GET["id"]}'";
        $statement = $this->database->connection->prepare($sql);
        $statement->execute();
        $element = $statement->fetch();
        $article = new Article($element['id'], $element['title'], $element['description'], $element['publish_date'], $element["author"], $element["image"]);
        require "View/articles/show.php";
    }
    
    // Create
    public function create()
    {
    // Get data from the form
        if(!empty($_POST["title"]) && (!empty($_POST["description"])) && (!empty($_POST["publishDate"]))
        && (!empty($_POST["author"]))
        && (!empty($_POST["image"]))){
            if(isset($_POST["submit"])){
                $title = $_POST["title"];
                $description = $_POST["description"];
                $publishDate = $_POST["publishDate"];
                $author = $_POST["author"];
                $image = $_POST["image"]; 

                // Insert data into database
                $sql = "INSERT INTO `articles` (title, description, publish_date, author, image)
                VALUES ('$title', '$description', '$publishDate', '$author', '$image')";
                $statement = $this->database->connection->prepare($sql);
                $statement->execute();
                header("Location: index.php?page=articles-index");
            }
        }elseif(isset($_POST["submit"])){
        print'<div class="container alert alert-danger d-flex justify-content-center mt-5 w-25"><h3>All the fields must be filled!</h3></div>';
        }
        require "View/create.php"; 
    }
    
    // Delete
    public function delete()
    {
        $sql = "DELETE FROM `articles` WHERE `id` = {$_GET['id']}";
        $statement = $this->database->connection->prepare($sql);
        $statement->execute();
        header("Location: index.php?page=articles-index");
    }
    
    // Update
    public function edit()
    {
        // Show values in update form
        $sql = "SELECT * FROM `articles` WHERE `id` = '{$_GET["id"]}'";
        $statement = $this->database->connection->prepare($sql);
        $statement->execute();
        $element = $statement->fetch();
        $article = new Article($element['id'], $element['title'], $element['description'], $element['publish_date'], $element["author"], $element["image"]);
        
        // Update values
        if(isset($_POST["update"])){
            $title = $_POST["title"];
            $description = $_POST["description"];
            $publishDate = $_POST["publishDate"];
            $author = $_POST["author"];
            $image = $_POST["image"];
            $updateSql = "UPDATE `articles` SET title = '$title', description = '$description',
            publish_date = '$publishDate', author = '$author', image = '$image' WHERE `id` = '{$_GET['id']}'";
            $updateStatement = $this->database->connection->prepare($updateSql);
            $updateStatement->execute();
            header("Location: index.php?page=articles-index");
        }
        require "View/update.php";
    }
}
?>


