<?php
include 'conn.php';
$s="select * from book";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q)>0)
{
    echo "<table border=1>
        <tr>
        <th>Book id</th>
        <th>Book name</th>
        <th>Book Author</th>
        <th>No of Copies</th>
        </tr>";
        while($row=mysqli_fetch_assoc($q))
        {
            echo "<tr>";
            echo "<td>".$row['bookid']."</td>";
            echo "<td>".$row['bookname']."</td>";
            echo "<td>".$row['bookauthor']."</td>";
            echo "<td>".$row['bookcopy']."</td>";
            echo "</tr>";
        }
        echo "</table>";
}
?>