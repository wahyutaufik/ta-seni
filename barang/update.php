<?php  

include('../config/koneksi.php');

$kode_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nm_barang'];
$kategori    = $_POST['kategori'];
$harga_jual  = $_POST['harga'];
$stock       = $_POST['stock'];
$keterangan  = $_POST['keterangan'];

if (empty($_FILES['gambar']['name'])) {
	$model  = mysql_query("SELECT * FROM barang WHERE kd_barang LIKE '%$_GET[kd_barang]%'");
	$data   = mysql_fetch_array($model);
	$gambar = $data['file_gambar'];
} else {
	$tmp    = $_FILES['gambar']['tmp_name'];
	$gambar = $_FILES['gambar']['name'];
	move_uploaded_file($tmp, "../gambar/gambar_barang/".$gambar);
}

$query =
	"UPDATE barang 
	 SET kd_barang  = '$kode_barang', 
		nm_barang   = '$nama_barang', 
		harga_jual  = '$harga_jual', 
		stok        = '$stock', 
		keterangan 	= '$keterangan', 
		file_gambar = '$gambar' 
	 WHERE kd_barang LIKE '%$_GET[kd_barang]%' 
	";

mysql_query($query);	
mysql_close();
header("Location:tampil.php?message=success");
?>