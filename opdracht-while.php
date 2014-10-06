<?php

$x = array();
$getal = 0;

 while ( $getal < 100) {
    $x[] = $getal;
    $getal++;
 }
$getallen = implode(', ', $x);//zet een array om in 1 string


//////////////////////////////////////////////////////////////////////////////


$x2 = array();
$getal2 = 0;
while ($getal2 < 100) {
   
      if ($getal2 % 3 == 0 && $getal2 > 40 && $getal2 < 80 ) 
   {
      $x2[] = $getal2;
   }

   $getal2++;
}
$getallen2 = implode(', ', $x2);//zet een array om in 1 string


//////////////////////////////////////////////////////////////////////////////    
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

      <p> getalenreeks: <?= $getallen  ?></p>
      <p> getalenreeks: <?= $getallen2  ?></p>
	</body>
</html>