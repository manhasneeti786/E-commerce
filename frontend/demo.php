<?php 
include"connection.php";
if (isset($_POST['submit'])){
    $email =$_POST
    $query ="SELECT *  from  users ";
    $row
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
    <form action="" method="post">
    <input type="email" name="email" id="email">
    <input type="password" name="pass" id="pass">
    <input type="submit" value="submit">
    </form>
</body>
</html>