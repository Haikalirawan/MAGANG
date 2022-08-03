<?php
/***************
author	: roemly@gmail.com
note	: 	berisi kerangka program yang belum bisa running. 
			peseta diharapkan untuk mengisi kekurangan dari program berikut hingga menjadi sempurna

tujuan	:	peserta memahami cara inisiasi data untuk array sesuai kebutuhan hasil akhir
			peserta memahami cara menampilkan data
/***************/


#inisialisasi data 
$data_siswa=array('Rohman','Romli', 'Aly', 'Ekky', 'Muby', 'April');
$data_kota=array('Sidoarjo','Bangkalan','Mojokerto','Kediri','Gresik','Mojokerto');
$data_nilai=array(75, 100, 80, 70, 80, 75);

#cara 1 looping untuk menampilkan data 
for($i=0; $i <= 5; $i++){
	
	echo $data_siswa[$i];
	echo $data_kota[$i];
	echo $data_nilai[$i];

	//gunakan if untuk menentukan nilai > 70 Lulus dan selain itu tidak lulus
	if ($data_nilai[$i] > 70) {
		echo "Lulus";
	}else{
		echo "Tidak";
	}
	echo "<br>";
}

#Hasil akhir  : 
/*
-------------------------------------------------
| No 	| Nama   	| Kota		| Nilai	| Lulus |	
---- -------------------------------------------- 
| 1  	| Rohman	| Sidoarjo	| 75	| Lulus |
| 2  	| Romli		| Bangkalan	| 100	| Lulus	|
| 3  	| Aly		| Mojokerto	| 80	| Lulus |
| 4		| Ekky		| Kediri	| 70	| Tidak |
| 5		| Muby		| Gresik	| 80	| Lulus |
| 6		| April		| Mojokerto	| 75	| Lulus |
------------------------------------------------
*/

echo "<br>";
echo "<br>";


?>


<!DOCTYPE html>
<html>
<head>
	<title>Tabel Tugas 4</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kota</th>
			<th>Nilai</th>
			<th>Lulus</th>
		</tr>

		<tr>
			<?php $x = 1 ?>
			<?php for ($i=0; $i <=5 ; $i++) : ?>
				<td align="center"><?= $x ?></td>
				<td><?= $data_siswa[$i] ?></td>
				<td><?= $data_kota[$i] ?></td>
				<td><?= $data_nilai[$i] ?></td>
				<td>
					<?php if ($data_nilai[$i] > 70) : ?>
						<?php echo "Lulus"; ?>
					<?php else : ?>
						<?php echo "Tidak"; ?>
					<?php endif ?>		
				</td>
		</tr>
			<?php $x++ ?>
			<?php endfor ?>
	</table>
</body>
</html>
