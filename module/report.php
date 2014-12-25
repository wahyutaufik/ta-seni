<?php  
require_once "config/tableHeader.php"; 
require_once "config/tableContent.php";
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
	header('Location:index.php?module=home&message=login');
} 
$url = ucfirst(substr(strstr(strtolower(preg_replace('/\B([A-Z])/', ' $1', $module)), " "), 1));
?>
<style>
	.main_bg{background: #FFF}
	.top_bg {display:none;}
	.header_btm {display:none;}
	.footer_bg {display:none;}
	.wrap{width: 100%}
	@media print {
		#print { display: none; }
		#back { display: none; }
	}
</style>
<div align="center">
	<u><h1>Laporan Data <?php echo $url ?></h1></u>
	<h3>Halimah Herbal Clinic</h3>
</div>
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered">
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
                        <?php echo $fills ?>
                    </td>
                <?php endforeach ?>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<a id="print" class="btn btn-small btn-primary" href="" title="Print">
    <span class="fa fa-print"> Print</span>
</a>
<a id="back" class="btn btn-small btn-success" href="index.php?module=list<?php echo $url ?>" title="Print">
    <span class="fa fa-list"> Kembali</span>
</a>

<script type="text/javascript">
	$('a#print').on('click', function(evt) {
        evt.preventDefault();
        evt.stopImmediatePropagation();
        window.print();
    });
</script>