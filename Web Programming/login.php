<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">LOGIN</h1>
    <form action="login.php" method="post">
        Username:<input type="text" name="username"><br>
        Password:<input type="password" name="password"><br>
        <input type="submit" name="submit" value="Login">
    </form>
    Don't Have an account?<a href="register.php">Register</a>
</body>
</html>
<?php
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn=mysqli_connect("localhost", "root","","login");
    if(!$conn)
        echo "Connection Failed";
    else
    {
        if($_POST['submit'])
        {
            $q="select * from users where username='$username' and password='$password'";
            $query=mysqli_query($conn,$q);
            if (mysqli_num_rows($query) > 0) { 
                $row = mysqli_fetch_assoc($query);
                $_SESSION["name"] = $row['name'];         
                header('Location:welcome.php');
            }
            else
            {
                echo "Invalid username or password";
            }
            mysql_close($conn);
        }
    }
    ?>
