<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
<html>

 <?php

$apr = $_GET["apr"]; 
$term = $_GET["trm"];
$amount = $_GET["amt"];
$months = ( $term *12);


//Needs the arithmatic here

$payment = ( $amount * (($apr/12) / 100) / ( 1 - pow( 1 + (($apr/12) / 100), -$months)) );




?>
<body>

Thank you for using the Mortgage Payment Calculator <hr>
Your Annual Percentage Rate is <?php echo $apr; ?><br>
The term of your loan is <?php echo $term; ?><br>
The amount of your loan is <?php echo $amount; ?><br><br>
<hr>
Your monthly loan payment will be $<?php echo ceil($payment); ?>.00

</body>
</html>