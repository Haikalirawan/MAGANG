<form method="post">
	<label for="nama">Nama</label>
	<input type="text" id="nama" name="nama"/> 

	<br/>

	<label for="alamat">Alamat</label>		
	<input type="text" id="alamat" name="alamat"/>
	<br/>

	<input type="submit" value="submit" name="simpan"/>
</form>

<?php

/*
	Form diatas menggunakan method="post"
	untuk mendapatkan datanya kita menggunakan $_POST
*/

if($_POST['simpan']=="submit") {
	
	echo "Form sudah disubmit";
	echo "<br/>";
	echo "Nama : ".$_POST['nama'];
	echo "<br/>";
	echo "Alamat : ".$_POST['alamat'];

} else {
	
	echo "Form belum disubmit";

}


?>
