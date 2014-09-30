<?php
	
	$getaldag = 4;
	switch ($getaldag) {
		case '1':
			$dag ="Maandag";
			break;
		case '2':
			$dag ="Dinsdag";
			break;
		case '3':
			$dag ="Woendsdag";
			break;
		case '4':
			$dag ="Donderdag";
			break;
		case '5':
			$dag ="Vrijdag";
			break;
		case '6':
			$dag ="Zaterdag";
			break;
		case '7':
			$dag ="Zondag";
			break;
		
		default:
			$dag ="dag onbekend";
			break;
	}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>opdracht switch</title>
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/global.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/directory.css">
	<link rel="stylesheet" type="text/css" href="http://web-backend.local/css/facade.css">
</head>
</head>
<body class="web-backend-inleiding">

<p><?php echo $dag ?></p>
</body>
</html>