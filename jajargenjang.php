<?php 
if (isset ($_POST['submit'])) {
	$bawah= $_POST['a'];
	$sisi_miring= $_POST['b'];
	$tinggi= $_POST['t'];
	//rumus
	$Luas = $bawah * $tinggi; 
	$Keliling = 2 *($bawah + $sisi_miring);
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="csshitung.css">
</head>
<body>
 <center><h2>Menghitung Luas dan Keliling Jajargenjang</h2>
 	<p>masukan angka</p>
	<form action="jajargenjang.php" method="post">
	bawah	: <input type="text" name="a">
	<br><br>
	sisi_miring	: <input type="text" name="b">
	<br><br>
	tinggi	: <input type="text" name="t">
	<br><br>
	<input type="submit" name="submit" value="hitung">
</form><br><br>
<p>nilai yang kamu input ialah</p>
<p>bawah : <?=$bawah?>, sisi miring : <?=$sisi_miring?>, tinggi : <?=$tinggi?></p>
 <p>Luas dan Keliling jajargenjang yang kamu cari adalah : <?= $Luas; ?> cm dan <?= $Keliling; ?> cm</p>
 <p><a href="tugas1.php" class="hover">kembali kehaman awal</a></p></center>
</body>
</html>