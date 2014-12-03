<?php
include "config/koneksi.php";

$sid = session_id();
$query = "SELECT * FROM keranjang WHERE id_session LIKE '$sid'";
$sql = mysql_query($query);
$row = mysql_num_rows($sql);
$jml = mysql_fetch_array($sql);

echo "<i class='cart'></i><span>$row</span>";
?>
	