<?php  
include "../config/koneksi.php";
$sql ="SELECT * FROM barang WHERE kd_barang  LIKE '%$_GET[kd_barang]%' ";
$datas = mysql_query($sql);
while ($data = mysql_fetch_assoc($datas)) {
	$barang[] = $data;
}
?>
<?php foreach ($barang as $key => $list_barang): ?>
	<form action="update.php?kd_barang=<?php echo $list_barang['kd_barang'] ?>" method="POST" enctype="multipart/form-data">
		<div>
			<div>Kode Barang</div>
			<div><input type="text" name="kd_barang" value="<?php echo $list_barang['kd_barang'] ?>"></div>
		</div>
		<div>
			<div>Nama Barang</div>
			<div><input type="text" name="nm_barang" value="<?php echo $list_barang['nm_barang']; ?>"></div>
		</div>
		<div>
			<div>Kategori</div>
			<div>
				<select name="kategori" id="">
					<option value="1"<?php if ($list_barang['kd_kategori'] == 1) {
						echo "selected";
					} ?> >a</option>
					<option value="2"<?php if ($list_barang['kd_kategori'] == 2) {
						echo "selected";
					} ?> >s</option>
					<option value="3"<?php if ($list_barang['kd_kategori'] == 3) {
						echo "selected";
					} ?> >d</option>
					<option value="4"<?php if ($list_barang['kd_kategori'] == 4) {
						echo "selected";
					} ?> >f</option>
					<option value="5"<?php if ($list_barang['kd_kategori'] == 5) {
						echo "selected";
					} ?> >g</option>
				</select>
			</div>
		</div>
		<div>
			<div>Harga</div>
			<div><input type="text" name="harga" value="<?php echo $list_barang['harga_jual']; ?>"></div>
		</div>
		<div>
			<div>Stok</div>
			<div><input type="text" name="stock" value="<?php echo $list_barang['stok']; ?>"></div>
		</div>
		<div>
			<div>Keterangan</div>
			<div><textarea name="keterangan"><?php echo $list_barang['keterangan']; ?></textarea></div>
		</div>
		<div>
			<div>Gambar</div>
			<div><img src="../gambar/gambar_barang/<?php echo $list_barang['file_gambar'];?>" style="width:200px;"></div>
			<div><input type="file" name="gambar"></div>
		</div>
		<div>
			<input type="submit">
		</div>
	</form>
<?php endforeach ?>