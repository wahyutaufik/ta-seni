<?php
session_start();
error_reporting(0);
include "config/koneksi.php";
include "config/tanggal.php";

$sid       = session_id();
$input     = $_GET['input'];
$inputform = $_GET['inputform'];

if($input=='add'){

	$sql = mysql_query("SELECT id_product FROM keranjang WHERE id_product='$_GET[id]' AND id_session='$sid'");
	$num = mysql_num_rows($sql);
	if ($num==0){
		mysql_query("INSERT INTO keranjang(id_product,
											id_session,
											tgl_keranjang,
											qty)
									VALUES	('$_GET[id]',
											'$sid',
											'$tgl_sekarang',
											'1')");
	}
	else {
		mysql_query("UPDATE keranjang SET qty = qty + 1 WHERE id_session = '$sid' AND id_product='$_GET[id]'");
	}
	deletecart();
	header('location:index.php?module=cart');

} elseif ($input=='delete'){

	mysql_query("DELETE FROM keranjang WHERE id_keranjang='$_GET[id]'");
	header('location:index.php?module=cart');

} elseif ($input=='inputform'){

	function cart_content(){
		$ct_content = array();
		$sid = session_id();
		$sql = mysql_query("SELECT * FROM keranjang WHERE id_session='$sid'");
		
		while ($r=mysql_fetch_array($sql)) {
			$ct_content[] = $r;
		}
		return $ct_content;
	}

	$ct_content = cart_content();
	$jml        = count($ct_content);
	$now        = date("Ymd");
	$invoice_no = date('ymdhis');
	foreach ($ct_content as $key => $cartContent) {
		$qty = $ct_content[$key]['qty'];
		$idProduk = $ct_content[$key]['id_product'];
		$barang = "SELECT stok FROM produk WHERE id = '$idProduk'";
		$hitung = mysql_query($barang);
		while ($itung = mysql_fetch_assoc($hitung)) {
			$kurangi = $itung['stok']-$qty;
			$kurangBarang = "UPDATE produk SET stok = '$kurangi' WHERE id = '$idProduk'";
			mysql_query($kurangBarang);
		}
	}

	for($i=0; $i<$jml; $i++){
		mysql_query("INSERT INTO pesanan(id, name, email, phone, address, id_product, jumlah, tanggal, id_pemesan, invoice_no, provinsi_id) 
				 VALUES (NULL, '$_POST[name]', '$_POST[email]', '$_POST[telp]', '$_POST[address]', '{$ct_content[$i]['id_product']}', '{$ct_content[$i]['qty']}', '$now', '$sid', '$invoice_no', '$_POST[provinsi]')");
	}
	for($i=0; $i<$jml; $i++){
		mysql_query("DELETE FROM keranjang WHERE id_keranjang = {$ct_content[$i]['id_keranjang']}");
	} 
	
	echo "<script>window.alert('Terima Kasih Pesanan Anda Sedang Kami Proses');
    window.location=('index.php?module=conf_pdf')</script>";
}								
											
function deletecart(){
	$del = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
	mysql_query("DELETE FROM keranjang WHERE tgl_keranjang < '$del'");
}