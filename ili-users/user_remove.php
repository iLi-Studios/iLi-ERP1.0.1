<?php include"../ili-functions/functions.php";?>
<?php 
autorisation('5'); 
function user_remove($id){
	$query="DELETE FROM users WHERE id_user='$id';";
	if(query_execute("mysqli_fetch_object", $query)){return 1;}
}
user_remove($_GET['id']);
redirect('ili-users/users');

?>