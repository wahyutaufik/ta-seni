<?php 

$username = $_POST['username'];
$password = $_POST['password'];
$password = base64_encode($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$login    = mysql_query("SELECT username FROM admin WHERE username='$username' and password='$password'");

$data     = mysql_fetch_array($login);
$jumlahdata = mysql_num_rows($login);

if($jumlahdata > 0){
	$_SESSION['username'] = $data['username'];
    header("Location:index.php?module=dashboard&message=admin-success");
} else {
    header("Location:index.php?module=login_admin&message=failed");
}
?>