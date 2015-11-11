<?php
$site="http://localhost/erp/";
// Declaration de session
if (!isset($_SESSION)){
	session_start();
	//duré de vie de la session 30min
	ini_set("session.lifetime",1800);
}

//global includes
include"config.php";
include"alert.php";
include"database.php";
function redirect($page){
	global $site;
	header("Location: ".$site.$page);
}	
function autorisation($id){
	if(!isset($_SESSION['user_id'])){redirect('login?message=1');}
	//revérifier
	else{if($_SESSION['user_id_rank']<$id){redirect('login?message=5');}
	}
}
function get_user_info($id){
	$query="SELECT * FROM users, users_rank WHERE users.id_user='$id' AND users.id_rank=users_rank.id_rank";
	if($o=(query_execute("mysqli_fetch_object", $query))){return $o;}
}
function user_privileges($bloc, $id_user){
	$query="SELECT * FROM `users_privileges` WHERE `id_user`='$id_user' AND `bloc`='$bloc';";
	$o = query_execute("mysqli_fetch_object", $query);
	return $o;
}
function write_log($operation){
	$now= date("d-m-Y H:i:s"); 
	$id_user=$_SESSION['user_id'];
	$query="INSERT INTO `system_log` (`id`, `id_user`, `date_operation`, `operation`) VALUES (NULL, '$id_user', '$now', '$operation'); ";
	query_execute_insert($query);
}
function diff_date($date){
		if(!ctype_digit($date))
			$date = strtotime($date);
		
		if(date('Ymd', $date) == date('Ymd')){
			$diff = time()-$date;
				
			if($diff < 60) /* moins de 60 secondes */
				echo 'Il y a '.$diff.' sec';
			
			else if($diff < 3600) /* moins d'une heure */
				echo 'Il y a '.round($diff/60, 0).' minutes';
			
			else if($diff < 43200) /* moins de 12 heures */
				echo 'Il y a '.round($diff/3600, 0).' heures' ;
			
			else /*  plus de 12 heures ont affiche ajourd'hui à HH:MM:SS */
				echo 'Aujourd\'hui à '.date('H:i:s', $date);
		}
		
			else if(date('Ymd', $date) == date('Ymd', strtotime('- 1 DAY')))
				echo 'Hier à '.date('H:i:s', $date);
			
			else if(date('Ymd', $date) == date('Ymd', strtotime('- 2 DAY')))
				echo 'Il y a 2 jours à '.date('H:i:s', $date);
				
			else if(date('Ymd', $date) == date('Ymd', strtotime('- 3 DAY')))
				echo 'Il y a 3 jours à '.date('H:i:s', $date);
				
			else if(date('Ymd', $date) == date('Ymd', strtotime('- 4 DAY')))
				echo 'Il y a 4 jours à '.date('H:i:s', $date);
				
			else if(date('Ymd', $date) == date('Ymd', strtotime('- 5 DAY')))
				echo 'Il y a 5 jours à '.date('H:i:s', $date);
			
			else if(date('Ymd', $date) == date('Ymd', strtotime('- 6 DAY')))
				echo 'Il y a 6 jours à '.date('H:i:s', $date);
			
			else
				echo 'Le '.date('d/m/Y à H:i:s', $date);
}
function notif($user, $notif){
	$date_notif = date("d-m-Y H:i:s");
	$query="INSERT INTO `system_notif` VALUES (NULL, '$user', '$notif', '$date_notif', '0');";
	query_execute_insert($query);
}
function notif_all($user_dont_notif1, $user_dont_notif2, $notif){
	$query_users = "SELECT id_user FROM users WHERE id_user<>'$user_dont_notif1' AND id_user<>'$user_dont_notif2' ";
	$result_users=query_excute_while($query_users);
	while ($o=mysqli_fetch_object($result_users)){notif($o->id_user, $notif);}
}
?>