<?php

function berekenSom ($getal1 , $getal2)
{
	return $getal1 + $getal2;
}

function vermenigvuldig($getal1 , $getal2)
{
	return $getal1 * $getal2;
}

function isEven($getal)
{
	if ($getal % 2 == 0) {
		return true;
	}
	else
	{
		return false;
	}
}

function bewerkString( $string ) 
	{
		$resultaatArray['uppercase']	=	strtoupper( $string );
		$resultaatArray['length']		=	strlen( $string );

		return $resultaatArray;
	}
$string 			=	'Vandaag is het sinterklaas';
$stringResultaat 	=	bewerkString( $string );

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

      <p> Som: <?php echo (berekenSom(3, 5)); ?></p>
      <p> vermenigvuldig: <?php echo (vermenigvuldig(3, 5)); ?></p>
      <p> Is Even?: <?php echo (isEven(6))? "ja": "nee" ?></p>

      <p>De string "<?php echo $string ?>" in hoofdletters <?php echo $stringResultaat['uppercase'] ?> is <?php echo $stringResultaat['length'] ?> karakters lang.<p>

		<ul>
		<?php foreach( $stringResultaat as $key => $value ): ?>
			<li><?php echo $key ?>: <?php echo $value ?></li>
		<?php endforeach ?>
		</ul>
	</body>
</html>