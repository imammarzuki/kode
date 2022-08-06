<html>
<head>
<title>Letter of Acceptance</title>
<style>
 @page 
    {
        size: auto;   
        margin: 0mm; 
    }
</style>
<script>
 window.print();
 </script>
</head>
<body>
<div align="center">
<header><img src="header.png" width="80%" height="150"></header>
<h1><u><b><i>Letter of Acceptance</i> (LOA)</b></u><br>
<?php
include "koneksi.php";
$id=$_GET['id'];
$sql="select * from loa where id='$id'";
$query=mysqli_query($nyambung,$sql);
while($baris=mysqli_fetch_row($query)){
	$id=$baris[0];
	$nomor=$baris[1];
	$judul=$baris[2];
	$penulis=$baris[3];
	$instansi=$baris[4];
	$keperluan=$baris[5];
	$tanggal=$baris[6];
	$slip=$baris[7];
	echo "No : $nomor";
}
?>
</h1>
<table border="0" cellspacing="0" cellpadding="10" width="80%">
<tr><td width="10%"><b>Telah Diterima</td><td width="5%"></td><td width="65%"></td></tr>
<tr><td>Berkas</td><td>:</td><td>Softcopy Elektronik</td></tr>
<?php
include "koneksi.php";
$id=$_GET['id'];
$sql="select * from loa where id='$id'";
$query=mysqli_query($nyambung,$sql);
while($baris=mysqli_fetch_row($query)){
	$id=$baris[0];
	$nomor=$baris[1];
	$judul=$baris[2];
	$penulis=$baris[3];
	$instansi=$baris[4];
	$keperluan=$baris[5];
	$tanggal=$baris[6];
	$slip=$baris[7];
	echo "<tr><td>Judul</td><td>:</td><td>$judul</td></tr>";
	echo "<tr><td>Penulis</td><td>:</td><td>$penulis</td></tr>";
	echo "<tr><td>Instansi</td><td>:</td><td>$instansi</td></tr>";
	echo "<tr><td>Keperluan</td><td>:</td><td>$keperluan</td></tr>";
	echo "<tr><td>Link Slip Pembayaran</td><td>:</td><td>$slip</td></tr>";
}
?>
</table>
<br><br>
<table border="0" cellspacing="0" cellpadding="10" width="1000">
<?php
include "koneksi.php";
$id=$_GET['id'];
$sql="select * from loa where id='$id'";
$query=mysqli_query($nyambung,$sql);
while($baris=mysqli_fetch_row($query)){
	$id=$baris[0];
	$nomor=$baris[1];
	$judul=$baris[2];
	$penulis=$baris[3];
	$instansi=$baris[4];
	$keperluan=$baris[5];
	$tanggal=$baris[6];
	$slip=$baris[7];
	echo "<tr><td width='70%'></td><td width='30%'>Probolinggo, $tanggal</td></tr>";
}
?>
<tr><td></td><td>Pimpinan Redaksi</td></tr>
<tr><td colspan="2">&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <img src="ttdstempel.png"></td></tr>
<tr><td></td><td><b>Imam Marzuki, S.ST., M.T.</td></tr>
</table>
</div>
</body>
</html>
