<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM pesanan WHERE id='$id'");
$data = mysql_fetch_array($query);
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
    header('Location:index.php?module=home&message=login');
}
?>
<form action="index.php?module=update_admin&id=<?php echo $id ?>" method="POST">
	<div class="row-fluid">
    	<span><label>Nama : </label><label><?php echo $data['name'] ?></label></span><br>
    </div>
    <div class="row-fluid">
    	<span><label>Email : </label><label><?php echo $data['email'] ?></label></span><br>
    </div>
    <div class="row-fluid">
    	<span><label>Telepon : </label><label><?php echo $data['phone'] ?></label></span><br>
    </div> 
    <div class="row-fluid">
    	<span><label>Alamat : </label><label><?php echo $data['address'] ?></label></span><br>
    </div>
    <?php 
	$prov = mysql_query("SELECT * FROM ongkir WHERE id=$data[provinsi_id]");
	while ($provinsi = mysql_fetch_assoc($prov)) { 
	?>
    <div class="row-fluid">
    	<span><label>Provinsi : </label><label><?php echo $provinsi['provinsi'] ?></label></span><br>
    </div>
	<?php } ?>
    <div class="row-fluid">
    	<span><label>Tanggal Pemesanan : </label><label><?php echo $data['tanggal'] ?></label></span><br>
    </div>
    <div class="row-fluid">
    	<span><label>Status : </label><label><?php echo $data['status'] ?></label></span><br>
    </div>
    <div class="row-fluid">
		<table width="100%" border="1"class="table table-striped table-bordered table-hover dataTable no-footer">
			<tr>
				<th>ID Produk</th>
				<th>Jumlah</th>
				<th width="20%">Harga Satuan (Rp)</th>
				<th width="20%">Jumlah (Rp)</th>
			</tr>
			<?php  
			$produk = mysql_query("SELECT * FROM pesanan WHERE invoice_no = $data[invoice_no]");
			while ($product = mysql_fetch_assoc($produk)) {
				$prod = "SELECT * FROM produk WHERE id = '$product[id_product]'";
				$xxx = mysql_query($prod);
				while ($prods = mysql_fetch_assoc($xxx)) {
					$harga = ($prods['price']*$product['jumlah']); 
					$sum +=$harga;
			?>
			<tr>
				<td><?php echo $prods['name']; ?></td>
				<td><?php echo $product['jumlah']; ?></td>
				<td align="right"><?php echo $prods['price'] ?></td>
				<td align="right"><?php echo $harga ?></td>
			</tr>
			<?php } 	
			}?>
			<tr>
				<td colspan="3" style="font-weight:bold; text-align:right;">Total&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td style="font-weight:bold; " align="right"><?php echo $sum ?></td>
			</tr>
			<tr>
			<?php  
				$ongkir = mysql_query("SELECT * FROM ongkir WHERE id=$data[provinsi_id]");
				while ($ongkos = mysql_fetch_assoc($ongkir)) {
			?>
				<td colspan="3" style="font-weight:bold; text-align:right;">Ongkos Kirim&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td style="font-weight:bold; " align="right"><?php echo $ongkos['harga'] ?></td>
			</tr>
			<tr>
				<td colspan="3" style="font-weight:bold; text-align:right;">Grand Total&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td style="font-weight:bold; " align="right"><?php echo 'Rp '.($sum+$ongkos['harga']) ?></td>
				<?php 
				$total = ($total+$ongkos['harga']);
				?>
			</tr>
			<?php } ?>
		</table>
    </div>
    <div>
		<!-- <a href="index.php?module=update<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-primary">Update</a> -->
    	<!-- <a href="index.php?module=delete<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-outline btn-danger">Delete</a> -->
		<a href="index.php?module=list<?php echo ucfirst($modulecase); ?>" class="btn btn-outline btn-success">list</a>
	</div>
</form>