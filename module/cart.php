<form action="index.php?module=updateCart" method="POST">
	<div class="panel panel-default">
	    <div class="panel-heading">
			<h3>Keranjang</h3>
	    </div>
	    <div class="panel-body">
		    <div class="table-responsive">
		        <table class="table table-striped table-bordered table-hover" width="100%">
		            <thead>
		                <tr>
		                	<th>No</th>
		                	<th>Foto Produk</th>
		                	<th>Nama Produk</th>
		                	<th>Jumlah</th>
		                	<th>Harga</th>
		                	<th>Aksi</th>
		                </tr>
	                </thead>
	                <tbody>
	                	<?php
							$sid = session_id();
							$no = 1;
							$sql = mysql_query("SELECT * FROM keranjang, produk WHERE id_session='$sid' AND keranjang.id_product=produk.id");
							$hitung = mysql_num_rows($sql);
							if ($hitung < 1){
								echo"<script>window.alert('Cart is Empty....');
										window.location=('index.php')</script>";
								}
							else {
								while($tian=mysql_fetch_assoc($sql)){
									$det[] = $tian;
								}
							}
						?>
						<?php foreach ($det as $key => $v): ?>
							<input type="hidden" name="id_product[]" value="<?php echo $v['id_product'] ?>">
							<?php $price = $v['price']*$v['qty']; ?>
		                	<tr>
		                		<td><?php echo $no++ ?></td>
		                		<td><img width="70" src="layout/images/produk/<?php echo $v['image'] ?>" alt=""></td>
		                		<td><?php echo $v['name'] ?></td>
		                		<td width="10%"><input type="number" class="form-control" name="qty[]" value="<?php echo $v['qty'] ?>"></td>
		                		<td><?php echo $price; ?></td>
		                		<td><a href="input.php?input=delete&id=<?php echo $v['id_keranjang']?>">Hapus</a></td>
		                	</tr>
						<?php endforeach ?>
	                </tbody>
	           	</table>
	           	<div align="right">
					<a class="btn btn-default" href="index.php">Belanja Lagi</a>
					<input type="submit" class="btn btn-primary" value="Update Keranjang">
					<a class="btn btn-success" href="index.php?module=order">Selesai</a>
	           	</div>
	       	</div>
		</div>
	</div>
</form>