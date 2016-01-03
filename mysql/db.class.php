<?php
class BD
{
    protected $connection;
    public function __construct($host,$user,$password,$db_name)
    {
       $this->connection = new mysqli($host,$user,$password, $db_name);
        if (!$this->connection){
            throw new Exception ('Could not connect to DB');
        }
    }
    public function query ($sql){
        if (!$this->connection){
            return false;
        }
        $result = $this->connection($sql);
        if (mysqli_error($this->connection)){
            throw new Exception(mysqli_error($this->connection));
        }
    }
    public function escape($str){
        return mysqli_escape_string($this->connection,$str);
    }
}