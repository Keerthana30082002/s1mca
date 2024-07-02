<html>
    <head>
        <title>Factorial</title>
    </head>
    <body>
        <form action="fact.php" method="post">
            Number: <input type="text" name="number">
            <input type="submit" value="Find the factorial" name="submit">
        </form>
    </body>

<?php
    if(isset($_POST['submit']))
    {
    $num = $_POST["number"];
    function factorial($num){
        if($num == 0){
            return 1;
        }
        return $num * factorial($num-1);        
    }
    echo "Factorial of $num: ",factorial($num);
}
?>