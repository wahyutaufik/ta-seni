<?php  
$kategori = $_GET['kategori'];
$q        = $_GET['q'];
$query = "SELECT * FROM produk WHERE stok !=0";
if ($kategori) {
	$query = "SELECT * FROM produk WHERE category LIKE '%$kategori%' AND stok !=0";
}
if ($q) {
	$query = "SELECT * FROM produk WHERE name LIKE '%$q%' AND stok !=0";
}
$result = mysql_query($query);
while ($data = mysql_fetch_assoc($result)) {
	$datas[] = $data;
}
?>

<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
		<?php if ($kategori): ?>
			<h2 class="style"><?php echo $kategori ?></h2>
		<?php else: ?>
			<h2 class="style">produk kami</h2>
		<?php endif ?>
		</div>
	</div>
</div>
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<div align="right">
				<div class="btn-group">
					<button type="button" class="btn btn-default btn-large dropdown-toggle" data-toggle="dropdown">
						<strong>Pilih Kategori</strong>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php 
							$sql = "SELECT * FROM kategori";
							$i = mysql_query($sql);
							while ($j = mysql_fetch_assoc($i)) {
								$k[] = $j;
							}
						?>
							<li><a href="index.php?module=produk">All</a></li>
						<?php foreach ($k as $key => $v): ?>
							<li><a href="index.php?module=produk&kategori=<?php echo $v['value'] ?>"><?php echo $v['name'] ?></a></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
			<div class="grids_of_3">
				<?php if (empty($datas)): ?>
					<?php echo "Belum ada data" ?>
				<?php else: ?>
					<?php foreach ($datas as $key => $p): ?>
					<div class="grid1_of_3">
						<a href="index.php?module=detailsProduk&id=<?php echo $p['id'] ?>">
							<img height="260" width="186" src="layout/images/produk/<?php echo $p['image'] ?>" alt="">
							<h3><?php echo $p['name'] ?></h3>
							<span class="price">Rp <?php echo $p['price'] ?></span>
						</a>
					</div>
					<?php endforeach ?>
				<?php endif ?>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>