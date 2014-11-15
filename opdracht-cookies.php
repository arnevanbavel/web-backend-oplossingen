<?php 

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

	<form action="opdracht-sessions-adres.php" method="POST">
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

		

</body>
</html>