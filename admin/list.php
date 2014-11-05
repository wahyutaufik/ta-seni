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
						<h4 class="style">list admin</h4>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<a href="index.php?module=tambah_admin" class="btn btn-success"><span class="fa fa-plus"></span> Tambah Admin</a>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th width="20%">Username</th>
								<th width="66%">Password</th>
								<th width="14%" colspan="2" style="text-align:center;">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
						        $query = mysql_query("SELECT * FROM admin");

						        while ($data = mysql_fetch_array($query)) {
						            $id      = $data['id'];
					            ?>
						            <tr>
										<td><a href="index.php?module=detail_admin&id=<?php echo $id ?>"><?php echo $data['username'] ?></a></td>
										<td><a href="index.php?module=detail_admin&id=<?php echo $id ?>">******</a></td>
										<td width="7%" align="right"><a href="index.php?module=edit_admin&id=<?php echo $id ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a></td>
										<td width="7%" align="right"><a href="index.php?module=hapus_admin&id=<?php echo $id ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Hapus</a></td>
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