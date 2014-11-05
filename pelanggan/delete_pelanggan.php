<?php  
$id    = $_GET['id'];
$query = "DELETE FROM `pelanggan` WHERE kd_pelanggan='$id'";

mysql_query($query);
header("Location:index.php?module=pelanggan_list&message=deleted");
?>