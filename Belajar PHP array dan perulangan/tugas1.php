<?php
/*
author: roemly@gmail.com
note: Untuk mengerjakan hal ini harus memahami prinsip kerja looping, array, tag html untuk table  
*/


#inisialisasi data 
$data_nama=array('rohman','romli','aly','ekky','muby','april');

#cara 1 looping untuk menampilkan data 
for($i=0;$i<=5;$i++){
		echo $data_nama[$i]; //menampilkan data array sesuai index
		echo "<br/>"; //untuk menjadikan tampilan turun kebawah
}

#Tugas 1 : tampilkan data tersebut dalam bentuk tabel seperti berikut 
/*
---------------------
| No 	| Nama   	|
---- ----------------
| 1  	| Rohman	|
| 2  	| Romli		|	
| 3  	| Aly		|
| 4		| Ekky		|
| 5		| Muby		|
| 6		| April		|
--------------------- 
*/

#Tugas 2 : tebalkan nama header tabel
#Tugas 3 : Kolom No di ratakan tengah 



?>
