<?php 
include"../ili-functions/functions.php";
autorisation('5'); 
function ban($id){
	$query="UPDATE users SET id_rank='2' WHERE id_user='$id' ;";
	query_execute_insert($query);
}
$id_user=$_GET['id'];
ban($id_user);
write_log("Utilisateur : <a href=\"ili-users/user_profil?id=".$id_user."\">".$id_user."</a> a été débanni");
redirect('ili-users/users');
?>