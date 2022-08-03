<?php
/*
author	: roemly@gmail.com
judul	: Menampilkan data siswa dengan array bertingkat
catatan	: 	berisi kerangka program yang belum bisa running. 
			peseta diharapkan untuk mengisi kekurangan dari program berikut hingga menjadi sempurna

tujuan	:	peserta memahami cara inisiasi data untuk array sesuai kebutuhan hasil akhir
*			peserta memahami cara menampilkan data
*/


#inisialisasi data 
$data_siswa=array(
0 => array('nama'=>'Rohman','kota'=>'Sidooarjo','nilai'=>75),
1 => array('nama'=>'Romli','kota'=>'Bangkalan','nilai'=>100),
2 => array('nama'=>'Aly','kota'=>'Mojokerto','nilai'=>80),
3 => array('nama'=>'Ekky','kota'=>'Kediri','nilai'=>70),
4 => array('nama'=>'Muby','kota'=>'Gresik','nilai'=>80),
5 => array('nama'=>'April','kota'=>'Mojokerto','nilai'=>75)
);

#cara 1 looping untuk menampilkan data 
for ($i=0; $i <=5; $i++) { 
		echo $data_siswa[$i]["nama"];
		echo $data_siswa[$i]["kota"];
		echo $data_siswa[$i]["nilai"];
		echo "<br>";
}

#Hasil akhir  : 
/*
----------------------------------------
| No 	| Nama   	| Kota		| Nilai	|	
---- ------------------------------------
| 1  	| Rohman	| Sidoarjo	| 75	|
| 2  	| Romli		| Bangkalan	| 100	|	
| 3  	| Aly		| Mojokerto	| 80	|
| 4		| Ekky		| Kediri	| 70	|
| 5		| Muby		| Gresik	| 80	|
| 6		| April		| Mojokerto	| 75	|
-----------------------------------------
*/

echo "<br>";
echo "<br>";


?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabel Tugas 5</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kota</th>
			<th>Nilai</th>
		</tr>

		<tr>
			<?php $x = 1 ?>
			<?php for ($i=0; $i <=5 ; $i++) : ?>
				<td align="center"><?= $x ?></td>
				<td><?= $data_siswa[$i]["nama"]; ?></td>
				<td><?= $data_siswa[$i]["kota"]; ?></td>
				<td><?= $data_siswa[$i]["nilai"]; ?></td>
		</tr>
			<?php $x++ ?>
			<?php endfor ?>
	</table>
</body>
</html>
