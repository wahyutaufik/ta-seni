<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM konfirmasi WHERE id='$id'");
$data = mysql_fetch_array($query);
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
    header('Location:index.php?module=home&message=login');
}
?>
<div class="row-fluid">
	<span><label>Nama : </label><label><?php echo $data['name'] ?></label></span><br>
</div>
<div class="row-fluid">
	<span><label>Via Bank : </label><label><?php echo $data['via'] ?></label></span><br>
</div>
<div class="row-fluid">
	<span><label>Rekening : </label><label><?php echo $data['rekening'] ?></label></span><br>
</div>
<div class="row-fluid">
	<span><label>Tanggal Konfirmasi : </label><label><?php echo $data['tanggal'] ?></label></span><br>
</div>
<div class="row-fluid">
	<span>
	<label>Bukti Pembayaran : </label>
	<img src="layout/images/konfirmasi/<?php echo $data['image']; ?>" width="200">
	</span><br>
</div>
<div>
	<a href="index.php?module=list<?php echo ucfirst($modulecase); ?>" class="btn btn-outline btn-success">List</a>
</div>
