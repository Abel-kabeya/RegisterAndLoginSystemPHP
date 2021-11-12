<?php
require "database/mysql.php";
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body background = "images/Universe.jpg">

<div id="Mainwrapper">
        <form method="post" enctype="multipart/form-data">
            <table align="center" style="color:white;width:365px;height:200px;postion:relative;margin-top:200px;"border="1">
                <tr>
                    <td style="position:relative;left:50px;bottom:5px;background-color:#1D2247;">
                        <center><h3>Register Form</h3></center>
                    </td>
                </tr>

                <tr>
                    <td><center>Username</center></td>
                    <td><input type="text" name="username" placeholder="type your username"required ></td>
                </tr>

                <tr>
                    <td><center>Password</center></td>
                    <td><input type="password" name="password" placeholder="type your password" required></td>
                </tr>

                <tr>
                    <td><center>Email</center></td>
                    <td><input type="email" name="email" placeholder="type your email" required ></td>
                </tr>

                <tr>
                    <td align="center">
                        Upload Image
                    </td>
                    <td>
                        <input type="file" name="img1">
                    </td>
                </tr>

                <tr>
                    <td>
                       <center>
                           <input type="submit" name="Register" value="Register" style="background-color:#F34B27;color:white;width:150px;height:40px;position:relative:margin-top:5px;">
                       </center> 
                    </td>
                </tr>

            </table>
        </form>
    </div>
    
</body>
</html>
<?php
    if(isset($_POST['Register']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $img=$_FILES['img1']['name'];
        $temp_name=$_FILES['img1']['tmp_name'];
        $filepath="images/$img";
        move_uploaded_file($temp_name,$filepath);
        $query2="INSERT INTO admin (username, password, img) VALUES('$username','$password','$img')";
        $runquery2=mysqli_query($con,$query2);
            if($runquery2)
            {
                echo '<script>alert("Account has been registered")</script>';
            }
            
    }
?>