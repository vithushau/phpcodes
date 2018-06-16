<?php

  //To create connection string 
        
class database{
function dbconnect(){
        $server="localhost";
        $uname="root";
        $pwd="";
        $db="swll";
    $con= new PDO("mysql:host=$server;dbname=$db","$uname","$pwd");
    
  return $con;
}
}
$obconi=new database();
$con=$obcon->dbconnect();

?>
