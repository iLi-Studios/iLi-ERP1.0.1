<?php 
include"../../ili-functions/functions.php";
autorisation('2'); 
autorisation_double_check_privilege('CLIENTS', 'U');
function deban($id){
	$query="UPDATE client 
				SET 
					ban='0',
					banned_by=NULL,
					ban_raison=''				 
			WHERE id_clt='$id' ;";
	query_execute_insert($query);
}
$id_clt=$_GET['id'];
deban($id_clt);
$clt=get_client_info($id_clt);
$id_user=$_SESSION['user_id'];
$usr=get_user_info($id_user);
notif_all('', '', '<a href="'.$site.'ili-modules/client/client?id='.$id_clt.'">'.$usr->nom.' '.$usr->prenom.', a débanni le client '.$clt->nom_clt.' '.$clt->prenom_clt.'</a>');
write_log("Client : <a href=\"ili-modules/client/client?id=".$id_clt."\">".$id_clt."</a> a été <strong>débanni</strong>");
redirect('ili-modules/client/liste');
?>