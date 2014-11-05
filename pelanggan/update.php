<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM pelanggan WHERE kd_pelanggan='$id'");
$data = mysql_fetch_array($query);

foreach ($data as $key => $value) {
	if(is_numeric($key)){
		unset($data[$key]);
	}
}
$password = base64_decode($data['password']);
 
?>
<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
			<h4 class="style">update pelanggan</h4>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="login">
		<div class="registration">
			<div class="registration_left">
		 		<div class="registration_form">
					<form action="index.php?module=update_pelanggan&id=<?php echo $id ?>" method="POST">
						<div class="row-fluid">
					    	<span><label>KODE</label></span>
					    	<span><input name="kode" type="text" value="<?php echo $data['kd_pelanggan'] ?>"></span>
					    </div>
					    <div class="row-fluid">
					    	<span><label>USERNAME</label></span>
					    	<span><input name="username" type="text" value="<?php echo $data['username']; ?>"></span>
					    </div>
					    <div class="row-fluid">
					    	<span><label>PASSWORD</label></span>
					    	<span><input name="password" type="password" value="<?php echo $password; ?>"></span>
					    </div>
					    <div class="row-fluid">
					    	<span><label>NAMA LENGKAP</label></span>
					    	<span><input name="pelanggan" type="text" value="<?php echo $data['nm_pelanggan']; ?>"></span>
					    </div>
					    <div class="row-fluid">
					    	<span><label>Kelamin</label></span>
					    	<span>
					    		<input type="radio" name="kelamin" value="1" <?php if($data['kelamin'] == 1){echo "checked";} ?>> Laki Laki
					    		<input type="radio" name="kelamin" value="2" <?php if($data['kelamin'] == 2){echo "checked";} ?>> Perempuan
				    		</span>
					    </div>
					    <div class="row-fluid">
					    	<span><label>EMAIL</label></span>
					    	<span><input name="email" type="text" value="<?php echo $data['email']; ?>"></span>
					    </div>
					    <div class="row-fluid">
					    	<span><label>TELEPON</label></span>
					    	<span><input name="phone" type="text" value="<?php echo $data['no_tlp']; ?>"></span>
					    </div>
					    <div>
							<input type="submit" value="simpan" id="register-submit">
							<a href="index.php?module=pelanggan_list" class="btn btn-warning">Batal</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
