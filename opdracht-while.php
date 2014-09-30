<?php

$x = array();
$getal = 0;

 while ( $getal < 100) {
    $x[] = $getal;
    $getal++;
 }
$getallen = implode(', ', $x);//zet een array om in 1 string
    
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

      <p> aantal dieren: <?php echo $getallen  ?></p>
      <p> te zoeken dier: <?php ?></p>
	</body>
</html>