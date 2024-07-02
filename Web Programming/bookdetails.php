<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bookresult.php" method="post">
        Enter Book ID:<input type="text" name="bookid"><br>
        Enter Bookname:<input type="text" name="bookname"><br>
        Enter Book author:<input type="text" name="bookauthor"><br>
        Enter No of copies:<select name="bookcopy">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            </select><br>
        <input type="submit" name="submit" value="submit">
</form>
</body>
</html>