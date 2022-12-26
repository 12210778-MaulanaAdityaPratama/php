<?php 
$identitas = [
	["Aditya","61123444","Rasau Jaya","13-12-01"],
	["Fadila","62020202","Patok 5","12-12-11"]
];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Identitas</title>
 </head>
 <body>
 	<h1>Identitas</h1>
 		<?php foreach ($identitas as $ktp): ?>
 	<ul>
 			<li>Nama : <?php echo $ktp[0] ?></li>
 			<li>NIK : <?php echo $ktp[1] ?></li>
 			<li>Tempat Lahir : <?php echo $ktp[2] ?></li>
 			<li>Tanggal lahir : <?php echo $ktp[3] ?></li>
 	</ul>
 		<?php endforeach ?>


 </body>
 </html>