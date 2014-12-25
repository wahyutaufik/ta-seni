<?php  
foreach ($_POST['id_product'] as $key => $v) {
	$idProduct = $_POST['id_product'][$key];
	$qty = $_POST['qty'][$key];
	$sql = "UPDATE keranjang SET qty = $qty WHERE id_session = '$sid' AND id_product='$idProduct'";
	mysql_query($sql);
}
header("Location:index.php?module=cart");
?>