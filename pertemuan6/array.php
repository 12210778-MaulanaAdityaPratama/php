<?php 
// $mahasiswa = [
// 	["adit","121221","teknik informatika","aditya.neo5@gmail.com"],
// 	["udin","1122121221","teknik informatika","udin.neo5@gmail.com"],
// 	["slebew","112211","teknik informatika","slebew.neo5@gmail.com"]
// ];

// array associative
// definisi nya sama sepertti array numerik, kecuali
// key nya adalah string yang kita buat sendiri
$mahasiswa = [
	[
	"nrp"=>"23223",
	"nama" => "aditya",
	"email"=>"aditya.neo5@gmail.com",
	"jurusan"=>"teknik informatika",
	"gambar"=>"1.jpg"
	],
	[
	"nama" => "maulana",
	"nrp"=>"2544",
	"email"=>"aditya.neo5@gmail.com",
	"jurusan"=>"teknik sabun",
	"gambar"=>"2.jpg"
] 
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
 	<li>
 		<img src="img/<?= $mhs["gambar"];  ?>">
 	</li>
 	<li>Nama: <?php echo $mhs["nama"]; ?></li>
 	<li>NIM: <?php echo $mhs["nrp"]; ?></li>
 	<li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
 	<li>Email: <?php echo $mhs["email"]; ?></li>

 </ul>
<?php endforeach; ?>
 </body>
 </html>
 