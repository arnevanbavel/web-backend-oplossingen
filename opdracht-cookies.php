<?php 
$inglogt = false;
$bericht = false;
$file = file_get_contents('User.txt');
$data =	explode( ',', $file );
print_r($data);

if ( !isset( $_COOKIE['coockienaam'] ) )  		//kijken of er al een coockie is
{
	if ( isset( $_POST[ 'verzend' ] ) )			//Zien of dat er iets in verzend staat
	{
		if ( $_POST[ 'name' ] == $data[ 0 ] && $_POST[ 'paswoord' ] == $data[ 1 ] )  //De ingevoerde waarde vergelijken met de array
		{
			setcookie( 'coockienaam', true, time() + 360 );		// coockie instellen
			header( 'location: opdracht-cookies.php' );				// terug naar de pagina
		}
		else 												// Als de ingevoerde waarden niet overeen komen
		{
			$bericht = 'Er ging iets mis. Probeer opnieuw.';
		}
	}
}
else
{
	$bericht = 'Er ging iets mis. Probeer opnieuw.';
	$inglogt	=	true;

}

if ( isset( $_GET[ 'logout' ] ) )					//als er logout in de get sta coockie verwijderen
	{

		setcookie( 'coockienaam', '', time() - 10 );	
		header('location: opdracht-cookies.php');
	}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registratie</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body>

	<h1>registratie</h1>

	<?php if ($bericht): ?>
			<?=	$bericht ?>
		<?php endif ?>

<?php if ( !$inglogt ): ?>
	<form action="opdracht-cookies.php" method="POST">
		<ul>
			<li>
				<label for="nickname">Nickname: </label>
				<input type="text" name="name">
			</li>
			<li>
				<label for="password">Paswoord: </label>
				<input type="password" name="paswoord" >
			</li>
		</ul>
		<input type="submit" Value="Verstuur" name="verzend">
	</form>
	<?php else: ?>

			<a href="opdracht-cookies.php?logout=true">Uitloggen</a>

	<?php endif ?>

		

</body>
</html>