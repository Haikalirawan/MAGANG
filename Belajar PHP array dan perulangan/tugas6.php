<?php
/*
author	: roemly@gmail.com
judul	: Menampilkan data array dalam select
catatan	: 	berisi kerangka program yang belum bisa running. 
			peseta diharapkan untuk mengisi kekurangan dari program berikut hingga menjadi sempurna

tujuan	:	peserta memahami cara inisiasi data untuk array sesuai kebutuhan hasil akhir
*			peserta memahami cara menampilkan data padal element select
*/

#inisialisasi data 
$kota=array(
'BKL'=>'BANGKALAN',
'SBY'=>'SURABAYA',
'JKT'=>'JAKARTA',
'GRK'=>'GRESIK',
'SDJ'=>'SIDOARJO',
'SMP'=>'SAMPANG',
);


?>
Tampilkan isi select dibawah ini menggunakan data array yang sudah di definisikan
<br/>
<br/>
Nama Kota: <select>
	<option value="<?= $kota['BKL'] ?>"><?= $kota['BKL'] ?></option>
	<option value="<?= $kota['SBY'] ?>"><?= $kota['SBY'] ?></option>
	<option value="<?= $kota['JKT'] ?>"><?= $kota['JKT'] ?></option>
	<option value="<?= $kota['SDJ'] ?>"><?= $kota['SDJ'] ?></option>
	<option value="<?= $kota['SMP'] ?>"><?= $kota['SMP'] ?></option>
</select>
