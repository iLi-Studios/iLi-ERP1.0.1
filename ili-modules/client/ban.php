<?php 
include"../../ili-functions/functions.php";
autorisation('2'); 
function ban($id, $raison, $banned_by){
	$query="UPDATE client 
				SET ban='1',
					banned_by='$banned_by',
					ban_raison='$raison'
			WHERE id_clt='$id' ;";
	query_execute_insert($query);
}
$id_clt=$_GET['id'];
$raison=$_GET['ban_raison'];
$id_user=$_SESSION['user_id'];
ban($id_clt, $raison, $id_user);
$clt=get_client_info($id_clt);
$usr=get_user_info($id_user);
notif_all('', '', '<a href="'.$site.'ili-modules/client/client?id='.$id_clt.'">'.$usr->nom.' '.$usr->prenom.', a banni le client '.$clt->nom_clt.' '.$clt->prenom_clt.'</a>');
write_log("Client : <a href=\"ili-modules/client/client?id=".$id_clt."\">".$id_clt."</a> a été <strong>banni</strong>");
redirect('ili-modules/client/client?id='.$id_clt);
?>