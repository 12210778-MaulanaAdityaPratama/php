<?php 
$mahasiswa = [
	["adit","121221","teknik informatika","aditya.neo5@gmail.com"],
	["udin","1122121221","teknik informatika","udin.neo5@gmail.com"],
	["slebew","112211","teknik informatika","slebew.neo5@gmail.com"]
];





 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Daftar mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 
 <?php foreach($mahasiswa as $mhs) :?>
 <ul>
 	<li>Nama: <?php echo $mhs[0]; ?></li>
 	<li>NIM: <?php echo $mhs[1]; ?></li>
 	<li>Jurusan: <?php echo $mhs[2]; ?></li>
 	<li>Email: <?php echo $mhs[3]; ?></li>

 </ul>
<?php endforeach; ?>
 </body>
 </html>