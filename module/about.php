<?php  
$tentang = "SELECT * FROM tentang WHERE id = 1";
$tent = mysql_query($tentang);
while ($tnta = mysql_fetch_assoc($tent)) {
	$tentan[] = $tnta;
}
?>
<?php foreach ($tentan as $k => $t): ?>
	<div class="top_bg">
		<div class="wrap">
			<div class="main_top">
				<h2 class="style">tentang kami</h2>
			</div>
		</div>
	</div>
	
	<div class="main_bg">
		<div class="wrap">
			<div class="main">
				<div class="about">
					<div class="cont-grid-img img_style">
			     		<img style="width:288px; height:201px;" src="layout/images/about_pic.jpg" alt="">
			     	</div>
			       	<div class="cont-grid">
					    <h4><?php echo $t['judul'] ?></h4>
			      	</div>
			      	<div class="clear"></div>
			    	<div class="about-p">
				    	<p class="para">
				    		<?php echo $t['isi'] ?>
				    	</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach ?>