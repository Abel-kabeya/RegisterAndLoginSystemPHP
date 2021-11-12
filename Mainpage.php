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
    <link rel="" type="" href="css/style.css">
    <title>Main Page</title>
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
            
            echo 
            "<table>
                <tr>
                    <td>Image</td>
                    <td><img src='images/$img'width='100px' height='100px'></td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td>$username</td>
                </tr>
            </table>";
        }else
        {
            echo "Welcome admin";
        }
           
   ?>
    
</body>
</html>