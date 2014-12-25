<?php  
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
	header('Location:index.php?module=home&message=login');
}
?>
<div class="menu-navigator">
	<legend class="dashboard">Sites Administrator</legend>
	<div class="container">
		<div class="row">
			<div class="col-md-2" align="center">
				<a href="index.php?module=listAdmin">
					<img src="layout/images/security-icon.png" width="165px">
					<p class="dashboard">Admin</p>
				</a>
			</div>
			<div class="col-md-2" align="center">
				<a href="index.php?module=listSlider">
					<img src="layout/images/slider-icon.png" width="165px">
					<p class="dashboard">Slider</p>
				</a>
			</div>
			<div class="col-md-2" align="center">
				<a href="index.php?module=listTentang">
					<img src="layout/images/profile-icon.png" width="165px">
					<p class="dashboard">Tentang</p>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="menu-navigator">
	<legend class="dashboard">Toko</legend>
	<div class="container">
		<div class="row">
			<div class="col-md-2" align="center">
				<a href="index.php?module=listKategori">
					<img src="layout/images/file-cabinet-icon.png" width="165px">
					<p class="dashboard">Kategori</p>
				</a>
			</div>
			<div class="col-md-2" align="center">
				<a href="index.php?module=listOngkir">
					<img src="layout/images/truck-icon.png" width="165px">
					<p class="dashboard">Ongkos Kirim</p>
				</a>
			</div>
			<div class="col-md-2" align="center">
				<a href="index.php?module=listProduk">
					<img src="layout/images/price-tag-icon.png" width="165px">
					<p class="dashboard">Produk</p>
				</a>
			</div>
			<div class="col-md-2" align="center">
				<a href="index.php?module=listPesanan">
					<img src="layout/images/shopping-icon.png" width="165px">
					<p class="dashboard">Pemesanan</p>
				</a>
			</div>
			<div class="col-md-2" align="center">
				<a href="index.php?module=listKonfirmasi">
					<img src="layout/images/visa-icon.png" width="165px">
					<p class="dashboard">Konfirmasi</p>
				</a>
			</div>
		</div>
	</div>
</div>