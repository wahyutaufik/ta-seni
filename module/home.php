<?php 
require_once "slider.php"; 
$query = "SELECT* FROM produk WHERE stok !=0 ORDER BY created_time ASC LIMIT 3";
$result = mysql_query($query);
while ($data = mysql_fetch_assoc($result)) {
	$newer[] = $data;
}
?>
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<div class="top_main">
				<h2>Produk Terbaru</h2>
				<a href="index.php?module=produk">show all</a>
				<div class="clear"></div>
			</div>
			<div class="grids_of_3">
				<?php if (empty($newer)): ?>
					<?php echo "Belum ada data" ?>
				<?php else: ?>
					<?php foreach ($newer as $key => $p): ?>
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