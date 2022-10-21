<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   
<form action="testyl1.php" method="get">
        <label>Tekst</label><br>
        <br>
        <input type=text name="text">
        <br>
        <br>
        <input type="submit" name="submit" value="Sisesta">
    </form>
    <br>

    <form action="books.php" method="get">
        <label>Otsi raamat</label><br>
        <br>
        <input type=text name="text">
        <br>
        <br>
        <input type="submit" name="submit" value="Sisesta">
    </form>  
    <br>  
    
    <?php
if ( isset($_GET['submit']) && $_GET['submit'] == "Sisesta" && $_GET['text'] !=''){
$name = $_GET ['text'];
echo "Hello, $name!";
};


if ( isset($_GET['submit']) && $_GET['submit'] == "Sisesta" && $_GET['text'] !=''){
$name = $_GET ['text'];
echo "Hello, $name!";
};

$host = '127.0.0.1';
$db   = 'book-store';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$stmt = $pdo->query('SELECT title FROM books');
while ($row = $stmt->fetch())
{
    echo $row['title'] . "<br>";
}

?>






</body>
</html>