<?php

error_reporting(0);
$modul = $_GET['module'];
$modulecase = substr(strstr(strtolower(preg_replace('/\B([A-Z])/', ' $1', $modul)), " "), 1);
if (!isset($modul))$modul = 'home';
switch($modul)
{
	/*--module--*/
	case 'home'                       : include 'module/home.php'; break;
	case 'login'                      : include 'module/login.php'; break;
	case 'cek_login'                  : include 'module/cek_login.php'; break;
	case 'login_admin'                : include 'module/login_admin.php'; break;
	case 'logout'                     : include 'module/logout.php'; break;
	case 'cek_login'                  : include 'module/cek_login.php'; break;
	case 'cek_login_admin'            : include 'module/cek_login_admin.php'; break;
	case 'register'                   : include 'module/register.php'; break;
	case 'contact_us'                 : include 'module/contact.php'; break;
	case 'produk'                     : include 'module/products.php'; break;
	case 'tentang'                    : include 'module/about.php'; break;
	case 'dashboard'                  : include 'module/dashboard.php'; break;
	case 'list'.ucfirst($modulecase)  : include 'module/list.php'; break;
	case 'delete'.ucfirst($modulecase): include 'module/delete.php'; break;
	
	/*--config--*/
	case 'password'                   : include 'config/change_password.php'; break;
	case 'simpan'                     : include 'config/add.php'; break;
	case 'update'                     : include 'config/update.php'; break;
	case 'eraseFunction'              : include 'config/delete_function.php'; break;
	
	/*-----slider-----*/
	case 'addSlider'                  : include 'slider/add.php'; break;
	case 'detailSlider'               : include 'slider/detail.php'; break;
	case 'updateSlider'               : include 'slider/update.php'; break;

	/*-----produk-----*/
	case 'addProduk'                  : include 'produk/add.php'; break;
	case 'detailProduk'               : include 'produk/detail.php'; break;
	case 'updateProduk'               : include 'produk/update.php'; break;

}