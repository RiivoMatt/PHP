<?php

require_once('connection.php');

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM books WHERE id=:id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();
//var_dump($book);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$book['title'];?></title>
</head>
<body>
    <h1><?=$book['title'];?></h1>
    <h3>Release year - <?=$book['release_date'];?></h3>
    <h3>Language - <?=$book['language'];?></h3>
    <p>Summary - <?=$book['summary'];?></p>
    <h4>Price - <?=$book['price'];?> - EUR</h4>

</body>
</html>