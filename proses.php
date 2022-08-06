<?php 
include "../koneksi.php";
include "excel_reader2.php";

$target = basename($_FILES['datanama']['name']) ;
move_uploaded_file($_FILES['datanama']['tmp_name'], $target);

chmod($_FILES['datanama']['name'],0777);

$data = new Spreadsheet_Excel_Reader($_FILES['datanama']['name'],false);
$jumlah_baris = $data->rowcount($sheet_index=0);

$nomor = 1;
for ($i=3; $i<=$jumlah_baris; $i++){
	
	$no = $data->val($i, 1);
	$nama  = $data->val($i, 2);
	$alamat  = $data->val($i, 3);
if($no != ""){
		$sql="INSERT into nama values('$no','$nama','$alamat')";
		$query=mysqli_query($nyambung,$sql);
		echo "berhasil tambah data ke-$nomor <br>";
		$nomor++;
	}
}
header("location:index.php?upload");
?>
