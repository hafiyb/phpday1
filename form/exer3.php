<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--
<form action="index.php" method="get">
    Name : <input type="text" name="name">
    <br>
    <input type="submit">
</form>
-->

<?php
    $name = $_POST["name"];
    echo "Hello $name <br>";

    if (strlen($name) < 5){
        echo "Too short";
    } elseif(strlen($name) >= 5 && strlen($name) < 10) {
        echo "Just right";
    } else echo "Too long";

    
?>
<br>
<a href="index.php">go back</a>

</body>
</html>