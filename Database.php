<?php

class Database {
    private $host;
    private $dbname;
    private $user;
    private $pass;
    private $error;

    public function __construct(){
        $this->host = '127.0.0.1';
        $this->dbname = 'bdclinica';
        $this->user = 'root';
        $this->pass = '';
        $this->error = null;
    }

    public function getHost(){
        return $this->host;
    }

    public function getDbname(){
        return $this->dbname;
    }

    public function getUser(){
        return $this->user;
    }

    public function getPass(){
        return $this->pass;
    }

    public function getError(){
        return $this->error;
    }

    public function connect(){
        $connect = new mysqli(
            $this->getHost(),
            $this->getUser(),
            $this->getPass(),
            $this->getDbname(),
            3306
        );

        return $connect;
    }
}