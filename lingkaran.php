  <?php 
if (isset ($_POST['submit'])) {
	$Jarijari= $_POST['Jarijari'];
	$phi= 22/7;
	//rumus
	$Luas= $phi * $Jarijari * $Jarijari;
	$Keliling= $phi * ($Jarijari+ $Jarijari); 
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="csshitung.css">
 	<title></title>
 </head>
 <body>
 <center><h2>Menghitung Luas dan Keliling Lingkaran</h2>
 	<p>masukan jari - jari lingkaran</p>
	<form action="lingkaran.php" method="post">
	Jari - jari 	: <input type="text" name="Jarijari">
	<br><br>
	<input type="submit" name="submit" value="hitung">
</form><br><br>
 <p>nilai yang kamu input ialah</p>
 <p>jari - jari : <?=$Jarijari?> dengan phi : 22/7</p>
 <p>Luas dan Keliling lingkaran yang kamu cari adalah : <?= $Luas; ?> cm dan <?= $Keliling; ?> cm</p>
 <p><a href="tugas1.php" class="hover">kembali kehaman awal</a></p></center>
 </body>
 </html>