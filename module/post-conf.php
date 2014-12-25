<?php  
echo "<pre>";
print_r($_POST);
print_r($_FILES);
?>

<?php  
$_POST['image'] = $_FILES['image']['name'];
foreach ($_POST as $key => $value) {
	$field[] = $key;
}
$pesan     = "UPDATE pesanan SET status = 'Lunas' WHERE invoice_no = $_POST[invoice_no]";
$fields    = implode(", ", $field);
$post      = implode("','", $_POST);
$folder    = 'layout/images/konfirmasi/';
$file_name = $_FILES['image']['name'];
$sql       = "INSERT INTO konfirmasi (id, $fields) 
	VALUES ('NULL', '$post')";
	
mysql_query($pesan);

if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
}

move_uploaded_file($_FILES['image']['tmp_name'], $folder.$file_name);
mysql_query($sql);


echo "<script>window.alert('Terima Kasih Pesanan Anda Sedang Kami Proses');
    window.location=('index.php?module=home')</script>";
?>