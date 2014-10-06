<?php

$x = array();
$getal = 100;

for ($i=0; $i < $getal; $i++) { 
	$x[] = $i;
}

$getallen = implode(', ', $x);

///////////////////////////////////////////////////////

$x2 = array();
$getal2 = 100;

for ($j=0; $j < $getal2; $j++) { 

	if ($j % 3 == 0 && $j > 40 && $j < 80) {
	$x2[] = $j;
	}
}

$getallen2 = implode(', ', $x2);

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

      <p> getalenreeks: <?= $getallen ?></p>
      <p> getalenreeks: <?= $getallen2 ?></p>
	</body>
</html>