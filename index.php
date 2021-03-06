<?php  
include 'config/koneksi.php';
require 'config/flash_info.php';
require 'config/auto_space.php';
require_once 'swiftmailer/lib/swift_required.php';
session_start();
$user   = array();
$module = array();
if (!empty($_SESSION['username'])) {
	$user = $_SESSION['username'];
}
if (!empty($_GET)) {
	$module = $_GET['module'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link type="image/x-icon" href="layout/images/favicon.ico" rel="Shortcut icon">
	<link href="layout/css/google.css" rel="stylesheet" type="text/css" media="all" />
	<link href="layout/css/menu.css" type="text/css" rel="stylesheet" />
	<link href="layout/css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="layout/css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="layout/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="layout/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="layout/css/dataTables.css" rel="stylesheet">
	<style>
		ul, ol { margin-top: 0; margin-bottom: 0; }
		label { display: block; }
		.container-fluid {margin-top: 20px;}
		.radio input[type=radio], .radio-inline input[type=radio], .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox] {
			position: inherit;
			margin-left: 0px;
		}
	</style>
	<title>Halimah Herbal Clininc <?php echo autoSpace(); ?></title>
</head>
<body>
<!-- header -->
<div class="top_bg">
	<div class="wrap">
		<div class="header">
			<div class="logo">
				<?php if ($user == "admin"): ?>
				<a href="index.php?module=dashboard"><img src="layout/images/logo_hhc.png" alt=""/></a>
				<?php else: ?>
				<a href="index.php?module=home"><img src="layout/images/logo_hhc.png" alt=""/></a>
				<?php endif ?>
			</div>
			 <div class="log_reg">
				<ul>
					<?php if (empty($user)): ?>
						<!-- <li><a href="index.php?module=login">Login</a> </li> -->
						<!-- <div class="clear"></div> -->
					<?php else: ?>
						<li><a href="index.php?module=logout">Logout</a> </li>								   
					<?php endif ?>
				</ul>
			</div>	
			<div class="web_search">
			 	<form method="GET">
					<input type="hidden" name="module" value="produk">
					<input name="q" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
					<input type="submit" value=" " />
				</form>
		    </div>						
			<div class="clear"></div>
		</div>	
	</div>
</div>
<div class="wrap">
	<div class="header_btm">
		<?php if ($user != 'admin'): ?>
			<div class="menu">
				<ul>
					<li <?php if ($module=='home'){echo "class='active'";} ?>>
						<a href="index.php?module=home">Home</a>
					</li>
					<li <?php if ($module=='produk'){echo "class='active'";} ?>>
						<a href="index.php?module=produk">produk</a>
					</li>
					<li <?php if ($module=='tentang'){echo "class='active'";} ?>>
						<a href="index.php?module=tentang">tentang</a>
					</li>
					<li <?php if ($module=='contact_us'){echo "class='active'";} ?>>
						<a href="index.php?module=contact_us">Contact</a>
					</li>
					<li <?php if ($module=='conf'){echo "class='active'";} ?>>
						<a href="index.php?module=conf">Konfirmasi</a>
					</li>
					<div class="clear"></div>
				</ul>
			</div>
			<div id="smart_nav">
				<a class="navicon" href="#menu-left"> </a>
			</div>
			<?php if ($module != "register"): ?>
			<nav id="menu-left">
				<ul>
					<li><a href="index.php?module=home">Home</a></li>
					<li><a href="index.php?module=produk">produk</a></li>
					<li><a href="index.php?module=tentang">tentang</a></li>
					<li><a href="index.php?module=contact_us">Contact</a></li>
					<li><a href="index.php?module=conf">Konfirmasi</a></li>
					<div class="clear"></div>
				</ul>
			</nav>
			<?php endif ?>
			<div class="header_right">
				<ul>
					<li><a href="index.php?module=cart"><?php include "cart_count.php" ?></a></li>
				</ul>
			</div>
			<div class="clear"></div>
		<?php else: ?>
			<div class="menu">
				<ul>
					<li <?php if ($module=='dashboard'){echo "class='active'";} ?>>
						<a href="index.php?module=dashboard">Dashboard</a>
					</li>
					<!-- <li <?php if ($module=='listPelanggan'||$module=='addPelanggan'||$module=='updatePelanggan'||$module=='deletePelanggan'||$module=='detailPelanggan'){echo "class='active'";} ?>>
						<a href="index.php?module=listPelanggan">pelanggan</a>
					</li> -->
					<li <?php if ($module=='listPesanan'||$module=='addPesanan'||$module=='updatePesanan'||$module=='deletePesanan'||$module=='detailPesanan'){echo "class='active'";} ?>>
						<a href="index.php?module=listPesanan">pesanan</a>
					</li>
					<li <?php if ($module=='listProduk'||$module=='addProduk'||$module=='updateProduk'||$module=='deleteProduk'||$module=='detailProduk'){echo "class='active'";} ?>>
						<a href="index.php?module=listProduk">produk</a>
					</li>
					<li <?php if ($module=='listKategori'||$module=='addKategori'||$module=='updateKategori'||$module=='deleteKategori'||$module=='detailKategori'){echo "class='active'";} ?>>
						<a href="index.php?module=listKategori">kategori</a>
					</li>
					<li <?php if ($module=='listAdmin'||$module=='addAdmin'||$module=='updateAdmin'||$module=='deleteAdmin'||$module=='detailAdmin'){echo "class='active'";} ?>>
						<a href="index.php?module=listAdmin">Admin</a>
					</li>
					<div class="clear"></div>
				</ul>
			</div>
			<div id="smart_nav">
				<a class="navicon" href="#menu-left"> </a>
			</div>
			<nav id="menu-left">
				<ul>
					<li><a href="index.php?module=dashboard">dashboard</a></li>
					<!-- <li><a href="index.php?module=listPelanggan">pelanggan</a></li> -->
					<li><a href="index.php?module=listPesanan">pesanan</a></li>
					<li><a href="index.php?module=listProduk">produk</a></li>
					<li><a href="index.php?module=listKategori">kategori</a></li>
					<li><a href="index.php?module=listAdmin">admin</a></li>
					<div class="clear"></div>
				</ul>
			</nav>
			<div class="header_right">

			</div>
			<div class="clear"></div>
		<?php endif ?>
	</div>
</div>
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<?php echo flash(); ?>
			<?php include 'page.php';?>
		</div>
	</div>
</div>
<div class="footer_bg">
	<div class="wrap">
		<div class="footer">
			<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
			<div class="f_nav1">
				<ul>
					<li><a href="index.php?module=home">home</a></li>
					<li><a href="index.php?module=contact_us">Contact us</a></li>
					<?php if (empty($user) && $user!='admin'): ?>
						<li><a href="index.php?module=login_admin">Administrator</a></li>
					<?php endif ?>
				</ul>
				</div>
			<div class="copy">
				<p class="link"><span>© copyright 2014&nbsp;| <a href="index.php">Halimah Herbal Clinic</a></span></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

<script type="text/javascript" src="layout/js/jquery.min.js"></script>
<script type="text/javascript" src="layout/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="layout/js/dataTables/jquery.dataTables.js"></script>
<script type="text/javascript" src="layout/js/dataTables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="layout/js/jquery.eislideshow.js"></script>
<script type="text/javascript" src="layout/js/easing.js"></script>
<script type="text/javascript" src="layout/js/move-top.js"></script>
<script type="text/javascript" src="layout/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    $(".alert").click(function() {
        $(this).addClass("hide");
    });

	$(function() {
		$('nav#menu-left').mmenu();
	});

    $(function() {
        $('#ei-slider').eislideshow({
			animation			: 'center',
			autoplay			: true,
			slideshow_interval	: 3000,
			titlesFactor		: 0
        });
    });
	
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
		});
	});

	$(document).ready(function() {
				
		var defaults = {
  			containerID: 'toTop', 
			containerHoverID: 'toTopHover', 
			scrollSpeed: 1200,
			easingType: 'linear' 
 		};
		
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});

	$(".alert-success").click(function() {
    	$(this).addClass("hide");
    });

    $(".alert-danger").click(function() {
    	$(this).addClass("hide");
    });

    $(".alert-info").click(function() {
    	$(this).addClass("hide");
    });
</script>
</body>
</html>