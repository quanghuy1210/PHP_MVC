<?php

class DB{

    public $con;
    protected $servername = "localhost:8056";
    protected $dbname = "";
    protected $username = "root";
    protected $password = "";
    

    function __construct(){
        $this->con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }

}

?>