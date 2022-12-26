<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
	<style>
		.warna {
			background-color: blue;
		}
		.warna1{
			background-color: red;
		}
		.warna2 {
			background-color: green;
		}
	</style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<?php $i = 1; ?>
	<?php while ($i <= 4) {
		?>
	<tr>
		<?php if ($i % 2 == 0) :?>
			<tr class="warna1">
				<?php elseif ($i % 2 ==1) :?>
					 <tr class="warna2">
				
				<?php else : ?>
			<tr>
		<?php  endif; ?>
		<?php $j = 1; ?>
		<?php while ($j <= 5) {?>
			<?php if ($j = 3) :?>
				<tr class="warna">
				<?php endif; ?>
		<td><?php echo "$i,$j" ?></td>
		<?php $j++;	
		} ?>
	</tr>

<?php $i++; } ?>
</table>
</body>
</html>
<!-- $i =1;
while( $i < 5 ){
   echo "Hello World! <br>";
$i++;
} -->