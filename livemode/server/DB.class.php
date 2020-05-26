<?php

class DB
{
    function __construct($host, $dbname, $user, $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
        $this->charset = "utf8mb4";
    }

    function connect() 
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset";
        $this->pdo = new PDO($dsn, $this->user, $this->pass);
        return $this;
    }
    
    function getLevelData($level)
    {
        $sql = "select * from levels where id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$level]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    function insertNewLevelData($leveldata, $level)
    { 
        $sql = "UPDATE levels SET template = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$leveldata, $level]);
    }


    // function getUser($username, $password)
    // {
    //     $sql = "SELECT * FROM users WHERE username = ? and password = ?";
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute([$username, $password]);

    //     return $stmt->fetch(PDO::FETCH_OBJ);
    // }

    // function insertPost($code, $userId, $lang, $private, $link)
    // {
    //     $sql = "INSERT INTO posts (code, userId, language, private, link) 
    //     VALUES (?,?,?,?,?)";
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute([$code, $userId, $lang, $private, $link]);
    // }

    // function getLastIdPost() 
    // {
    //     $sql = "SELECT @last_id := MAX(id) FROM posts;

    //     SELECT * FROM table WHERE id = @last_id;";
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute();
        
    //     return $stmt->fetch();
    // }

    // function getPost($id)
    // {
    //     $sql = "SELECT * FROM posts where id = ?";
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute([$id]);

    //     return $stmt->fetch(PDO::FETCH_OBJ);
    // }

}


?>