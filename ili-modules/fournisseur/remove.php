<?php 
include"../../ili-functions/functions.php"; 
autorisation('2');
autorisation_double_check_privilege('FOURNISSEUR', 'D'); 
function frn_remove($id){
	$query="DELETE FROM fournisseur WHERE id_frn='$id';";
	query_execute_insert($query);
}
$id=$_GET['id'];
$frn=get_fournisseur_info($id);
if($frn==''){redirect('index?message=19');}
$user_nom=$_SESSION['user_nom'];
$user_prenom=$_SESSION['user_prenom'];
notif_all('', '', '<a href="#">'.$user_nom.' '.$user_prenom.' a supprimé le fournisseur, '.$frn->nom_frn);
write_log('Suppression de de fournisseur '.$frn->nom_frn);
frn_remove($id);
redirect('ili-modules/fournisseur/liste');
?>