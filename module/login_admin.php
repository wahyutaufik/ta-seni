<style>
	.btn{
		 padding: 0; 
	}
</style>
<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
			<h4 class="style">Administrator login</h4>
		</div>
	</div>
</div>
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<div class="login_left">
				<h3>Administrator</h3>
				<div class="registration">
					<div class="registration_left">
				 		<div class="registration_form">
							<form id="registration_form" action="index.php?module=cek_login_admin" method="POST">
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
									<input type="submit" value="log in" id="register-submit">
								</div>
								<!-- <div class="forget">
									<a href="#">forgot your password</a>
								</div> -->
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