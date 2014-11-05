<?php  

$datas    = implode("','", $_POST);
$data     = explode("','", $datas, -2);
$data     = implode("','", $data);

$password = base64_encode($_POST['password']);
$date     = date('Y-m-d');

function NewGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) ;
    return $guidText;
}

$Guid  = NewGuid();

$query ="INSERT INTO `pelanggan`(`kd_pelanggan`, `username`, `nm_pelanggan`, `kelamin`, `email`, `no_tlp`, `password`, `tgl_daftar`)
		 VALUES ('$Guid','$data','$password','$date')";
mysql_query($query);
mysql_close();
header("Location:index.php?module=home&message=registered");