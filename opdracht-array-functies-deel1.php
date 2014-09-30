<?php

   // Eerste manier
	$dieren =  array('kat', 'Leeuw' ,'hond', 'Olifant', 'slang' , 'Tijger');
   $teZoekenDier = 'slang';

   $aantal = count($dieren);
   $x = in_array( $teZoekenDier, $dieren);

   if($x) 
   {   
      $resultaat = 'gevonden';      
   }
   else
   {

      $resultaat = 'Niet gevonden';  
   }


    
?>

<!DOCTYPE html>
<html>
	<head>
		<title>array functies</title>
	</head>
	<body>

      <p> aantal dieren: <?php echo $aantal;  ?></p>
      <p> te zoeken dier: <?php echo $resultaat;  ?></p>
	</body>
</html>