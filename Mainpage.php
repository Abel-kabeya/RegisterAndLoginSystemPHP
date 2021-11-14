<?php
require 'database/mysql.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mainpage</title>
</head> 
<body >
   <?php
        if(isset($_SESSION['username']))
        {
            //echo $_SESSION['username'];
            $username=$_SESSION['username'];
            $query13="SELECT * FROM admin WHERE username='$username'";
            $runquery13=mysqli_query($con,$query13);
            $rowdata=mysqli_fetch_array($runquery13);
            $username=$rowdata['username'];
            $img=$rowdata['img'];
            
            echo ("<img src=images/$img><p>$username</p>");
            
        }  
   ?>

         
    <a href="index.php"><center><input type="button" name="Logout" value="Logout"></a></center></a>
    
</body>
</html>