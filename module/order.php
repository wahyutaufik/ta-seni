<?php  
$sql = "SELECT * FROM ongkir";
$datas = mysql_query($sql);
while ($data = mysql_fetch_assoc($datas)) {
	$prov[] = $data;
}
?>
<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
			<h2 class="style">Form Pemesanan</h2>
		</div>
	</div>
</div>
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<form action="input.php?input=inputform" method="post">
				<div class="form-group">
					<label>Nama</label>
					<input class="form-control" type="text" name="name" required>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="text" name="email" required>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea class="form-control" name="address" cols="40" rows="7" required></textarea>
				</div>
				<div class="form-group">
					<label>Provinsi</label>
					<select name="provinsi" class="form-control" required>
						<option value="">Pilih Provinsi</option>
						<?php foreach ($prov as $k => $provinsi): ?>
							<option value="<?php echo $provinsi['id'] ?>"><?php echo $provinsi['provinsi'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label>No HP</label>
					<input class="form-control" type="number" name="telp" required>
				</div>
				<input type="submit" class="btn btn-success" value="Order">
			</form>
		</div>
	</div>
</div>
