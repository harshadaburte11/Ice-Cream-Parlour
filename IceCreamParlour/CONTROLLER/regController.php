<?php
    // include "../MODEL/dbinsert.php";
    include "../MODEL/dbconnect.php";
$full_name = $User_Name = $User_Rule = $User_Password = "";
$full_nameEr = $User_NameEr = $User_RuleEr = $User_PasswordEr = '';
$valid = false;
$successMesg = $errorMesg = "";







    if($_SERVER["REQUEST_METHOD"]=="POST")
    {

 
  

    if (!$valid) {
        $conn = connect();
        $ran = rand(1,10);
        $username = $_POST["username"];
        $password  = $_POST["password"];
        $email  = $_POST["email"];
         $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if($password == $cpassword){
            // $result = Register($username, $password, $email);
            // $result = mysqli_query($conn, "insert into log values('$ran','$username','$password','$email','CUSTOMER')");     
          
            // $pattern = '/^([a-zA-Z]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
            // if(preg_match($pattern, $email))
            // {
            // $result = Register($username, $password, $email);
           
            // }
            // else
            // {
            //     echo "Enter valid email";
            // }
            $sql="insert into log values('$ran','$username','$password','$email','CUSTOMER')";
            $result = $conn->query($sql);
            if($result){
             echo "Sucessfully Register";
            }
            else{
             echo "There is a error occoured";
            }
        }
        else{
            echo "Please Check yourn Password";
        }
       
    
    
  
      
    }
}




?>