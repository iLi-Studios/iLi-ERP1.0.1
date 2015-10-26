<?php
include"functions.php";
// fonction deconexion
function logout(){
	if (isset($_SESSION["user"])){
		session_destroy();
		redirect("login?message=4");
	}
}

logout();
?>