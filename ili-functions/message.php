<?php
// tirer le message depuis le lien sous la forme get si'il existe et l'affichier
function get_message($message){
	if(isset($_GET['message'])){
		message($_GET['message']);
	}
}

//alert notification
//$type "", "alert-success", "alert-info", "alert-error"  
function alert_notif($type, $message){
	echo'
		<div class="alert '.$type.'">
			<button class="close" data-dismiss="alert">×</button>
			'.$message.'
		</div>	
	';
}

function message($code){
	switch($code){
		case "1";
		alert_notif("", "Vous devez être connecté!");
		break;
		case "2";
		alert_notif("alert-error", "Combinaison incorrect!");
		break;
		case "3";
		alert_notif("alert-error", "Compte suspendue!");
		break;
		case "4";
		alert_notif("alert-success", "Vous êtes déconnecté");
		break;
		case "4";
		alert_notif("alert-error", "Vous pouvez pas voire cette page");
		break;
		case "5";
		alert_notif("alert-error", "ERREUR : Opération echoué!");
		break;
		}
	}
?>
