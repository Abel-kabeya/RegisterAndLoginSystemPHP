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
    <link rel="stylesheet" href="css/style.css">
    <title>Registration Form</title>
</head>
<body background="images/Universe.jpg">
    <div class="title2">
        <h1>Registration Form</h1>
    </div>
<div id="Mainwrapper">
        <form method="post" enctype="multipart/form-data">
            <table align="center">
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
                           <input type="submit" name="Register" value="Register">
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
        $email=$_POST['email'];
        $img=$_FILES['img1']['name'];
        $temp_name=$_FILES['img1']['tmp_name'];
        $filepath="images/$img";
        move_uploaded_file($temp_name,$filepath);
        
        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM admin WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($con, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
            if ($user['username'] === $username) {
                echo '<script>alert("Username already exists")</script>';
            }

            if ($user['email'] === $email) {
                echo '<script>alert("Email already exists")</script>';
            }
        }else
        {

            $query2="INSERT INTO admin (username, password, email, img) VALUES('$username','$password', '$email','$img')";
            $runquery2=mysqli_query($con,$query2);
                if($runquery2)
                {
                    echo '<script>alert("Account has been registered")</script>';
                    $_SESSION['username'] = $username;
                   
                }

        }
        
       
            
    }
?>