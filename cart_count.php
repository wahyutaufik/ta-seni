<?php
include "config/koneksi.php";
	$sid = session_id();
	$sql = mysql_query("SELECT * FROM keranjang");
	$row = mysql_num_rows($sql);
	$jml = mysql_fetch_array($sql);
	
	echo "<i class='cart'></i><span>$row</span>";
	?>
	