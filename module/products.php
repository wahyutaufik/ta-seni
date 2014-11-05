<?php  
$query = "SELECT * FROM produk";
$result = mysql_query($query);
while ($data = mysql_fetch_assoc($result)) {
	$datas[] = $data;
}
?>

<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
			<h2 class="style">produk kami</h2>
		</div>
	</div>
</div>
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<div class="grids_of_3">
				<?php if (empty($datas)): ?>
					<?php echo "Belum ada data" ?>
				<?php else: ?>
					<?php foreach ($datas as $key => $p): ?>
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