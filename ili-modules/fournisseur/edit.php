<?php 
include"../../ili-functions/functions.php";
autorisation('2');
autorisation_double_check_privilege('FOURNISSEURS', 'U');
if(isset($_GET['mf'])){$id_frn=get_id_frn_from_mf($_GET['mf']);}else{$id_frn=$_GET['id'];}
$frn=get_fournisseur_info($id_frn);
if($frn==''){redirect('index?message=19');}
$createur=get_user_info($frn->created_by);
function mod_frn($id_frn, $nom_frn, $activite_frn, $mf, $rc, $tel1, $tel2, $fax, $site_web, $email, $adresse){
	global $site;
	$user_nom=$_SESSION['user_nom'];
	$user_prenom=$_SESSION['user_prenom'];
	$q="UPDATE fournisseur SET 
	`mf_frn` 			= '$mf', 
	`rc_frn` 			= '$rc',
	`nom_frn` 			= '$nom_frn',
	`activite_frn` 		= '$activite_frn',
	`adresse_frn`		= '$adresse',
	`tel_frn` 			= '$tel1',
	`tel2_frn` 			= '$tel2',
	`fax_frn` 			= '$fax',
	`site_frn`			= 'site_web',
	`email_frn`			= '$email'
	WHERE `fournisseur`.`id_frn` = '$id_frn';";
	query_execute("mysqli_fetch_object", $q);
	notif_all('', '', '<a href="'.$site.'ili-modules/fournisseur/fournisseur?id='.$id_frn.'">'.$user_nom.' '.$user_prenom.' a modifié le fournisseur, '.$nom_frn);
	write_log("Modification de fournisseur : <a href=\"ili-modules/fournisseur/fournisseur?id=".$id_frn."\">".$nom_frn."</a>");
	redirect('ili-modules/fournisseur/fournisseur?id='.$id_frn);
}
if( (isset($_POST['nom_frn'])) ){
	
	if(isset($_POST['nom_frn']))			{$nom_frn		=addslashes($_POST['nom_frn']);} 		else{$nom_frn='';}
	if(isset($_POST['activite_frn']))		{$activite_frn	=addslashes($_POST['activite_frn']);} 	else{$activite_frn='';}
	if(isset($_POST['mf']))					{$mf			=addslashes($_POST['mf']);} 			else{$mf='';}
	if(isset($_POST['rc']))					{$rc			=addslashes($_POST['rc']);} 			else{$rc='';}
	if(isset($_POST['tel1']))				{$tel1			=addslashes($_POST['tel1']);} 			else{$tel1='';}
	if(isset($_POST['tel2']))				{$tel2			=addslashes($_POST['tel2']);} 			else{$tel2='';}
	if(isset($_POST['fax']))				{$fax			=addslashes($_POST['fax']);} 			else{$fax='';}
	if(isset($_POST['site_web']))			{$site_web 		=addslashes($_POST['site_web']);} 		else{$site_web='';}
	if(isset($_POST['email']))				{$email			=addslashes($_POST['email']);} 			else{$email='';}
	if(isset($_POST['adresse']))			{$adresse		=addslashes($_POST['adresse']);} 		else{$adresse='';}

	mod_frn($id_frn, $nom_frn, $activite_frn, $mf, $rc, $tel1, $tel2, $fax, $site_web, $email, $adresse);
}
?>
<!DOCTYPE html>
<!--
iLi-ERP
Développer par : SAKLY AYOUB
Société	: iLi-Studios SARL
Site : http://www.ili-studios.com/
-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title><?php echo $sytem_title;?></title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="../../ili-style/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="../../ili-style/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="../../ili-style/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
<link href="../../ili-style/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="../../ili-style/css/style.css" rel="stylesheet" />
<link href="../../ili-style/css/style_responsive.css" rel="stylesheet" />
<link href="../../ili-style/css/style_default.css" rel="stylesheet" id="style_color" />
<link rel="stylesheet" type="text/css" href="../../ili-style/assets/chosen-bootstrap/chosen/chosen.css" />
<link href="../../ili-style/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../../ili-style/assets/uniform/css/uniform.default.css" />
</head>
<style>
#nom_clt 		{padding-left:9px;border-radius:4px;background-color:#32C2CD;font-size:11.844px;font-weight:bold;line-height:14px;color:#FFF;white-space:nowrap;vertical-align:baseline; border:none;box-shadow:none;font-size:24.5px;margin-left:-0.15%;margin-top:-0.5%;}
#activite_clt 	{padding-left:9px;border-radius:4px;background-color:#32C2CD;font-size:11.844px;font-weight:bold;line-height:14px;color:#FFF;white-space:nowrap;vertical-align:baseline; border:none;box-shadow:none;margin-left:-0.15%;margin-top:-0.2%;}
#id_clt 		{height:25px;padding-left:9px;border-radius:4px;background-color:#E74955;font-size:11.844px;font-weight:bold;line-height:14px;color:#FFF;white-space:nowrap;vertical-align:baseline; border:none;box-shadow:none;font-size:13px;margin-left:-0.15%;margin-top:-2.2%;margin-bottom:-2%;padding:-1%, -1%;}
#rc 			{height:25px;padding-left:9px;border-radius:4px;background-color:#32C2CD;font-size:11.844px;font-weight:bold;line-height:14px;color:#FFF;white-space:nowrap;vertical-align:baseline; border:none;box-shadow:none;font-size:13px;margin-left:-0.15%;margin-top:-2.2%;margin-bottom:-2%;padding:-1%, -1%;}
#con 			{height:25px;padding-left:9px;border-radius:4px;background-color:#32C2CD;font-size:11.844px;font-weight:bold;line-height:14px;color:#FFF;white-space:nowrap;vertical-align:baseline; border:none;box-shadow:none;font-size:13px;margin-left:-0.25%;margin-top:-2.2%;margin-bottom:-2%;padding:-1%, -1%;}
#adresse 		{height:25px;padding-left:9px;border-radius:4px;background-color:#32C2CD;font-size:11.844px;font-weight:bold;line-height:14px;color:#FFF;white-space:nowrap;vertical-align:baseline; border:none;box-shadow:none;font-size:13px;margin-left:-0.2%;margin-top:-0.8%;margin-bottom:-0.5%;width:100%;}
</style>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<?php include"../../ili-functions/fragments/page_header.php";?>
<!-- END HEADER --> 
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid"> 
	<!-- BEGIN SIDEBAR -->
	<?php include"../../ili-functions/fragments/sidebar.php";?>
	<!-- END SIDEBAR --> 
	<!-- BEGIN PAGE -->
	<div id="main-content"> 
		<!-- BEGIN PAGE CONTAINER-->
		<div class="container-fluid"> 
			<!-- BEGIN PAGE HEADER-->
			<div class="row-fluid">
				<div class="span12">
					<h3 class="page-title"> Fournisseur <small> Fiche Fournisseur</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="liste">Fournisseurs</a><span class="divider">&nbsp;</span></li>
						<li><a href="fournisseur?id=<?php echo $id_frn; ?>">Fiche</a><span class="divider">&nbsp;</span></li>
						<li><a href="edit?id=<?php echo $id_frn; ?>">Modification</a><span class="divider-last">&nbsp;</span></li>
					</ul>
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div class="row-fluid">
				<div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
					<form action="" method="post" name="form1">
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-reorder"></i> Fiche Fournisseur</h4>
								<span class="tools"><a href="#" onClick="javascript:form1.submit();return false;" class="icon-save tooltips" data-original-title="Enregistrer"></a></span>
							</div>
							
							<div class="widget-body">
								<div class="span8">
									<h3>
										<input name="nom_frn" value="<?php echo $frn->nom_frn; ?>" id="nom_clt" class="span12" autofocus required/><br>
										<small>
											<input name="activite_frn" value="<?php echo $frn->activite_frn; ?>" id="activite_clt" class="span12" required/>
										</small>
									</h3>
									<table class="table table-borderless">
										<tbody>
										<tr>
											<td class="span4">Matricule Fiscale :</td>
											<td><input name="mf" value="<?php echo $frn->mf_frn; ?>" id="rc"/></td>
										</tr>
										<tr>
											<td class="span4">Registre du commerce :</td>
											<td><input name="rc" value="<?php echo $frn->rc_frn; ?>" data-mask="999aa9999999/a" id="rc"/></td>
										</tr>
										<tr>
											<td class="span4">Tel.1 :</td>
											<td><input name="tel1" value="<?php echo $frn->tel_frn; ?>" data-mask="99.999.999" id="rc"/></td>
										</tr>
										<tr>
											<td class="span4">Tel.2 :</td>
											<td><input name="tel2" value="<?php echo $frn->tel2_frn; ?>" data-mask="99.999.999" id="rc"/></td>
										</tr>
										<tr>
											<td class="span4">Fax :</td>
											<td><input name="fax" value="<?php echo $frn->fax_frn; ?>" data-mask="99.999.999" id="rc"/></td>
										</tr>
										<tr>
											<td class="span4">Site Web :</td>
											<td><input name="site_web" value="<?php echo $frn->site_frn; ?>" id="rc"/></td>
										</tr>
										<tr>
											<td class="span4">Email :</td>
											<td><input name="email" value="<?php echo $frn->email_frn; ?>" id="rc"/></td>
										</tr>
										</tbody>
									</table>
									<h4>Addresse</h4>
									<div class="well">
                                    <address>
                                        <strong><?php echo $frn->nom_frn; ?></strong><br>
										<input name="adresse" value="<?php echo $frn->adresse_frn; ?>" id="adresse"/><br><br>
                                        <?php echo $frn->tel_frn; ?><br>
										<?php echo $frn->tel2_frn; ?><br>
                                    </address>
                                    <address>
                                        <a href="mailto:<?php echo $frn->email_frn; ?>"><?php echo $frn->email_frn; ?></a>
                                    </address>
                                </div>
								</div>
								<div class="span4">
									<div class="alert alert-success"><i class="icon-ok-sign"></i> Crée le, <?php echo $frn->created_date; ?> par : <a href="<?php echo $site; ?>ili-users/user_profil?id=<?php echo $frn->created_by; ?>"><?php echo $createur->nom.' '.$createur->prenom; ?></a></div>
								</div>
								<div class="space5"></div>
							</div>
							
						</div>
						<!-- END EXAMPLE TABLE widget-->
					</form>
                </div>
			</div>
			<!-- END PAGE CONTENT--> 
		</div>
		<!-- END PAGE CONTAINER--> 
	</div>
	<!-- END PAGE --> 
</div>
<!-- END CONTAINER --> 
<!-- BEGIN FOOTER -->
<div id="footer"> <?php echo $copy_right;?>
	<div class="span pull-right"> <span class="go-top"><i class="icon-arrow-up"></i></span> </div>
</div>
<!-- END FOOTER --> 
<!-- BEGIN JAVASCRIPTS --> 
<!-- Load javascripts at bottom, this will reduce page load time --> 
<script src="../../ili-style/js/jquery-1.8.3.min.js"></script> 
<script src="../../ili-style/assets/bootstrap/js/bootstrap.min.js"></script> 

<script type="text/javascript" src="../../ili-style/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/uniform/jquery.uniform.min.js"></script> 
<script src="../../ili-style/js/scripts.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/ckeditor/ckeditor.js"></script> 
<script src="../../ili-style/js/jquery.blockui.js"></script> 
<!-- ie8 fixes --> 
<!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]--> 
<script type="text/javascript" src="../../ili-style/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/uniform/jquery.uniform.min.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/clockface/js/clockface.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/jquery-tags-input/jquery.tagsinput.min.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/bootstrap-daterangepicker/date.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script> 
<script src="../../ili-style/assets/fancybox/source/jquery.fancybox.pack.js"></script> 
<script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script> 
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>