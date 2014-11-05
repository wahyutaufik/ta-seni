<?php  

$id        = $_GET['id'];
$pelanggan = $_POST['pelanggan'];
$kelamin   = $_POST['kelamin'];
$email     = $_POST['email'];
$phone     = $_POST['phone'];
$username  = $_POST['username'];
$password  = base64_encode($_POST['password']);

$query    = "UPDATE `pelanggan` SET `kd_pelanggan`='$id',`nm_pelanggan`='$pelanggan',`kelamin`='$kelamin',`email`='$email',`no_tlp`='$phone', `username`='$username', `password`='$password' WHERE kd_pelanggan='$id'";
mysql_query($query);
header("Location:index.php?module=pelanggan_list&message=registered");
?>