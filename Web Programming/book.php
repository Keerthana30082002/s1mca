<?php
include 'conn.php';
if(isset($_POST['submit']))
{
    $name=$_POST['uname'];
    $pass=$_POST['upass'];
    if($conn)
    {
        $sq="select * from users where username='$name' and password='$pass'";
        $q=mysqli_query($conn,$sq);
        if(mysqli_num_rows($q))
        {
            echo "Login successful";
            header('Location:bookdetails.php');
        }
        else{
            echo "No account detected";
            header('Location:book.php');
        }

    }
    else{
        echo "conection failed";
    }
}
?>
