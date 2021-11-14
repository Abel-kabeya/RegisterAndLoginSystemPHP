<?php
require 'database/mysql.php';
session_start();
if($_SESSION['username'])
{
    //echo '<script>alert("Successful login")</script>';
}else
{
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Form</title>
</head>
<body background="images/Galaxy.jpg">

    <div class="title1">
        <h1>Login Form</h1>
    </div>
    
<div id="Mainwrapper">
        <form method="post" enctype="multipart/form-data">
            <table align="center" name="login">
                <tr>
                    <td><center>Username</center></td>
                    <td><input type="text" name="username" placeholder="type your username"></td>
                </tr>

                <tr>
                    <td><center>Password</center></td>
                    <td><input type="password" name="password" placeholder="type your password"></td>
                </tr>

                <tr>
                    <td>
                        <center>
                            <input type="submit" name="SignIn" value="Login">
                        </center>
                    </td>
                    <td>
                       <center>
                           <a href="register.php"><input type="button" name="Register" value="Register"></a>
                       </center> 
                    </td>

                </tr>
             

            </table>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['SignIn']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query1="SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $runquery1=mysqli_query($con,$query1);
        if(mysqli_num_rows($runquery1)>0)
        {
            echo '<script>alert("You are logged in")</script>';
            header('location:Mainpage.php');
            $_SESSION['username']=$username;
        }else
        {
            echo '<script>alert("Invalid username and password")</script>';
        }
    }
?>