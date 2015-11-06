<?php
// Declaration de session
if (!isset($_SESSION)){
	session_start();
	//duré de vie de la session 30min
	ini_set("session.lifetime",1800);
}

//global includes
include"config.php";
include"message.php";
include"database.php";

//fonction de rederection
function redirect($page){
	global $site;
	header("Location: ".$site.$page);
}	
// min id required to see this page
function autorisation($id){
	if(!isset($_SESSION['user_id'])){redirect('login?message=1');}
	//revérifier
	else{if($_SESSION['user_id_rank']<$id){redirect('login?message=5');}
	}
}

function user_privileges($bloc, $id_user){
	$query="SELECT * FROM `users_privileges` WHERE `id_user`='$id_user' AND `bloc`='$bloc';";
	$o = query_execute("mysqli_fetch_object", $query);
	return $o;
}
function write_log($operation){
	$now= date("m/d/y-H:i:s"); 
	$id_user=$_SESSION['user_id'];
	$query="INSERT INTO `system_log` (`id`, `id_user`, `date_operation`, `operation`) VALUES (NULL, '$id_user', '$now', '$operation'); ";
	query_execute_insert($query);
}
?>