<?php

$password = 'password';
$username = 'Arne';
$message = 'Inloggen aub';

if ( isset( $_POST ['submit'] ) )
{
	if ( $_POST['username'] == $username && $_POST['password'] == $password )
		{
			$message 	=	'welkom';
		}
		else
		{
			$message 	=	'Probeer opnieuw.';
		}
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van $_POST-variabele</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<section class="body">

		<h1>Inloggen</h1>

		<p><?php echo $message ?></p>
		
		<form action="opdracht-post.php" method="post">

			<ul>
				<li>
					<label for="username">Username:</label>
					<input type="text" name="username" id="username">
				</li>
				<li>
					<label for="password">Paswoord:</label>
					<input type="password" name="password" id="password">
				</li>
			</ul>

			<input type="submit" name="submit" value="Verzend">
		</form>
		
		<p>Inhoud van $_POST: <pre><?php print_r( $_POST ) ?></pre></p>

	</section>

</body>
</html>