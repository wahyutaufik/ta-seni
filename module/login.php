<style>
	.btn{
		 padding: 0; 
	}
</style>
<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
			<h4 class="style">login atau buat akun</h4>
		</div>
	</div>
</div>
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<div class="login_left">
				<h3>pelanggan baru</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping address, view and track your orders in your accoung and more.</p>
				<div class="btn">
					<form>
						<input type="button" onclick="location.href='index.php?module=register';" value="create an account" />
					</form>
				</div>
			</div>
			<div class="login_left">
				<h3>pelanggan terdaftar</h3>
				<p>silahkan masuk.</p>
				<div class="registration">
					<div class="registration_left">
				 		<div class="registration_form">
							<form id="registration_form" action="index.php?module=cek_login" method="POST">
								<div>
									<label>
										<input placeholder="username" type="text" name="username" required="">
									</label>
								</div>
								<div>
									<label>
										<input placeholder="password" type="password" name="password" required="">
									</label>
								</div>						
								<div>
									<input type="submit" value="sign in" id="register-submit">
								</div>
								<div class="forget">
									<a href="#">forgot your password</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

<script>
	(function() {

	// Create input element for testing
	var inputs = document.createElement('input');
	
	// Create the supports object
	var supports = {};
	
	supports.autofocus   = 'autofocus' in inputs;
	supports.required    = 'required' in inputs;
	supports.placeholder = 'placeholder' in inputs;

	// Fallback for autofocus attribute
	if(!supports.autofocus) {
		
	}
	
	// Fallback for required attribute
	if(!supports.required) {
		
	}

	// Fallback for placeholder attribute
	if(!supports.placeholder) {
		
	}
	
	// Change text inside send button on submit
	var send = document.getElementById('register-submit');
	if(send) {
		send.onclick = function () {
			this.innerHTML = '...Sending';
		}
	}

})();
</script>