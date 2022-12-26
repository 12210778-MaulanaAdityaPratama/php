<?php 
// $mahasiswa = [
// 	["adit","121221","teknik informatika","aditya.neo5@gmail.com"],
// 	["udin","1122121221","teknik informatika","udin.neo5@gmail.com"],
// 	["slebew","112211","teknik informatika","slebew.neo5@gmail.com"]
// ];

// array associative
// definisi nya sama sepertti array numerik, kecuali
// key nya adalah string yang kita buat sendiri
$laptop = [
	[
	"laptop"=>"acer",
	"ram" => "4gb",
	"memori"=>"ssd",
	"cpu"=>"intel",
	"gambar"=>"acer.jpg"
	],
	[
	"laptop"=>"acer2",
	"ram" => "4gb",
	"memori"=>"ssd",
	"cpu"=>"amd",
	"gambar"=>"acer2.jpg"
	],
	[
	"laptop"=>"acer3",
	"ram" => "8gb",
	"memori"=>"hdd",
	"cpu"=>"intel",
	"gambar"=>"acer3.jpg"
	],
	[
	"laptop"=>"dell",
	"ram" => "16gb",
	"memori"=>"ssd",
	"cpu"=>"intel",
	"gambar"=>"dell.jpg"
	],
	[
	"laptop"=>"hp",
	"ram" => "4gb",
	"memori"=>"ssd",
	"cpu"=>"amd",
	"gambar"=>"hp.jpg"
	],
	[
	"laptop"=>"lenovo",
	"ram" => "8gb",
	"memori"=>"ssd",
	"cpu"=>"amd",
	"gambar"=>"lenovo.jpg"
	],
	[
	"laptop"=>"lenovo",
	"ram" => "4gb",
	"memori"=>"hdd",
	"cpu"=>"intel",
	"gambar"=>"lenovo2.jpg"
	],
	[
	"laptop"=>"lenovo",
	"ram" => "4gb",
	"memori"=>"hdd",
	"cpu"=>"amd",
	"gambar"=>"lenovo3.jpg"
	],
	[
	"laptop"=>"acer predator",
	"ram" => "32gb",
	"memori"=>"ssd",
	"cpu"=>"intel",
	"gambar"=>"predator.jpg"
	],
	[
	"laptop"=>"asus rog",
	"ram" => "32gb",
	"memori"=>"ssd",
	"cpu"=>"intel",
	"gambar"=>"rog.jpg"
	]
];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Daftar Laptop</title>
 </head>
 <body>
 	<h1>Daftar Laptop</h1>
 
 <?php foreach($laptop as $beli) :?>
 <ul>
 	<li>
 		<img src="img/<?= $beli["gambar"];  ?>">
 	</li>
 	<li>Nama: <?php echo $beli["laptop"]; ?></li>
 	<li>NIM: <?php echo $beli["ram"]; ?></li>
 	<li>Jurusan: <?php echo $beli["memori"]; ?></li>
 	<li>Email: <?php echo $beli["cpu"]; ?></li>

 </ul>
<?php endforeach; ?>
 </body>
 </html>
 