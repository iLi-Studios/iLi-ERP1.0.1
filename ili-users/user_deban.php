<?php 
include"../ili-functions/functions.php";
autorisation('5'); 
function deban($id){
	$query="UPDATE users SET id_rank='2' WHERE id_user='$id' ;";
	query_execute_insert($query);
}
$id_user=$_GET['id'];
$user=get_user_info($id_user);
deban($id_user);
notif_all($id_user, '', '<a href="'.$site.'ili-users/user_profil?id='.$id_user.'">'.$user->nom.' '.$user->prenom.', a été débanni');
write_log("Utilisateur : <a href=\"ili-users/user_profil?id=".$id_user."\">".$id_user."</a> a été <strong>débanni</strong>");
redirect('ili-users/users');
?>