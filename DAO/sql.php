<?php

class Sql extends PDO{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("pgsql:host=localhost; port=5432; dbname=curso_php", "postgres", "acesse");
    }
    
    private function setParams($statment, $parameters = array()){
        foreach ($parameters as $key => $value){
            $this->setParam($statment, $key, $value);
        }
    }

    private function setParam($statment, $key, $value){
        $statment->bindParam($key, $value);
    }

    public function runQuery($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        
        $stmt->execute();

        return $stmt;
    }

    public function select($rawQuery, $params = array()): array{
        $stmt = $this->runQuery($rawQuery, $params);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}