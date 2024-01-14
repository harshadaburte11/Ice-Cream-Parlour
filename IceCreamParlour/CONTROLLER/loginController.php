<?php
// Start the session
include "../MODEL/dbconnect.php";
session_start();
?>
<?php 
    // include "../MODEL/dbread.php";
    $username = $password = "";
    $flag =false;
    $User_passwordEr = "";
    $User_NameEr ="";
    $User_ruleEr= "";
    
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
     
    if (empty($_POST["username"])) {
        $User_NameEr = "UserName is required";
        $flag = true;
    }
    
    if (empty($_POST["password"])) {
        $User_passwordEr = "password is required";
        $flag = true;
    }
    
    
    if(!$flag){
        $username =  $_POST["username"];
        $password = $_POST["password"];
    
        // $result =LOGIN($username,$password);
        $conn = connect();
        $sql="select * from log where UUSERNAME='$username' and PASSWORD='$password'";
         $result = $conn->query($sql);
        
        if($result->num_rows>0)   
        { 
            while($value=$result->fetch_assoc())
            {
                if($value["RULE"] == 'ADMIN'){
                    $_SESSION["PERSONID"]=$value["PERSONID"];
                    $_SESSION["RULE"]=$value["RULE"];
                    header("Location: ../VIEW/index.php");
                    die();
                }
                elseif ($value["RULE"] == 'CUSTOMER'){
                    $_SESSION["PERSONID"]=$value["PERSONID"];
                    $_SESSION["RULE"]=$value["RULE"];
                    header("Location: ../VIEW/index.php");
                    die();
                }
                else
                {
                    header("Location: ../VIEW/login.php");
                    echo "<h2>" ."please check your username or password ". "</h2>";
                }
            }
        }
        else{
            echo"<h2>" ."data not present". "</h2>";
        }
      
    
        
    }
}
    ?>
    