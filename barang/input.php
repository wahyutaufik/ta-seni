<form action="simpan.php" method="POST" enctype="multipart/form-data">
	<div>
		<div>Kode Barang</div>
		<div><input type="text" name="kd_barang"></div>
	</div>
	<div>
		<div>Nama Barang</div>
		<div><input type="text" name="nm_barang"></div>
	</div>
	<div>
		<div>Kategori</div>
		<div>
			<select name="kategori" id="">
				<option value="1">a</option>
				<option value="2">s</option>
				<option value="3">d</option>
				<option value="4">f</option>
				<option value="5">g</option>
			</select>
		</div>
	</div>
	<div>
		<div>Harga</div>
		<div><input type="text" name="harga"></div>
	</div>
	<div>
		<div>Stok</div>
		<div><input type="text" name="stock"></div>
	</div>
	<div>
		<div>Keterangan</div>
		<div><textarea name="keterangan"></textarea></div>
	</div>
	<div>
		<div>Gambar</div>
		<div><input type="file" name="gambar"></div>
	</div>
	<div>
		<input type="submit">
	</div>
</form>