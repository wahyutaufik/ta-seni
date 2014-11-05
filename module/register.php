<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
			<h4 class="style">login or create an account</h4>
		</div>
	</div>
</div>
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<div class="login_left">
				<h3>login customers</h3>
				<p>if you have any account with us, please log in.</p>
				<div class="registration">
					<div class="registration_left">
				 		<div class="registration_form">
							<form id="registration_form" action="index.php?module=cek_login" method="post">
								<div>
									<label>
										<input placeholder="username" name="username" type="text" tabindex="3" required="">
									</label>
								</div>
								<div>
									<label>
										<input placeholder="password" name="password" type="password" tabindex="4" required="">
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
			<div class="login_left">
				<h3>register new customers</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping address, view and track your orders in your accoung and more.</p>
				<div class="registration_left">
				 	<div class="registration_form">
						<form id="registration_form" action="index.php?module=simpan_pelanggan" method="post">
							<div>
								<label>
									<input placeholder="username" name="username" type="text" tabindex="1" required="" autofocus="">
								</label>
							</div>
							<div>
								<label>
									<input placeholder="fullname" name="fullname" type="text" tabindex="2" required="" autofocus="">
								</label>
							</div>
							<div class="sky_form">
								<ul>
									<li><label class="radio left"><input type="radio" name="gender" value="1"><i>Male</i></label></li>
									<li><label class="radio"><input type="radio" name="gender" value="2"><i>Female</i></label></li>
								</ul>
							</div>
							<div>
								<label>
									<input placeholder="email address" name="email" type="email" tabindex="3" required="">
								</label>
							</div>
							<div>
								<label>
									<input placeholder="phone number" name="phone" type="text" tabindex="3" required="">
								</label>
							</div>
							<div>
								<label>
									<input placeholder="password" type="password" name="password" tabindex="4" required="">
								</label>
							</div>						
							<div>
								<label>
									<input placeholder="retype password" type="password" name="re-password" tabindex="4" required="">
								</label>
							</div>	
							<div>
								<input type="submit" value="create an account" id="register-submit">
							</div>
							<!-- <div class="sky_form">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i>i agree to <a class="terms" href="#"> terms of service</a> </i></label>
							</div> -->
						</form>
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


	// $('input[name="username"]').on('blur', function(evt){
 //        $.get( "<?php echo URL::site('user.json') ?>",{ username: $(this).val() } ).
 //        done(function(data){
 //        	if(data.entries != ''){
	//             var dataUser = data.entries[0]['username'];
 //        	}else{
 //        		alert('Username not found');
 //        	}

 //        });
 //    });

 //    $('#submit').on('click', function(evt){
 //    	if($('input[name="username"]').val() == ''){
 //    		alert('Username can not empty');
 //    		return false;
 //    	}

 //    	if($('input[name="password"]').val() == '' || $('input[name="re-password"]').val() == ''){
 //    		alert('Password / Retype Password can not empty');
 //    		return false;
 //    	}

 //    	if($('input[name="password"]').val() != $('input[name="re-password"]').val()){
 //    		alert('Password / Retype Password Not valid');
 //    		return false;
 //    	}
 //    });
</script>
<script type="text/javascript">
</script>