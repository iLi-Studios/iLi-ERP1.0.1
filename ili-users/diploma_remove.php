<?php 
include"../ili-functions/functions.php";
autorisation('2'); 
function remove($id){
	$query="DELETE FROM users_diploma WHERE id='$id';";
	if(query_execute("mysqli_fetch_object", $query)){return 1;}
}
remove($_GET['id_diploma']);
$id_user=$_GET['id_user'];
$diploma_name=$_GET['diploma_name'];
write_log("Suppression du diplôme : ".$diploma_name.", de l\'utilisateur : <a href=\"ili-users/user_profil?id=".$id_user."\">".$id_user."</a>");
redirect('ili-users/user_edit?id='.$_GET['id_user']);
?>