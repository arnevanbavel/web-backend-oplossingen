<?php

	$dieren  = array( 'Paard' , 'Leeuw' , 'Kat' , 'Hond' , 'Olifant' , 'Rat' , 'Muis' , 'Kip' , 'Dolfijn' , 'Mier'  );
	$dieren[] = 'Paard';
	$dieren[] = 'Leeuw';
	$dieren[] = 'Kat';
	$dieren[] = 'Hond';
	$dieren[] = 'Olifant';

	$voertuigen  = array('landvoertuigen' => array('Jeep', 'Auto' ),
						'watervoertuigen' => array('Boot', 'Jetski'),
						'luchtvoertuigen' => array('Vliegtuig','helikopter'));

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>opdracht array deel 1 basis</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">


		<pre><?php var_dump( $voertuigen) ?></pre>
		<p><?php echo $voertuigen[1][1] ?></p>
		

</body>
</html>