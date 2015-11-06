<?php 
include"../ili-functions/functions.php";
autorisation('2'); 
function remove($id){
	$query="DELETE FROM users_skills WHERE id='$id';";
	query_execute_insert($query);
}
$id_skills=$_GET['id_skills'];
$skills_name=$_GET['skills_name'];
$id_user=$_GET['id_user'];
remove($id_skills);
write_log("Suppression du compétence : ".$skills_name." de l\'utilisateur : <a href=\"ili-users/user_profil?id=".$id_user."\">".$id_user."</a>");
redirect('ili-users/user_edit?id='.$id_user);
?>