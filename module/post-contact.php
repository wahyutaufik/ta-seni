<?php  
if ($_POST) {
	$html = 'Hai Admin,'."\n\n".'Ada pertanyaan dari:'."\n".'Nama :'.$_POST['userName']."\n".'Email :'.$_POST['userEmail']."\n".'Pertanyaan :'.$_POST['userMsg']."\n\n".'Harap dibalas ke email yang tertera'."\n".'Terima Kasih';
    $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
        ->setUsername('clinic.halimahherbal@gmail.com')
        ->setPassword('halimahclinic');

    $mailer = \Swift_Mailer::newInstance($transport);
    $message = \Swift_Message::newInstance('Contact Us')
        ->setFrom(array($_POST['userEmail']))
        ->setTo('clinic.halimahherbal@gmail.com')
        ->setBody($html);
        
    $send = $mailer->send($message);
    if ($send) {
    	echo "<script>alert('Email Berhasil dikirim')</script>";
    	echo "<script>window.location.href='index.php?module=contact_us'</script>";
    } else {
    	echo "<script>alert('Email Gagal dikirim')</script>";
    }
}
?>