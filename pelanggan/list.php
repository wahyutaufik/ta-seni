<style>
	th{
		font-weight: bold;
	}
</style>
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<div class="top_bg">
				<div class="wrap">
					<div class="main_top">
						<h4 class="style">list pelanggan</h4>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<!-- <a href="index.php?module=tambah_pelanggan" class="btn btn-success"><span class="fa fa-plus"></span> Tambah pelanggan</a> -->
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Kode</th>
								<th>username</th>
								<th>password</th>
								<th>nama lengkap</th>
								<th>kelamin</th>
								<th>email</th>
								<th>no. telp</th>
								<th>tgl. daftar</th>
								<th width="14%" colspan="2" style="text-align:center;">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
						        $query = mysql_query("SELECT * FROM pelanggan");

						        while ($data = mysql_fetch_array($query)) {
						            $id = $data['kd_pelanggan'];
						            foreach ($data as $key => $value) {
										if(is_numeric($key)){
											unset($data[$key]);
										}
									}
					            ?>
						            <tr>
										<td><a href="index.php?module=detail_pelanggan&id=<?php echo $id ?>"><?php echo $data['kd_pelanggan'] ?></a></td>
										<td><a href="index.php?module=detail_pelanggan&id=<?php echo $id ?>"><?php echo $data['username'] ?></a></td>
										<td><a href="index.php?module=detail_pelanggan&id=<?php echo $id ?>">******</a></td>
										<td><a href="index.php?module=detail_pelanggan&id=<?php echo $id ?>"><?php echo $data['nm_pelanggan'] ?></a></td>
										<td><a href="index.php?module=detail_pelanggan&id=<?php echo $id ?>">
											<?php if ($data['kelamin'] == 1) {
												echo "Laki-laki";
											} else{echo "Perempuan";} ?>
										</a></td>
										<td><a href="index.php?module=detail_pelanggan&id=<?php echo $id ?>"><?php echo $data['email'] ?></a></td>
										<td><a href="index.php?module=detail_pelanggan&id=<?php echo $id ?>"><?php echo $data['no_tlp'] ?></a></td>
										<td><a href="index.php?module=detail_pelanggan&id=<?php echo $id ?>"><?php echo $data['tgl_daftar'] ?></a></td>
										<td width="7%" align="right"><a href="index.php?module=edit_pelanggan&id=<?php echo $id ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a></td>
										<td width="7%" align="right"><a href="index.php?module=hapus_pelanggan&id=<?php echo $id ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Hapus</a></td>
						            </tr>
					            <?php
						        }
						        ?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>