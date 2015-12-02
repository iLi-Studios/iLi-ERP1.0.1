<?php 
include"../../ili-functions/functions.php";
autorisation('2');
autorisation_double_check_privilege('FOURNISSEURS', 'C');
function fournisseur_add($rs, $mf, $rc, $activ, $tel1, $tel2, $fax, $email, $adresse, $site_web){
	global $site;
	$id_user=$_SESSION['user_id'];
	$user_nom=$_SESSION['user_nom'];
	$user_prenom=$_SESSION['user_prenom'];
	$q_test_rs="SELECT * FROM client WHERE nom_frn='$rs'";
	$q_test_mf="SELECT * FROM client WHERE mf_frn='$mf'";
	$q_test_rc="SELECT * FROM client WHERE rc_frn='$rc'";
	//boucle des test
	$o_test_rs=query_execute("mysqli_fetch_row", $q_test_rs);
	if($o_test_rs==0){
		$o_test_mf=query_execute("mysqli_fetch_row", $q_test_mf);
		if($o_test_mf==0){
			$o_test_rc=query_execute("mysqli_fetch_row", $q_test_rc);
			if($o_test_rc==0){
				$now = date("d-m-Y");
				$q="INSERT INTO fournisseur VALUES 
				(NULL, '$mf', '$rc', '$rs', '$activ', '$adresse', '$tel1', '$tel2', '$fax', '$email', 'site_web', '$id_user', '$now');";
				query_execute_insert($q);
				notif_all('', '', '<a href="'.$site.'ili-modules/fournisseur/fournisseur?mf='.$mf.'">'.$user_nom.' '.$user_prenom.' a creé un nouveau fournisseur, '.$rs);
				write_log("Création de fournisseur : <a href=\"ili-modules/fournisseur/fournisseur?mf=".$mf."\">".$mf."</a>");
				redirect('ili-modules/fournisseur/liste');
			}
			else{redirect('index?message=22');}
		}
		else{redirect('index?message=21');}
	}
	else{redirect('index?message=20');}
}
if( (isset($_POST['rs'])) && (isset($_POST['mf'])) && (isset($_POST['rc'])) && (isset($_POST['adresse'])) ){
										$rs			=addslashes($_POST['rs']);
										$mf			=addslashes($_POST['mf']);
	if(isset($_POST['rc']))				{$rc		=addslashes($_POST['rc']);}else{$rc='';}
										$activ		=addslashes($_POST['activ']);
	if(isset($_POST['fax']))			{$fax		=addslashes($_POST['fax']);}else{$fax='';}
	if(isset($_POST['email']))			{$email		=addslashes($_POST['email']);}else{$email='';}
										$adresse	=addslashes($_POST['adresse']);	
	if(isset($_POST['nom']))			{$nom		=addslashes($_POST['nom']);}else{$nom='';}
	if(isset($_POST['prenom']))			{$prenom	=addslashes($_POST['prenom']);}else{$prenom='';}
	if(isset($_POST['poste']))			{$poste		=addslashes($_POST['poste']);}else{$poste='';}
	if(isset($_POST['email_con']))		{$email_con	=addslashes($_POST['email_con']);}else{$email_con='';}
	if(isset($_POST['tel1']))			{$tel1		=addslashes($_POST['tel1']);}else{$tel1='';}
	if(isset($_POST['tel2']))			{$tel2		=addslashes($_POST['tel2']);}else{$tel2='';}
	if(isset($_POST['site']))			{$site_web	=addslashes($_POST['site']);}else{$site_web='';}
	fournisseur_add($rs, $mf, $rc, $activ, $tel1, $tel2, $fax, $email, $adresse, $site_web);
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
					<h3 class="page-title"> Fournisseurs <small> Forme ajout</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li> <a href="liste">Fournisseur</a> <span class="divider">&nbsp;</span> </li>
						<li><a href="add">Ajout</a><span class="divider-last">&nbsp;</span></li>
					</ul>
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div class="row-fluid">
				<div class="widget">
						<div class="widget-title">
							<h4><i class="icon-reorder"></i> Informations globales </h4>
							<!--<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> --></div>
						<div class="widget-body form">
							<form action="" class="form-horizontal" method="post">
								<div class="control-group">
									<label class="control-label">Raison Sociale*</label>
									<div class="controls">
										<input type="text" name="rs" class="span9" required />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Matricule Fiscale (MF)*</label>
									<div class="controls">
										<input class="span9" type="text" name="mf" data-mask="9999999a/a/a999" required/>
										<span class="help-inline"> Exp. 9999999R/A/C999</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Registre du Commerce (RC)</label>
									<div class="controls">
										<input class="span9" type="text" name="rc" data-mask="999aa9999999/a"/>
										<span class="help-inline"> Exp. 999BE9999999/J</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Activité*</label>
									<div class="controls">
										<textarea name="activ" class="span9 " rows="3" required ></textarea>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Tel.1</label>
									<div class="controls">
										<input class="span9" type="text" name="tel" data-mask="99.999.999"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Tel.2</label>
									<div class="controls">
										<input class="span9" type="text" name="tel2" data-mask="99.999.999"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Tel Fax</label>
									<div class="controls">
										<input class="span9" type="text" name="fax" data-mask="99.999.999"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Site</label>
									<div class="controls">
										<input class="span9" type="url" name="site"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<div class="input-icon left">
											<i class="icon-envelope"></i>
											<input class="span9" type="email" placeholder="Email Address" name="email" />    
										</div>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Adresse*</label>
									<div class="controls">
										<textarea name="adresse" class="span9 " rows="3" required ></textarea>
									</div>
								</div>
								<center>
									<button type="reset" class="btn btn-info"><i class="icon-ban-circle icon-white"></i> Annuler</button>
									<button type="submit" class="btn btn-warning"><i class="icon-plus icon-white"></i> Créer</button>
								</center>
							</form>
						</div>
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