<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yl7t</title>
</head>
<body>
   <a href="yl7.php">Puhasta</a>
   <br>
<form action="yl7.php" method="get">
       <label >Sisesta number: </label>
       <br>
       <input type="text" name="number" value="<?=$_GET['number'];?>">
       <br>
       <button type="submit" name="submit" value="compute">Arvuta</button>
   </form> 
<br>

    

<?php

if (isset($_GET['number'], $_GET['submit']) && is_numeric($_GET['number'])) {

    $number = $_GET["number"];}

function check($number){
    if($number % 2 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";



} 
}

?>

</body>
</html>