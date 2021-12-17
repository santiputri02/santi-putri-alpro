
<!DOCTYPE html>
<html>
<head>
	<santi></title>
</head>
<body>
2. <br>
<hr>
=======MENU======= <br>
1. Baca data <br>
2. Cetak data <br>
3. Ubah data <br>
4. Hapus data <br>
5. Keluar program <br>
<form method="post">
	<input type="text" name="angka"> <br>
	<button type="submit" name="hitung">hasil</button>
</form>
<?php 
if (isset($_POST['hitung'])){
	
	$a='1';
	$b='2';
	$c='3';
	$d='4';
	$e='5';
	$input = $_POST['angka'];
	if ($input === $a){
	echo "Baca data";
}
elseif ($input === $b) {
echo "Cetak data";

}
elseif ($input === $c) {
echo "Ubah data";

}
elseif ($input === $d) {
echo "Hapus data";

}
elseif ($input === $e) {
echo "Keluar program";

}
else{
	echo "data tidak ditemukan";
}
}

?>
<br><br><br>
3. <hr>
1.luas <br>
2. keliling <br>
3. panjang diagonal <br>
4. keluar program <br>
<form method="post">
	<h3>panjang :</h3><input type="number" name="panjang"> <br>
<h3>lebar :</h3><input type="number" name="lebar"> <br>
<h3>masukan kode menu :</h3><input type="number" name="kode"><br>
<button type="submit" name="luas">cari</button>
</form>
<?php
if (isset($_POST['luas'])){
	$panjang =$_POST['panjang'];
	$lebar =$_POST['lebar'];
	$kode =$_POST['kode'];
	$a1 = '1';
	$b1 = '2';
	$c1 = '3';
	$d1 = '4';
	$e1 = '5';
	if ($kode === $a1){	
		$h1 = $panjang * $lebar;
		echo $h1;
	}
	elseif ($kode === $b1){
		$h2 = 2 * $panjang;
		$h3 = 2 * $lebar;
		$hsl = $h2  + $h3;
		echo $hsl;
	}
	elseif ($kode === $c1){
		$h4 = $panjang * $panjang;
		$h5 = $lebar * $lebar;
		$h6 = $h4 + $h5;
		echo $h6;

	}
	elseif ($kode === $d1){
		echo "keluar program";

	}
	else {
		echo "data tidak ditemukan";
	}
	
}
?>
</body>
</html>