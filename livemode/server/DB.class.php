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

    function insertCss($leveldata, $level)
    { 
        $sql = "UPDATE levels SET htmluser = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$leveldata, $level]);
    }

}


?>