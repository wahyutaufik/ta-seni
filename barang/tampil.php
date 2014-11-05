<?php  
include "../config/koneksi.php";
$sql ="SELECT * FROM barang";
$datas = mysql_query($sql);
while ($data = mysql_fetch_assoc($datas)) {
	$barang[] = $data;
}
?>
<table class="table" border="1">
	<thead>
		<tr>
			<th>Kode Barang</th>
			<th>Kategori</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Keterangan</th>
			<th>Gambar</th>
			<th>Stok</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($barang as $key => $list_barang): ?>
		<tr>
			<td><?php echo $list_barang['kd_barang']; ?></td>
			<td><?php echo $list_barang['kd_kategori']; ?></td>
			<td><?php echo $list_barang['nm_barang']; ?></td>
			<td><?php echo $list_barang['harga_jual']; ?></td>
			<td><?php echo $list_barang['keterangan']; ?></td>
			<td>
				<img src="../gambar/gambar_barang/<?php echo $list_barang['file_gambar'];?>" style="width:200px;">
			</td>
			<td><?php echo $list_barang['stok']; ?></td>
			<td><a href="edit.php?kd_barang=<?php echo $list_barang['kd_barang'] ?>">Edit</a></td>
			<td><a href="hapus.php?kd_barang=<?php echo $list_barang['kd_barang'] ?>">Hapus</a></td>
		</tr>
		<?php endforeach ?>
		<tr>
			<td colspan="9"><a href="input.php">Tambah Lagi</a></td>
		</tr>
	</tbody>
</table>