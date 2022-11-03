<?php
require_once('connection.php');

$id = $_GET['id'];



if (isset($_POST['edit'])) {
    
    $stmt = $pdo->prepare('UPDATE books SET stock_saldo = :laoseis, title = :pealkiri, type = :type  WHERE id = :id');
    $stmt->execute(['id' => $id, 'laoseis'=> $_POST['laoseis'], 'pealkiri'=> $_POST['pealkiri'], 'type'=> $_POST['type']]);
    
}
$stmt = $pdo->prepare('SELECT * FROM books WHERE id=:id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();
 header("Location: book.php?id={$id}")
    

/*  else if (!isset($_POST['pealkiri'], $_POST['laoseis'], $_POST['type'])) {
        echo "Sisesta väärtused!";
    }
     */

/* $book = $stmt->fetch(); */



  /* $stmt = $pdo->prepare('UPDATE books SET stock_saldo = :laoseis, title = :pealkiri, type = :type  WHERE id = :id');
    $stmt->execute(['id' => $id]);
    $book = $stmt->fetch();   
 */


/* $stmt = $pdo->prepare('UPDATE books SET stock_saldo = , title =   WHERE id = :id');
$stmt->execute(['id' => $id]);
 */



?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?=$book['title'];?></h1>    
        <br>

<form action="edit.php?id=<?=$id;?>" method="post" class="outline-offset-[3px]">
        <label for="pealkiri">Pealkiri:</label><br>
            <input type="text" name="pealkiri" value="<?=$book['title'];?>" ><br>
        <label for="laoseis">Laoseis:</label><br>
            <input type="text" name="laoseis" value="<?=$book['stock_saldo'];?>" ><br>
        
        <label for="type">Vali tüüp:</label><br>
    <select id="type" name="type">
        <option value="ebook">ebook</option>
        <option value="used">Used</option>
        <option value="new">New</option>
    </select><br>

        <br>
        <br>
        <input type="hidden" name="book-id" value="<?=$id;?>">
        <br>
        <input type="submit" name="edit" value="Muuda">
</form>
   
     
</body>
</html>


