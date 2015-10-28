<?php
include"functions.php";
// fonction deconexion
function logout(){
	if (isset($_SESSION["user_id"])){
		session_destroy();
		redirect("login?message=4");
	}
}

logout();
?>