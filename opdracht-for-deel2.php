<?php
$rij = 10;
$kolom = 10;
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
			<style>
			
			.oneven
			{
				background-color	:	lightgreen;
			}

		</style>
	</head>
	<body>
		<table>
			<?php for ($i=0; $i < $rij; $i++): ?>
				<tr>
					<?php for ($j=1; $j < $kolom; $j++): ?>

					<td class="<?= ( ( $i * $j ) % 2 > 0 ) ? 'oneven' : '' ?>"><?= $i * $j ?></td>

					<?php endfor ?>
				</tr>	
			<?php endfor ?>
		</table>	
	</body>
</html>