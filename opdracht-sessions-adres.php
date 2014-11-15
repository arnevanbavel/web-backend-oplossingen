<?php 
	session_start();

	if ( isset( $_POST['verzend'] ) ) 

	{
		$email = $_SESSION['data'][ 'sessions' ]['email']   =   $_POST[ 'email' ];
     	$name = $_SESSION['data'][ 'sessions' ]['name']    =   $_POST[ 'name' ];
	}

	var_dump($_SESSION['data']);

	$Data[ 'sessions' ]     =   $_SESSION[ 'data' ][ 'sessions' ];
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>adress</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body>
	<h1>registratie</h1>

	<?php foreach( $Data[ 'sessions' ] as $info => $value ):  ?>
    
            <li><?= $info ?>: <?= $value ?></li>
    
    <?php endforeach ?>


	<h1>adress</h1>

	<form action="opdracht-sessions-overzicht.php" method="POST">
		<ul>
			<li>
				<label for="straat">straat</label>
				<input type="text" name="straat">
			</li>
			<li>
				<label for="nummer">nummer</label>
				<input type="text" name="nummer">
			</li>
			<li>
				<label for="gemeente">gemeente</label>
				<input type="text" name="gemeente">
			</li>
			<li>
				<label for="postcode">postcode</label>
				<input type="text" name="postcode">
			</li>
		</ul>
		<input type="submit" Value="Verstuur" name="verzend">
	</form>

		

</body>
</html>