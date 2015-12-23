<?php 
include"../../ili-functions/functions.php"; 
autorisation('2');
autorisation_double_check_privilege('ARTICLE', 'D'); 
function art_remove($id){
	$query="DELETE FROM article WHERE code_art='$id';";
	query_execute_insert($query);
}
$id=$_GET['id'];
$art=get_art_info($id);
if($art==''){redirect('index?message=22');}
$user_nom=$_SESSION['user_nom'];
$user_prenom=$_SESSION['user_prenom'];
notif_all('', '', '<a href="#">'.$user_nom.' '.$user_prenom.' a supprimé l article, '.$art->designation_art);
write_log('Suppression de l article '.$art->code_art);
art_remove($id);
redirect('ili-modules/article/liste?type=');
?>