<?php

require_once("config.php");

class Database
{

    public $con;

    public function __construct(){

        $this->open_db_connection();
    }

    public function open_db_connection(){

        $this->con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->con->connect_errno) {
            die("Database Connection failed badly" . $this->con->connect_error);
        }

    }

    public function query($sql){
        $result = $this->con->query($sql);
        $this->confirm_query($result);

        return $result;
    }


    public function confirm_query($result){

        if(!$result){
            die("query failed" .$this->con->error);
        }

    }

    public function escape_string($string){

        $escape_string = $this->con->real_escape_string($string);
        return $escape_string;
    }

    public function the_insert_id(){

        return $this->con->insert_id();
    }

}

$database = new Database();


