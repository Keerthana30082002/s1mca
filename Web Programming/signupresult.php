<?php
include 'conn.php';
if($_POST)
{
    $username=$_POST['rname'];
    $password=$_POST['rpass'];
    $chckpass=$_POST['rpass2'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    if($conn)
    {
        if($password==$chckpass)
        {
        $rq="insert into accounts values('','$username','$password','$fname','$lname')";
        $rs=mysqli_query($conn,$rq);
        if($rs)
        {
            $res="Account Created";
        }
    }
    else
    {
        echo "Passwords does not match!!";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2><?php
                echo "$res";
                ?></h2>
                <a href="signin.php">Go to Sign in Page</a>
</center>
</body>
</html>

</body>
</html>