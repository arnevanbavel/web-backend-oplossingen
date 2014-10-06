<?php
  $x = 10;
  $y = 10;

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
    <style>
      
      .oneven
      {
        background-color  : lightgreen;
      }
    </style>

	</head>
	<body>

     <table>
      <?php $tafel = 0;?>
      <?php while( $tafel < $y ):  ?>
        
        <tr>
          <?php $product =  1; ?>
          <?php while( $product <= $x ):  ?>

            <td class="<?= ( ( $tafel * $product ) % 2 > 0 ) ? 'oneven' : '' ?>"><?= $tafel * $product ?></td>
            <?php $product++ ?>
          <?php endwhile ?>
        </tr>

        <?php $tafel++ ?>
      <?php endwhile ?>
    </table>



	</body>
</html>