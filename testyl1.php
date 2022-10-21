<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testyl1.php</title>
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
    <h2>
<?php
if ( isset($_GET['submit']) && $_GET['submit'] == "Sisesta" && $_GET['text'] !=''){
$name = $_GET ['text'];
echo "Hello, $name!";
}
?>
</h2>

</body>
</html>


