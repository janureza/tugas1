<?php 
if (isset ($_POST['submit'])) {
	$tinggi= $_POST['tinggi'];
	$alas= $_POST['alas'];
	$sisiA= $_POST['sisiA'];
	$sisiB= $_POST['sisiB'];
	//rumus
	$Luas = $alas * $tinggi /2; 
	$Keliling = $sisiA + $sisiB + $alas;


}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="csshitung.css">
 	<title></title>
 </head>
 <body>
 	<center><h2>Menghitung Luas dan Keliling Segitiga</h2>
<form action="segitiga.php" method="post">
	tinggi	: <input type="text" name="tinggi">
	<br><br>
	alas	: <input type="text" name="alas">
	<br><br>
	sisi A	: <input type="text" name="sisiA">
	<br><br>
	sisi B	: <input type="text" name="sisiB">
	<br><br>
	<input type="submit" name="submit" value="hitung">
</form><br><br>
 <p>nilai yang kamu input ialah</p>
 <p>tinggi : <?=$tinggi?>, alas : <?=$alas?>, sisi A : <?=$sisiA?>, sisi B : <?=$sisiB?></p>
 <p>Luas dan Keliling segitiga yang kamu cari adalah : <?= $Luas; ?> cm dan <?= $Keliling; ?> cm</p>
 <p><a href="tugas1.php" class="hover">kembali kehaman awal</a></p></center>

 </body>
 </html>
 



 
 