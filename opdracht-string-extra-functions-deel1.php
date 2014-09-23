<?php
	
	$fruit = 'kokosnoot';
	$lengtefruit = strlen($fruit);
	$positiefruit = strpos($fruit, 'o');
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

		<h1><?php echo $fruit; ?></h1>
		<p>lengte <?php echo $lengtefruit;?></p>
		<p>positie letter o  <?php echo $positiefruit;?></p>

	</section>

</body>
</html>