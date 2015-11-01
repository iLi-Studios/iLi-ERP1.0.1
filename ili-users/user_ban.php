<?php 
include"../ili-functions/functions.php";
autorisation('5'); 
function ban($id){
	$query="UPDATE users SET id_rank='1' WHERE id_user='$id' ;";
	if(query_execute("mysqli_fetch_object", $query)){return true;}
}
ban($_GET['id']);
redirect('ili-users/users');
?>