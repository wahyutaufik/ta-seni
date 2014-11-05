<?php  
$datas    = implode("','", $_POST);
$data     = explode("','", $datas, -2);
$data     = implode("','", $data);

$password = base64_encode($_POST['password']);
$query ="INSERT INTO `admin`(`id`, `username`,`password`)
		 VALUES (NULL,'$data','$password')";
mysql_query($query);
mysql_close();
header("Location:index.php?module=admin_list&message=registered");
?>