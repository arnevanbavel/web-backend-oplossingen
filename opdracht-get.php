<?php
$artikels = array(
	array ('titel' => 'MH17 Terug gevonden',
								'datum' => '1 Augustus 2014',
								'inhoud' => '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!’.',
								'afbeelding' => 'artikel01.jpg',
								'afbeeldingBeschrijving' => '.................',
								),
	array ('titel' => 'Het ware gelaat van Toetanchamon ontmaskerd',
								'datum' => '15 Augustus 2014',
								'inhoud' => '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!’.',
								'afbeelding' => 'artikel02.jpg',
								'afbeeldingBeschrijving' => '........................',
								),
	array ('titel' => 'Vrouwen moeten sneller naar huis na bevalling',
								'datum' => '23 Augustus 2014',
								'inhoud' => '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!’.',
								'afbeelding' => 'artikel03.jpg',
								'afbeeldingBeschrijving' => '............................',
								),);

	// Configuratie-variabelen
	$individueelArtikel		=	false;
	$nietBestaandArtikel	=	false;

	// Controleren of de get-variabele ID geset is om een individueel artikel op te halen
	if ( isset ( $_GET['id'] ) )
	{
		$id = $_GET['id'];

		// Controleren of de opgevraagde key (=id) bestaat in de array $artikels
		if ( array_key_exists( $id , $artikels ) )
		{
			$artikels 			= 	array( $artikels[$id] );
			$individueelArtikel	=	true;
		}
		else
		{
			$nietBestaandArtikel	=	true;
		}		
	}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van $_GET-variabele</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>

<body class="web-backend-inleiding">

	<?php if ( !$nietBestaandArtikel ): ?>
		<div class="container">
			<?php foreach ( $artikels as $id => $artikel ): ?>
				<article class="<?php echo ( !$individueelArtikel ) ? 'multiple': 'single' ; ?>">
					<h1><?php echo $artikel['titel'] ?></h1>
					<p><?php echo $artikel['datum'] ?></p>
					<img src="img/<?php echo $artikel['afbeelding'] ?>" alt="<?php echo $artikel['afbeeldingBeschrijving'] ?>">
					<p><?php echo ( !$individueelArtikel ) ? str_replace ( "\r\n", "</p><p>", substr( $artikel['inhoud'], 0, 50 ) ) . '...': str_replace ( "\r\n", "</p><p>",$artikel['inhoud'] ) ; ?></p>
					<?php if ( !$individueelArtikel ): ?>
						<a href="oplossing-get.php?id=<?php echo $id ?>">Lees meer</a>
					<?php endif ?>
				</article>
			<?php endforeach ?>
		</div>
	<?php else: ?>
		<p>Het artikel met id <?php echo $id ?> bestaat niet. Probeer een ander artikel.</p>
	<?php endif ?>

</body>
</html>