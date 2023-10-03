<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Działa od 10 roku zycia <br><br>
</h1>
    <form action="index.php" method="post">
        <label>Imię</label>
        <input type="text" name="name">
        <label>Wiek</label>
        <input type="text" name="age">
        <input type="submit" value="wyślij" name="login">
    </form>
</body>
</html>
<?php

if(isset($_POST["login"])){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $checkage = strlen($age);
    if(empty($name)){
        echo "Nie podano imienia";
    };
    if($checkage >= 1){
        echo "wszytsko podano";
        if(empty($age)){
            echo "Nie podano wieku";
        }
        elseif($age == 1){
            echo "Masz {$age} lat";}
    } else { echo "Wiek jest za młody {$checkage} lolol";};
};
?>