<style>
	.contact_left {width: 100%;}
</style>
<!-- start top_bg -->
<div class="top_bg">
	<div class="wrap">
		<div class="main_top">
			<h2 class="style">Konfirmasi</h2>
		</div>
	</div>
</div>
<!-- start main -->
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<div class="contact">			
				<div class="contact_left">
				  	<div class="contact-form">
					    <form method="post" action="index.php?module=post-conf" enctype="multipart/form-data">
					    	<div>
						    	<span><label>NAMA</label></span>
						    	<span><input name="name" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>VIA BANK</label></span>
						    	<span><input name="via" type="text" class="textbox" required></span>
						    </div>
						    <div>
						     	<span><label>REKENING</label></span>
						    	<span><input name="rekening" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>INVOICE NO</label></span>
						    	<span><input name="invoice_no" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>JUMLAH TRANSFER</label></span>
						    	<span><input name="jumlah" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>BUKTI PEMBAYARAN</label></span>
						    	<span><input name="image" type="file" class="textbox" required></span>
						    	<span><input name="tanggal" type="hidden" class="textbox" required value="<?php echo date('Y-m-d') ?>"></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  	</div>
		</div>
	</div>
</div>