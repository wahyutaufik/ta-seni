<?php  
require_once "config/koneksi.php";
$query = "SELECT * FROM slider";
$datas = mysql_query($query);
while ($data = mysql_fetch_assoc($datas)) {
	$slide[] = $data;
}
?>

<div class="slider">
	<div class="image-slider">
		 <div class="wrapper">
		    <div id="ei-slider" class="ei-slider">
			    <ul class="ei-slider-large">
			    <?php if (is_null($slide)): ?>
			    	<li>
			            <img src="layout/images/cover-bunda.jpg" alt="image06"/>
			        </li>
			    <?php else: ?>
				    <?php foreach ($slide as $k => $s): ?>
						<li>
				            <img src="layout/images/slider/<?php echo $s['image'] ?>" alt="image06"/>
				        </li>
				    <?php endforeach ?>
			    <?php endif ?>
			    </ul>
			    <ul class="ei-slider-thumbs">
		            <li class="ei-slider-element">Current</li>
				    <?php foreach ($slide as $k => $s): ?>
						<li><a href="#"></a></li>
				    <?php endforeach ?>
		        </ul>
		    </div>
		</div>
	</div>
</div>