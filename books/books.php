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
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?=$book['title'];?></title>
    
</head>
<body class="bg-slate-50">
    <div>
        <h1 class="text-5xl, text-center"><?=$book['title'];?></h1>    
        <br>
    
    
        <h3>Release year - <?=$book['release_date'];?></h3>
        <br>
        <h3>Language - <?=$book['language'];?></h3>
        <br>
        <p>Summary - <?=$book['summary'];?></p>
        <br>
    </div>
    <div class="justify-end">
        <div class= "text-xl">
        <p>Price - <?=str_replace('.',',',round($book['price'],2));?> - EUR</p>
        </div>
    </div>
<br>
<br>

    <form action="delete.php" method="post">
        <input type="hidden" name="book-id" value="<?=$id;?>">
        <input type="submit" name="delete" value="Kustuta">
    </form>

</body>
</html>