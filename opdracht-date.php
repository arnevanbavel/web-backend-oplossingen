<?php

	$timestamp	=	mktime( 22, 35, 25, 01, 21, 1904 );
	$date	=	date( 'd F Y, H:i:s a', $timestamp );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>opdracht-date</title>

    </head>
    <body>
		
		<h1>Oplossing date: deel1</h1>

		<p>De timestamp is <?= $timestamp ?></p>
		<p>De timestamp naar een datum: <?= $date ?></p>
    </body>
</html>