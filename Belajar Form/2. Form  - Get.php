<?php
/* Tugas : 
 * silahkan copy paste 1. Form - Post.php
 * kemudian ganti methodnya menjadi get
 * */
?>

<form method="get">
	<label for="nama">Nama</label>
	<input type="text" id="nama" name="nama" /> 

	<br/>

	<label for="alamat">Alamat</label>		
	<input type="text" id="alamat" name="alamat" />
	<br/>

	<input type="submit" value="submit" name="simpan" />
</form>

<?php
/*
	Form diatas menggunakan method="get"
	untuk mendapatkan datanya kita menggunakan $_GET
*/
if($_GET['simpan']=="submit") {
	
	echo "Form sudah disubmit";
	echo "<br/>";
	echo "Nama : ".$_GET['nama'];
	echo "<br/>";
	echo "Alamat : ".$_GET['alamat'];

} else {
	
	echo "Form belum disubmit";

}

?>
