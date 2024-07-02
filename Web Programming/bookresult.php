<?php
include 'conn.php';
if(isset($_POST['submit']))
{
    $bookid=$_POST['bookid'];
    $bookname=$_POST['bookname'];
    $bookauthor=$_POST['bookauthor'];
    $bookcopy=$_POST['bookcopy'];
    if($conn)
    {
        $rq="insert into book values('$bookid','$bookname','$bookauthor','$bookcopy')";
        $rs=mysqli_query($conn,$rq);
        echo "Successfully inserted into the table";
        header('location:display.php');
    }  
}