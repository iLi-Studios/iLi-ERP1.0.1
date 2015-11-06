<?php include"../ili-functions/functions.php";?>
<?php 
autorisation('5'); 
function user_remove($id){
	$query="DELETE FROM users WHERE id_user='$id';";
	query_execute_insert($query);
}

$id=$_GET['id'];
user_remove($id);
write_log("Suppression de l\'utilisateur avec CIN=".$id);
redirect('ili-users/users');

?>