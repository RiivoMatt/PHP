<?php
var_dump($_POST);

if ( isset($_POST['delete'])) {

    require_once('connection.php');

 $id=$_POST['book-id'];   


$stmt = $pdo->prepare('UPDATE books SET is_deleted = 1 WHERE id = :id');
$stmt->execute(['id' => $id]);

}

header('Location: ')
?>