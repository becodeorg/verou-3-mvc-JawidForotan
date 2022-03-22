<?php
require "config.php";

class Database
{
    private string $host;
    private string $user;
    private string $password;
    private string $dbname;

    public PDO $connection;

    public function __construct(string $host, string $user, string $password, string $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function connection(): void
    {
        $dsn = "mysql:host={$this->host}; dbname={$this->dbname}";
        try{
            $this->connection = new PDO($dsn, $this->user, $this->password);
        }catch(PDOException $error){
            $errorMassage = "Database error";
            $errorMassage .= $error->getMessage();
            echo $errorMassage;
            exit();
        }
    }
}

?>