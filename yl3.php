<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <a href="yl3.php">Puhasta</a>
   <br>
<form action="yl3.php" method="get">
       <label >Sisesta number: </label>
       <br>
       <input type="text" name="number" value="<?=$_GET['number'];?>">
       <br>
       <button type="submit" name="submit" value="compute">Arvuta</button>
   </form> 
<br>

    

<?php

if (isset($_GET['number'], $_GET['submit']) && is_numeric($_GET['number'])) {

$n = $_GET["number"];
echo '<br>'; 
echo $n .  "  " . "+" . "  " . $n, $n . "  " . "+" . "  " . $n, $n, $n . "<br>";
}
 else if ( isset($_GET['number']) && !is_numeric($_GET['number'])) {
    echo "Sisesta numbriline väärtus!";
}

?>

</body>
</html>