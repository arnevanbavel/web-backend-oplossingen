<?php 
	session_start();

	if ( isset( $_POST['verzend'] ) ) 

	{
		$straat = $_SESSION['data'][ 'sessions-adres' ]['straat']   =   $_POST[ 'straat' ];
		$nummer = $_SESSION['data'][ 'sessions-adres' ]['nummer']   =   $_POST[ 'nummer' ];
		$gemeente = $_SESSION['data'][ 'sessions-adres' ]['gemeente']   =   $_POST[ 'gemeente' ];
		$postcode = $_SESSION['data'][ 'sessions-adres' ]['postcode']   =   $_POST[ 'postcode' ];
	}	

	var_dump($_SESSION['data']);
	$Data =   $_SESSION['data'];

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
	<a href="opdracht-sessions.php?session=destroy">Vernietig sessie</a>
	
	<?php foreach( $Data as $info => $value ):  ?>
    	<?php foreach( $value as $key => $waarde ):  ?>

            <li><?= $key ?>: <?= $waarde ?></li>

            <a href="opdracht-<?= $info ?>.php">wijzig</a>

    	<?php endforeach ?>
    <?php endforeach ?>


		

</body>
</html>