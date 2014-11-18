<?php

$file = file_get_contents("Todo.txt");
$data =	explode( ',', $file );

$message = '';

if ( !isset($_COOKIE['first'])) 
{
     
     setcookie("first", 1, time() + 30);
	 $file = ''; 
	 $aantepassenfile = fopen("Todo.txt","r+");
	 echo fwrite($aantepassenfile, $file );
	 fclose($aantepassenfile);
	 header( 'location: TodoApp.php' );	
}

	if ( isset( $_POST[ 'Toevoegen' ] ) )	
	{
		if ( !empty($_POST[ 'taak' ]))  
		{ 
			$file = $file . $_POST[ 'taak' ] . ',';
			$aantepassenfile = fopen("Todo.txt","r+");
			echo fwrite($aantepassenfile, $file);
			fclose($aantepassenfile);
			header( 'location: TodoApp.php' );	

		}
		else
		{
			$message ='Ahh, damn. Lege todos zijn niet toegestaan...';
		}

	}

echo $file;

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>
<p><?= $message ?> </p>
<h1>Todo app</h1>
<p>Je hebt nog geen TODO's toegevoegd. Zo weinig werk of meesterplanner?</p>

<h2>Nog te doen</h2>
<p>Schouderklopje, alles is gedaan!</p>
<?php foreach( $data as $key):  ?>
    <li><input type="button" name=<?php $key ?> ><?= $key ?></li>
<?php endforeach ?>

<h2>Done and done!</h2>
<p>Werk aan de winkel...</p>

<h1>Todo toevoegen</h1>
<form action="TodoApp.php" method="POST">

			<ul>
				<li>
					<label for="taak">Beschrijving: </label>
					<input type="text" id="taak" name="taak">
				</li>
			</ul>

			<input type="submit" name="Toevoegen" value="Toevoegen">

		</form>

</body>
</html>