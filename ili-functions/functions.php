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
function get_all_notification(){
	$id_user=$_SESSION['user_id'];
	$query="SELECT * FROM `system_notif` WHERE `id_user`='$id_user' ORDER BY id DESC LIMIT 30";
	$result=query_excute_while($query);
	while ($o=mysqli_fetch_object($result)){
		echo'
			<li> 
				'.$o->notification.' 
					<span class="small italic" style="margin-left:4%"><br>'?><?php diff_date($o->date_notif); echo'
						<br><br>
						<form action="" method="post" style="margin-bottom: -3%;margin-top: -10%;">
						</form>
					</span>
				</a>
			</li>				
		';
	}
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
function etat_msg($id, $id_rep){
	$nouv	 	= '<span class="label label label-success">Nouveau</span>';
	$lu			= '<span class="label label label-info">Lu</span>';
	$rep		= '<span class="label label label-warning">Répondu</span>';
	$id_user=$_SESSION['user_id'];
	$q="SELECT * FROM system_msg WHERE id='$id' AND user_reception='$id_user';";
	$q1="SELECT * FROM system_msg, system_msg_rep WHERE id='$id' AND id_rep='$id_rep' AND user_reception_rep='$id_user';";
	$q2="SELECT * FROM system_msg, system_msg_rep WHERE id='$id' AND id_rep='$id_rep' AND user_envoie_rep='$id_user';";
	if($id_rep!=''){$q=$q1;}
	$o=query_execute("mysqli_fetch_object", $q);
	if($o){
		if($id_rep==''){
			if(($o->vu=='0')&&($o->user_reception==$id_user)){echo $nouv;}
			if(($o->vu=='1')&&($o->user_reception==$id_user)){echo $lu;} 	
		}
		else{
			if(($o->vu_rep=='0')&&($o->user_reception_rep=$id_user)){echo $nouv;}
			if(($o->vu_rep=='1')&&($o->user_reception_rep=$id_user)){echo $lu;}
		}
	}
	else{
		$o2=query_execute("mysqli_fetch_object", $q2);
		if($o2){echo $rep;}
	}
}
function get_all_msg(){
	$id_user=$_SESSION['user_id'];
	$q1="SELECT * FROM system_msg
			WHERE
			(user_envoie='$id_user' OR user_reception='$id_user')
			ORDER BY id DESC;";
	$q2="SELECT * FROM system_msg, system_msg_rep
			WHERE
			(system_msg.user_envoie='$id_user' OR system_msg.user_reception='$id_user')
			AND 
			system_msg_rep.id_msg=system_msg.id
			AND
			(system_msg_rep.user_reception_rep='$id_user' OR system_msg_rep.user_envoie_rep)
			AND
			id_rep=(SELECT MAX(id_rep) FROM system_msg_rep)
			ORDER BY id_rep DESC;";
	
	$o1=query_execute("mysqli_num_rows", $q2);
	if($o1=='1'){$q=$q2;}else{$q=$q1;$id_rep='';}
	$r=query_excute_while($q);
	while ($o=mysqli_fetch_object($r)){
		$info_user=get_user_info($o->user_envoie);
		if($q==$q2){$id_rep=$o->id_rep;}
			echo'
			<tr>
				<th style="width:1%;"><input type="checkbox"></th>
				<th style="width:20%"> <a href="ili-users/user_profil?id='.$o->user_envoie.'">'.$info_user->nom.' '.$info_user->prenom.'</a> </td>
				<th class="hidden-phone" style="width:55%"><strong> <a href="ili-messages/read?id='.$o->id.'&id2='.$id_rep.'">'.$o->subject.'</a> </strong></td>
				<th class="right-align-text hidden-phone" style="width:12%">';?><?php etat_msg($o->id, $id_rep);?><?php echo' </td>
				<th class="right-align-text hidden-phone" style="width:12%"> ';?><?php diff_date($o->date_msg);?><?php echo'</td>
			</tr>
			';
	}
}
?>