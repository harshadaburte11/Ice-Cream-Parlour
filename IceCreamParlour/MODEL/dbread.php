<?php 
include_once "dbconnect.php";
function LOGIN($user,$pass)
{
  $conn = connect();
  $sql="select username,password,rule,personid from log where USERNAME='$user' and PASSWORD='$pass'";
  $result = $conn->query($sql);
   while ($row =  $result->fetch_assoc())
    {
        return $row;
    }
}
function readData($sid){
  $conn = connect();
  ///
  $sql="SELECT * from  LOG where PERSONID='$sid'";
  $result = $conn->query($sql);
 
 if($result->num_rows>0)   
 { 
     while($value=$result->fetch_assoc())
     {

  
        return $value;
    }
}
}
  

?>