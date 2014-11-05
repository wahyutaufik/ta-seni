<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM admin WHERE id='$id'");
$data = mysql_fetch_array($query);
$password = base64_decode($data['password']);
 
?>

<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
			<h4 class="style">detail admin</h4>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="login">
		<div class="registration">
			<div class="registration_left">
		 		<div class="registration_form">
					<form action="index.php?module=update_admin&id=<?php echo $id ?>" method="POST">
						<div class="row-fluid">
					    	<span><label>USERNAME : </label><label><?php echo $data['username'] ?></label></span>
					    </div>
					    <div class="row-fluid">
					    	<span><label>PASSWORD : </label><label><?php echo $password ?></label></span>
					    </div>
					    <div>
							<a href="index.php?module=admin_list" class="btn btn-primary">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>