<?php

$text = file_get_contents('text-file.txt');
$length = strlen($text);

$textarray[] = array();

for ($i=0 ; $i < $length ; $i++ ) { 
	
	$textarray[] = substr($text, $i, 1);
}

rsort($textarray);
array_reverse($textarray);

$teller[] = array(); 

foreach ($textarray as $value) 
{
	if ( isset ( $teller[ $value ] ) )
		{
			++$teller[ $value ];
		}
		else
		{
			$teller[ $value ] = 1;
		}	
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

      <p> getalenreeks: <?php var_dump($textarray); ?></p>
	</body>
</html>