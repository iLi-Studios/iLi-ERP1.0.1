<?php 
include"../../ili-functions/functions.php"; 
autorisation('3'); 
function clt_remove($id){
	$query="DELETE FROM client WHERE id_clt='$id';";
	query_execute_insert($query);
}
$id=$_GET['id'];
$clt=get_client_info($id);
$user_nom=$_SESSION['user_nom'];
$user_prenom=$_SESSION['user_prenom'];

notif_all('', '', '<a href="#">'.$user_nom.' '.$user_prenom.' a supprimé le client, '.$clt->nom_clt.' '.$clt->prenom_clt);
write_log('Suppression de de client '.$clt->nom_clt.' '.$clt->prenom_clt);
clt_remove($id);
redirect('ili-modules/client/liste');
?>