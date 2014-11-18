<?php  
$id = $_GET['id'];

$query = "SELECT* FROM produk WHERE id=$id";
$result = mysql_query($query);
while ($data = mysql_fetch_assoc($result)) {
	$pro[] = $data;
}
?>
<?php foreach ($pro as $k => $p): ?>
	<div class="top_bg">
		<div class="wrap">
			<div class="main_top">
				<h2 class="style"><?php echo $p['name'] ?></h2>
			</div>
		</div>
	</div>
	<div class="main_bg">
		<div class="wrap">
			<div class="main">
				<div class="row">
					<div class="col-md-4">
						<img width="300" src="layout/images/produk/<?php echo $p['image'] ?>">
					</div>
					<div class="col-md-8">
						<?php echo $p['description']; ?>
						<div>
							<a class="btn btn-success" href="javascript:history.back()">Kembali</a>
							<a class="btn btn-success" href="input.php?input=add&id=<?php echo $id; ?>">Order</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php endforeach ?>