<?php 
require_once "slider.php"; 
$query = "SELECT* FROM produk ORDER BY created_time DESC LIMIT 3";
$result = mysql_query($query);
while ($data = mysql_fetch_assoc($result)) {
	$newer[] = $data;
}
?>
<!-- start image1_of_3 -->
<div class="top_bg">
	<div class="wrap">
		<div class="main1">
			<div class="image1_of_3">
				<img src="layout/images/img1.jpg" alt=""/>
			    <a href="details.html"><span class="tag">on sale</span></a>
			</div>
			<div class="image1_of_3">
				<img src="layout/images/img2.jpg" alt=""/>
				<a href="details.html"><span class="tag">special offers</span></a>
			</div>
			<div class="image1_of_3">
				<img src="layout/images/img3.jpg" alt=""/>
				<a href="details.html"><span class="tag">must have</span></a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!-- start main -->
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
						<a href="details.html">
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