<div class="panel panel-default">
    <div class="panel-heading">
		<h3>Keranjang</h3>
    </div>
    <div class="panel-body">
	    <div class="table-responsive">
	        <table class="table table-striped table-bordered table-hover">
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
								// echo"<tr><td>$no</td>
								// 	<td><img width=50 src=foto/$tian[image]></td>
								// 	<td>$tian[product_name]</td>
								// 	<td>$tian[qty]</td>
								// 	<td>$tian[price]</td>
								// 	<td><a href=input.php?input=delete&id=$tian[id_keranjang]>Hapus</a></td></tr>";
							}
						}
					?>
					<?php foreach ($det as $key => $v): ?>
						<?php $price = $v['price']*$v['qty']; ?>
	                	<tr>
	                		<td><?php echo $no++ ?></td>
	                		<td><img width="70" src="layout/images/produk/<?php echo $v['image'] ?>" alt=""></td>
	                		<td><?php echo $v['name'] ?></td>
	                		<td><?php echo $v['qty'] ?></td>
	                		<td><?php echo $price; ?></td>
	                		<td><a href="input.php?input=delete&id=<?php echo $v['id_keranjang']?>">Hapus</a></td>
	                	</tr>
					<?php endforeach ?>
                </tbody>
           	</table>
           	<div align="right">
				<a class="btn btn-default" href="index.php">Belanja Lagi..</a>
				<a class="btn btn-success" href="index.php?module=order">Selesai</a>
           	</div>
       	</div>
	</div>
</div>