<?php  
$sid = session_id();
$pesan = "SELECT * FROM pesanan WHERE id_pemesan LIKE '$sid' GROUP BY id_pemesan";
$pesanan = mysql_query($pesan);
while ($pes = mysql_fetch_assoc($pesanan)) {
	$pesa[] = $pes;
}

?>
<style type="text/css">
	
	@media print {
		.top_bg { display: none; }
		.header_btm { display: none; }
		#print { display: none; }
		.footer_bg { display: none; }
	}

</style>
<?php foreach ($pesa as $key => $pesana): ?>
<h1 style="font-size:20px; font-weight:bold;">INVOICE #<?php echo $pesana['invoice_no'] ?></h1>
<br>
<table width="100%" border="1">
	<thead>
		<tr>
			<th colspan="2" style="font-weight:bold;"><h3>Order Detail</h3></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width="50%">
				<h3>Halimah Herbal Clinic</h3> <br>
				Jl. Kedamaian <br>
				Telepon 9999999
			</td>
			<td width="50%">
				<h3>Date Added : <?php echo $pesana['tanggal'] ?></h3> <br>
				<h3>Invoice No : <?php echo $pesana['invoice_no'] ?></h3> <br>
				<h3>Order ID : <?php echo $pesana['id'] ?></h3> <br>
				<h3>Pembayaran : <?php echo $pesana['id'] ?></h3> <br>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="border:1; border-top: 1px solid #000;"><hr/></td>
		</tr>
		<tr>
			<td style="font-weight:bold;">Kepada</td>
		</tr>
		<tr>
			<td>
				<?php echo $pesana['name']; ?><br>
				-<br>
				<?php echo $pesana['address']; ?><br>
				<?php echo $pesana['phone'] ?>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="border:1; border-top: 1px solid #000;"><hr/></td>
		</tr>
	</tbody>
</table>
<table width="100%">
	<thead>
		<tr>
			<td>Produk</td>
			<td>Jumlah Beli</td>
			<td>Harga Satuan</td>
			<td>Total</td>
		</tr>
	</thead>
	<tbody>
		<?php 
			$pesan2 = "SELECT * FROM pesanan WHERE id_pemesan LIKE '$sid'";
			$pesanan2 = mysql_query($pesan2);
			while ($pes2 = mysql_fetch_assoc($pesanan2)) {
				$pesa2[] = $pes2;
			}
		?>
		<?php foreach ($pesa2 as $key => $pesana2): ?>
			<?php 
				$prod = "SELECT * FROM produk WHERE id = $pesana2[id_product]";
				$xxx = mysql_query($prod);
				while ($prods = mysql_fetch_assoc($xxx)) {
					$produ[] = $prods;
				}
			?>
		<tr>
			<td><?php echo $produ[$key]['name'] ?></td>
			<td><?php echo $pesana2['jumlah'] ?></td>
			<td><?php echo 'Rp '.$produ[$key]['price'] ?></td>
			<td><?php echo 'Rp '.$produ[$key]['price']*$pesana2['jumlah'] ?></td>
		</tr>
		<?php $total += $produ[$key]['price']*$pesana2['jumlah']; ?> 
		<?php endforeach ?>
		<tr>
			<td colspan="3" style="font-weight:bold; text-align:right;">Total&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td colspan="3" style="font-weight:bold; "><?php echo 'Rp '.$total ?></td>
		</tr>
	</tbody>
</table>
<?php endforeach ?>
<!-- <a href="" class="btn btn-primary">Simpan Invoice</a> -->
<a id="print" class="btn btn-small btn-primary" href="" title="Print">
    <span class="fa fa-print"> Print</span>
</a>

<script type="text/javascript">
	$('a#print').on('click', function(evt) {
        evt.preventDefault();
        evt.stopImmediatePropagation();
        window.print();
    });
</script>