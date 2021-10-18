<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="exer2.php" method="post">
    Name : <input type="text" name="name">
    <input type="submit">
</form>

<?php

$name = $_POST["name"];
echo "The name of this string is ".($name)."<br>";

switch(true){
    case (strlen($name) <5):
        echo "Too short";
        break;
    case (strlen($name)>=5 && strlen($name)<10):
        echo "Just right";
        break;
    default:
        echo "Too long";
}


?>


</body>
</html>