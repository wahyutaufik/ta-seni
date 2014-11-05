<?php  

include('../config/koneksi.php');
$kode_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nm_barang'];
$kategori    = $_POST['kategori'];
$harga_jual  = $_POST['harga'];
$stock       = $_POST['stock'];
$keterangan  = $_POST['keterangan'];
$gambar      = $_FILES['gambar']['name'];
$tmp         = $_FILES['gambar']['tmp_name'];

$query ="INSERT INTO `barang`(`kd_barang`, `nm_barang`, `harga_jual`, `stok`, `keterangan`, `file_gambar`, `kd_kategori`) VALUES ('$kode_barang','$nama_barang','$harga_jual','$stock','$keterangan','$gambar','$kategori')";
mysql_query($query);	
move_uploaded_file($tmp, "../gambar/gambar_barang/".$gambar);
mysql_close();
header("Location:tampil.php?message=success");
?>