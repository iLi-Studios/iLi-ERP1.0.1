<?php include"../ili-functions/functions.php";?>
<?php 
autorisation('5'); 
//$query2 = "SELECT * FROM users, users_diploma, users_expirance, users_rank, users_skills WHERE users.id_user=users_diploma.id_user AND users.id_user=users_expirance.id_user AND users.id_user=users_rank.id_user AND users.id_user=users_skills.id_user AND users.id_user='$id';";

function ban($id){
	$query="UPDATE `ili_erp`.`users_rank` SET `id_rank` = '1' WHERE `users_rank`.`id_user` ='$id' ;";
	if(query_execute("mysqli_fetch_object", $query)){return true;}
}
if(ban($_GET['id'])){redirect('ili-users/users?message=7');}else{redirect('ili-users/users?message=6');}
?>