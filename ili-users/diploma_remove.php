<?php 
include"../ili-functions/functions.php";
autorisation('2'); 
function remove($id){
	$query="DELETE FROM users_diploma WHERE id='$id';";
	if(query_execute("mysqli_fetch_object", $query)){return 1;}
}
remove($_GET['id_diploma']);
redirect('ili-users/user_edit?id='.$_GET['id_user']);
?>