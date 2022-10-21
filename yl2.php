<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <a href="yl2.php">Puhasta</a>
   <br>
   <br>
<form action="yl2.php" method="get">
       <label >Raadius: </label>
       <br>
       <input type="text" name="radius" value="<?=$_GET['radius'];?>">
       <br>
       <button type="submit" name="submit" value="compute">Arvuta</button>
   </form> 
   <br>

    

<?php

if (isset($_GET['radius'], $_GET['submit']) && is_numeric($_GET['radius'])) {



$p = 2 * 3.14 * $_GET["radius"];
$s = 3.14 * $_GET["radius"] * $_GET["radius"];
echo '<br>';
echo 'ümbermõõt: ' . $p . '<br>';
echo 'pindala: ' . $s;

} else if ( isset($_GET['radius']) && !is_numeric($_GET['radius'])) {
    echo "Sisesta numbriline väärtus!";
}

?>

</body>
</html>