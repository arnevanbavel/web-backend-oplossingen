<?php
	
	$voornaam =	'Arne';	
	$achternaam =	'Van Bavel';

	$volledigenaam 	=	$voornaam . ' ' . $achternaam;
	$lengtestr = strlen($volledigenaam);	

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van PHP string-functies: strlen()</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body  class="web-backend-inleiding">

	<section class="body">

		<h1><?php echo $volledigenaam; ?></h1>
		<h1><?php echo $lengtestr; ?></h1>


	</section>

</body>
</html>