<?php  

$id       = $_GET['id'];
$datas    = implode("','", $_POST);
$data     = explode("','", $datas, -1);
$data     = implode("','", $data);
$password = base64_encode($_POST['password']);
$query    = "UPDATE `admin` SET `id`='$id',`username`='$data',`password`='$password' WHERE id='$id'";

mysql_query($query);
header("Location:index.php?module=admin_list&message=registered");
?>