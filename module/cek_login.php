<?php

$username = $_POST['username'];
$password = base64_encode($_POST['password']);


$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$login    = mysql_query("SELECT username, kd_pelanggan FROM pelanggan WHERE username='$username' and password='$password'");

$data     = mysql_fetch_array($login);
$jumlahdata = mysql_num_rows($login);
var_dump($data);

if($jumlahdata > 0){
	$_SESSION['username'] = $data['username'];
	$_SESSION['code']     = $data['kd_pelanggan'];
    header("Location:index.php?module=home&message=success");
} else {
    header("Location:index.php?module=login&message=failed");
}
?>