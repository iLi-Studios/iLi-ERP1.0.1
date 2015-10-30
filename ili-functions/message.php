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
		case "5";
		alert_notif("alert-error", "Vous pouvez pas voire cette page");
		break;
		case "6";
		alert_notif("alert-error", "ERREUR : Opération echoué!");
		break;
		case "7";
		alert_notif("alert-success", "OK : Opération effectuer avec succée!");
		break;
		case "8";
		alert_notif("alert-error", "ERREUR : Un utilisateur avec cette <strong>CIN</strong> exisite dans la base de données");
		break;
		case "9";
		alert_notif("alert-error", "ERREUR : Un utilisateur avec cette <strong>EMAIL</strong> exisite dans la base de données");
		break;
		case "10";
		alert_notif("alert-error", "ERREUR : Le mot de passe actuel saisi est incorrect");
		break;
		case "11";
		alert_notif("alert-error", "ERREUR : les deux nouveaux mots de passe sont incohérent");
		break;
		case "12";
		alert_notif("alert-success", "OK : Votre mot de passe a été changé avec succès!");
		break;
		}
	}
?>
