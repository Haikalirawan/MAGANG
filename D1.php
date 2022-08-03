<?php 
	
	// saya anak desa
	/* saya 
		anak
		 kampung */


	// Macam-macam String
	echo strlen("Hello world"); // outputs 11

	echo "<br>";
	echo "<br>";

	echo strrev("Hello world"); // outputs dlrow olleH
	
	echo "<br>";
	echo "<br>";
	
	echo str_word_count("Hello world"); // outputs 2
	
	echo "<br>";
	echo "<br>";
	
	echo strpos("Hello World", "World"); // outputs 6
	
	echo "<br>";
	echo "<br>";

	$textOld = "Hello world";
	echo str_replace("Hello", "Hai", $textOld); // hasilnya adalah Hai world
	
	echo "<br>";
	echo "<br>";


	$x = "Saya memiliki ayam sebanyak ";
	$y = 50;
	$x .= $y;
	echo $x; // Saya memiliki ayam sebanyak 50
	
	echo "<br>";
	echo "<br>";

	// constants
	define(Salam, "Selamat datang di web saya"); // Selamat datang di web saya
	echo Salam;
	echo "<br>";echo "<br>";


















	// Pengkondisian
	if ($x == $y) {
		echo "100 sama dengan 50";
	} 
	elseif ($x < $y) {
		echo "100 lebih kecil dari pada 50";
	}
	else {
		echo "100 lebih besar dari pada 50";
	};

	echo "<br>";echo "<br>";

	$makananFav = "Nasi goreng";

	switch($makananFav) {
		case "Nasi goreng":
			echo "Makanan kesukaan anda adalah Nasi goreng";
			break;
		case "Mie ayam":
			echo "Makanan kesukaan anda adalah Mie ayam";
			break;
		case "Topak ladeh" :
			echo "Makanan kesukaan anda adalah Topak ladeh";

		default:
			echo "Mungkin makanan kesukaanmu bukan Nasi goreng, Mie ayam atau Topak ladeh";
	}
	echo "<br>";
	echo "<br>"; 














	// Perulangan
	$x = 1;
	while ($x <= 5) {
		echo "Nilai selanjutnya : $x <br>";
		$x++;
	}

	echo "<br>";

	$x = 1;
	do {
		echo "Nilai selanjutnya : $x <br>";
		$x++;
	} while ($x <= 5);

	echo "<br>";

	for( $x = 1; $x <= 5; $x++ ) {
		echo "Nilai anda sekarang : $x <br>";
	}

	echo "<br>";

	$color = ["Merah", "Biru", "Kuning"];
	foreach ( $color as $x ) {
		echo "$x <br>";
	}

	echo "<br>";














	// Function's
	$a = warnaKesukaan();
	echo $a;

	function warnaKesukaan() {
		echo "Warna kesukaan saya Hitam";
	}

	echo "<br><br>";
	
	function familyName($fname, $year){
		echo "Nama $fname Terlahir tahun $year.<br>";
	}
	familyName("Bambang" ,1950);
	familyName("Gintama" ,1980);
	familyName("Sumandi" ,1965);
	familyName("Suparto" ,1975);
	familyName("Sumardi" ,1989);

	echo "<br><br>";

	function tentukanTinggi($tinggiMinimal = 50){
		echo "tinggi nya adalah : $tinggiMinimal <br>";
	}
	tentukanTinggi(350);
	tentukanTinggi(); // Jika tidak diberi parameter, maka otomatis akan diisi dengan niali 50
	tentukanTinggi(); // Jika tidak diberi parameter, maka otomatis akan diisi dengan nilai 50
	tentukanTinggi(200);

	echo "<br><br>";

	function sum($x, $y){
		$z = $x + $y;
		return $z;
	}

	echo "5 + 10 = " . sum(5, 10) . "<br>";
	echo "6 + 4 = " . sum(6, 4);

	echo "<br><br>";











	// Array

	// Numerik array 
	$cars = ["Avanza", "BMW", "Daihatsu"];
	echo "saya memiliki mobil " . $cars[0] . " dan " . $cars[1] . " dan juga " . $cars[2] . ".";

	echo "<br>";
	echo "<br>";

	$cars = ["Avanza", "BMW", "Daihatsu"];
	echo count($cars);

	echo "<br>";
	echo "<br>";


	$cars  = ["Avanza", "BMW", "Daihatsu"];
	$Urutan = count($cars);
	for ($i= 0; $i <= $Urutan; $i++) { 
		echo "$cars[$i]";
		echo "<br>";
	}



	// Asosiatif array
	$umur = ["Haikal"=> 15, "Cahyo"=> 17, "Farid"=> 18];
	echo "Umur cahyo saat ini " . $umur["Cahyo"];
	echo "<br>";
	echo "<br>";


	$umur = ["Haikal"=> "Irawan", "Cahyo"=> "Romadhon", "Farid"=> "Hidayat"];
	foreach ($umur as $x => $value_x) {
		echo "Nama " . $x . " Nama belakang " . $value_x;
		echo "<br>";
	}

echo "<br>";





	// Waktu, Tanggal dan bulan
	echo date('d-m-Y');

	echo "<br>";
	echo "<br>";

	date_default_timezone_set('Asia/Jakarta');
	echo "Waktu Indonesia bagian barat adalah : " . date('H:i:sa');

	echo "<br>";
	echo "<br>";

	// mktime(jam, menit, detik, tanggal, bulan, tahun)
	$x = mktime(12, 16, 45, 7, 11, 2018);
	echo "Membuat tanggal sendiri " . date("d-m-Y h:i:sa", $x);


	echo "<br>";
	echo "<br>";








	


	// Membuka file txt dengan fopen() dan hanya membaca
	$myFile = fopen("contoh.txt", "r") or die("File tidak ditemukan");
		 echo fread($myFile, filesize("contoh.txt"));
			  fclose($myFile);


	echo "<br>";
	echo "<br>";


	$newFile = fopen("newFile.txt", "w") or die("File tidak ditemukan");
	$txt = "John legend";
	fwrite($newFile, $txt);
	$txt = "Jane Legend";
	fwrite($newFile, $txt);
	fclose($newFile);



?>