<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="../Views/css/side-link.css"> -->
  
    <title>Document</title>
    <style>
        .side-links ul{
            display: flex;
            margin: 15px;
        }
        a{
            
            font-size: 18px;
    color: whitesmoke;
    font-weight: 400;
    border: 1px solid black;
    margin-top: 10px;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    text-decoration: none;
    background-color: brown;
  
    position: relative;
    z-index: 1;
        }
        a::before{
        position: absolute;
        content: "";
        height: 100%;
        width: 0;
        top: 0;
        left: 0;
        background-color: #f9bf3b;
        transition: .5s;
        z-index: -1;
}
a:hover::before{
    width:100%;
    color: black;
    text-decoration: none;
   
    font-weight: 600;
}
        li{
            list-style-type: none;
          
        }
    </style>
</head>
<body  >
<div class="side-links">
    <ul>
        <li><a  href="../../VIEW/CUSTOMER/cusDashboard.php">Home</a> <br><br></li>
        <li><a  href="about.php">About</a><br><br></li>
        <li><a href="../../VIEW/CUSTOMER/OrderDetails.php">Order Details</a><br><br></li>
<li><a href="index.php">Exit</a><br><br>
</li>
    </ul>
</div>
</body>
</html>