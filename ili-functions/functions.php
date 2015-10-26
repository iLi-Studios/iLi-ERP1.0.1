<?php
// Declaration de session
if (!isset($_SESSION)){session_start();}

//global includes
include"config.php";
include"message.php";
include"database.php";

//fonction de rederection
function redirect($page){
	global $site;
	header("Location: ".$site.$page);
}
	
function autorisation2($min_id_rank_required){
	if(!isset($_SESSION['user'])){
		if(!isset($_SESSION['user'])){redirect("login?message=9");}
		else{if($min_id_rank_required>$_SESSION['id_rank']){redirect('index?message=10');}}
	}
}

// min id required to see this page
function autorisation($id){
	if(!isset($_SESSION['user'])){redirect('login?message=1');}
	else{if($_SESSION['id_rank']<$id){redirect('login?message=5');}
	}
}
	
// get user info
function user_get_info($user_id){
	$query="SELECT * FROM `users` WHERE `id_user`='$user_id'";
	if(query_execute("mysqli_fetch_object", $query) == true){
		$o=query_execute("mysqli_fetch_object", $query);
		return $o;
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