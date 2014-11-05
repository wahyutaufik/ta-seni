<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM admin WHERE id='$id'");
$data = mysql_fetch_array($query);
$password = base64_decode($data['password']);
 
?>

<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
			<h4 class="style">update admin</h4>
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
					    	<span><label>USERNAME</label></span>
					    	<span><input name="username" type="text" value="<?php echo $data['username'] ?>"></span>
					    </div>
					    <div class="row-fluid">
					    	<span><label>PASSWORD</label></span>
					    	<span><input name="password" type="password" value="<?php echo $password; ?>"></span>
					    </div>
					    <div>
							<input type="submit" value="simpan" id="register-submit">
							<a href="index.php?module=admin_list" class="btn btn-warning">Batal</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>