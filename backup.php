<!DOCTYPE html>
<html>
<head>
  <title>Data Nama</title>
  </head>
<body>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data.xls");
?>
  <div align="center">
    <h1>Data Nama</h1>
	<?php
include "../koneksi.php";
$sql2="SELECT COUNT(*) FROM nama";
$query2=mysqli_query($nyambung,$sql2);
$baris2=mysqli_fetch_row($query2);
$jumlah=$baris2[0];
echo "<center><b>Total ada $jumlah Nama</b></center>";
echo "<table border='1' cellspacing='0' width='100%'>";
echo "<tr><th width='5%'>No</th><th width='40%'>Nama</th><th width='45%'>Alamat</th></tr>";
$sql="SELECT * FROM nama";
$query=mysqli_query($nyambung,$sql);
$no="1";
while($baris=mysqli_fetch_row($query)){
  	$nomor=$baris[0];
	$nama=$baris[1];
	$alamat=$baris[2];
	echo "<tr><td>$nomor</td><td>$nama</td><td>$alamat</td></tr>";
	$no++;
}
?>
</table>
	</div>
</body>
</html>