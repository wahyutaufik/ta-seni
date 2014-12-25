<?php 
require_once "config/tableHeader.php"; 
require_once "config/tableContent.php";
$url = substr(strstr(strtolower(preg_replace('/\B([A-Z])/', ' $1', $module)), " "), 1);
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
	header('Location:index.php?module=home&message=login');
} 
?>

<style type="text/css">
	.hide {display: none;}
</style>

<div class="panel panel-default">
    <div class="panel-heading">
		<a href="index.php?module=add<?php echo ucfirst($url); ?>" class="btn btn-primary <?php if($module == 'listTentang' || $module == 'listPelanggan' || $module == 'listPesanan' || $module == 'listPembayaran') {echo "hide";} ?>"><i class="fa fa-plus"></i> Tambah <?php echo ucfirst($url) ?></a>
    </div>
    <div class="panel-body">
	    <div class="table-responsive">
	        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	            <thead>
	                <tr>
	                    <?php foreach ($field as $key => $th): ?>
	                    <th><?php echo $th ?></th>
	                    <?php endforeach ?>
	                </tr>
	            </thead>
	            <tbody>
	            <?php foreach ($contents as $key => $content): ?>
	                <tr class="odd gradeX">
	                <?php  
	                	if (isset($content['content'])) {
	                		$content['content'] = '*detail';
	                	}
	                	
	                    if (isset($content['password'])) {
	                        $content['password'] = '*hidden';
	                    }

	                    if (isset($content['id_pemesan'])) {
	                        $content['id_pemesan'] = '*detail';
	                    }

	                    $id = $content['id'];
	                    unset($content['id']);
	                ?>
	                <?php foreach ($content as $key => $value): ?>
	                    <?php  
							$length = 3;
							$fills  = implode(' ', array_splice(explode(' ', $value),0, $length));
	                    ?>
	                    <td>
	                        <a class="sorting" href="index.php?module=detail<?php echo ucfirst($url); ?>&id=<?php echo $id?>"><?php echo $fills ?></a>
	                    </td>
	                <?php endforeach ?>
	                </tr>
	            <?php endforeach ?>
	            </tbody>
	        </table>
	    </div>
	</div>
</div>
