<?php
/*
author: roemly@gmail.com
note: Sebelum mengerjakan tugas ini harus mengerjakan tugas1.php terlebih dahulu
*/


#inisialisasi data 
$data_nama=array('rohman','romli', 'aly', 'ekky', 'muby', 'april');
$data_kota=array('sidoarjo','bangkalan','mojokerto','kediri','gresik','mojokerto');
#cara 1 looping untuk menampilkan data 
for($i=0;$i<=5;$i++){
		echo $data_nama[$i]; //menampilkan data array sesuai index
		echo "<br/>"; //untuk menjadikan tampilan turun kebawah
}

#Tugas  : tampilkan data alamat 
/*
---------------------------------
| No 	| Nama   	| Kota		|
---- ----------------------------
| 1  	| Rohman	| Sidoarjo	|
| 2  	| Romli		| Bangkalan	|	
| 3  	| Aly		| Mojokerto	|
| 4		| Ekky		| Kediri	|
| 5		| Muby		| Gresik	|
| 6		| April		| Mojokerto	|
--------------------------------- 
*/


echo "<br>";
echo "<br>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabel tugas 2</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kota</th>
		</tr>
		
		<tr>
			<?php $x = 1 ?>
			<?php for ($i=0; $i <= 5 ; $i++) : ?>
				<td align="center"><?= $x ?></td>
				<td><?= $data_nama[$i] ?></td>
				<td><?= $data_kota[$i] ?></td>
		</tr>
			<?php $x++ ?>
			<?php endfor ?>
	</table>
</body>
</html>
