<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body background = "images/Galaxy.jpg">
<div id="Mainwrapper">
        <form method="post" enctype="multipart/form-data">
            <table align="center" style="color:white;width:365px;height:200px;postion:relative;margin-top:200px;"border="1">
                <tr>
                    <td style="position:relative;left:50px;bottom:5px;background-color:#1D2247;">
                        <center><h3>Login Form</h3></center>
                    </td>
                </tr>

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
                            <input type="submit" name="SignIn" value="Login" style="background-color:#42729b;color:white;width:100px;height:40px;position:relative;margin-top:5px;">
                        </center>
                    </td>
                    <td>
                       <center>
                           <a href="register.php"><input type="button" name="Register" value="Register" style="background-color:#F34B27;color:white;width:150px;height:40px;position:relative:margin-top:5px;"></a>
                       </center> 
                    </td>

                </tr>
             

            </table>
        </form>
    </div>
</body>
</html>