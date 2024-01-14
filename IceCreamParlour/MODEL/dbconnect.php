<?php

function connect(){
    
    global $conn;
    $servername="localhost";
    $username="root";
    $password="tiger";
    $databasename="icecream";
    $conn = new mysqli($servername,$username,$password,$databasename);
    if($conn->connect_error)
    { die("connection failed :".$conn->connect_error);
    }
return $conn;

}

?>
    
