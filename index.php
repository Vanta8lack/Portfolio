<?
	ob_start();
	session_start();
	include 'config/config.php';
	$page = $_GET['page'];
	if($page){
		include 'page/'.$page.'.php';
	}else{
		include 'page/home.php';
	}
?>