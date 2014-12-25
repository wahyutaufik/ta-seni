<?php  
$_POST['image'] = $_FILES['image']['name'];
foreach ($_POST as $key => $value) {
	$field[] = $key;
}
$cek = "SELECT * FROM transaksi WHERE invoice_no = $_POST[invoice_no]";
$trans = mysql_query($cek);
while ($saksi=mysql_fetch_assoc($trans)) {
	if ($_POST['jumlah']>=$saksi['total_bayar']) {
		$status = 'Lunas';
	}
	else {
		$status = 'Belum Lunas';
	}
$pesan     = "UPDATE pesanan SET status = '$status' WHERE invoice_no = $_POST[invoice_no]";
mysql_query($pesan);
}
$fields    = implode(", ", $field);
$post      = implode("','", $_POST);
$folder    = 'layout/images/konfirmasi/';
$file_name = $_FILES['image']['name'];
$sql       = "INSERT INTO konfirmasi (id, $fields) 
	VALUES ('NULL', '$post')";
	

if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
}

move_uploaded_file($_FILES['image']['tmp_name'], $folder.$file_name);
mysql_query($sql);


echo "<script>window.alert('Terima Kasih Pesanan Anda Sedang Kami Proses');
    window.location=('index.php?module=home')</script>";
?>