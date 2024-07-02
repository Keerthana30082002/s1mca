<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">LOGIN</h1>
    <form action="login1.php" method="post">
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
    $conn=mysql_connect("localhost", "root","");
    mysql_select_db("login", $conn);
    if(!$conn)
        echo "Connection Failed";
    else
    {
        if($_POST['submit'])
        {
            $q="select * from users where username='$username'";
            $query=mysql_query($q);
            if(!$query)
                {
                    echo mysql_error();
                }
                else{
                    while ($row = mysql_fetch_assoc($query)) {
                        echo "username: " . $row["username"] ;
                    }
                    }
            mysql_close($conn);
        }
    }
    ?>