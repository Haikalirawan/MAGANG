<?php
/*
author	: roemly@gmail.com
judul	: Membuat form usia menggunakan looping
tugas	: 	Peserta membuat looping untuk menampilkan input Text usia  

tujuan	:	peserta memahami cara inisiasi data untuk array sesuai kebutuhan hasil akhir
			peserta memahami cara membuat element Text menggunakan looping
catatan : Tombol simpan memang belum difungsikan hanya sebagai pelengkap saja.
*/

$data_siswa=array(
	0 => array('nama'=>'Rohman','kota'=>'Sidooarjo'),
	1 => array('nama'=>'Romli','kota'=>'Bangkalan'),
	2 => array('nama'=>'Aly','kota'=>'Mojokerto'),
	3 => array('nama'=>'Ekky','kota'=>'Kediri'),
	4 => array('nama'=>'Muby','kota'=>'Gresik'),
	5 => array('nama'=>'April','kota'=>'Mojokerto')
);


?>
Gunakan Looping untuk menampilkan form 
<form>
	
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<th>Nama</th>
			<th>Kota</th>
			<th>Usia</th>
		</tr>
		<!-- Start Gunakan looping untuk menampilkan data berikut dari array -->
		<tr>
			<?php for ($i=0; $i <= 5 ; $i++) : ?>

			<td><?= $data_siswa[$i]['nama'] ?></td>
			<td><?= $data_siswa[$i]['kota'] ?></td>
			<td><input type="text" name="usia[]" value="" /></td>

		</tr>
			<?php endfor ?>
		<!-- End Gunakan looping untuk menampilkan data berikut dari array -->
		
	</table>
	<br/>
	<input type="submit" name="simpan" value="Simpan"/>

</form>
