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
	else{if($_SESSION['user_id_rank']<$id){redirect('login?message=5');}
	}
}

// upload into database

function db_upload($id, $file){
	$message=false;
	if($file['error'] == 0) {
		// Gather all required data
		$name = $dbLink->real_escape_string($file['name']);
		$mime = $dbLink->real_escape_string($file['type']);
		$data = $dbLink->real_escape_string(file_get_contents($file['tmp_name']));
		$size = intval($file['size']);	
		
		$query = "INSERT INTO `file` 	
		(`id`, `name`, `mime`, `size`, `data`, `created`) VALUES 
		('{$id}', '{$name}', '{$mime}', {$size}, '{$data}', NOW() )";
		
		// Execute the query
		$result=query_execute_insert($query);
		if($result==0){$message=='11';}
	}
	return $message;
}
?>