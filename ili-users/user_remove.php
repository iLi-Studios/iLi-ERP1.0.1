<?php include"../ili-functions/functions.php";?>
<?php 
autorisation('5'); 
//$query2 = "SELECT * FROM users, users_diploma, users_expirance, users_rank, users_skills WHERE users.id_user=users_diploma.id_user AND users.id_user=users_expirance.id_user AND users.id_user=users_rank.id_user AND users.id_user=users_skills.id_user AND users.id_user='$id';";

function user_remove($id){
	$query="DELETE FROM users WHERE id_user='$id';";
	if(query_execute("mysqli_fetch_object", $query)){return 1;}
}
if((user_remove($_GET['id']))==1){redirect('ili-users/users?message=7');}
else{redirect('ili-users/users?message=6');}
?>