<?php include"../ili-functions/functions.php";?>
<?php 
autorisation('5'); 
function grade_list(){
	//$query="SELECT * FROM `rank` WHERE `id_rank`>'1' AND `id_rank`<'6' ORDER BY id_rank ASC";
	$query="SELECT * FROM `users_rank` ORDER BY id_rank ASC";
	//if($_SESSION['user_id_rank']=6){$query==$query6;}else{$query==$query5;}
	$result=query_excute_while($query);
	while ($o=mysqli_fetch_object($result)){echo'<option value="'.$o->id_rank.'">'.$o->rank.'</option>';}
}
function create_user(){
	$query="INSERT INTO `ili_erp`.`users` (`id_user`, `id_rank`, `nom`, `prenom`, `email`, `poste`, `tel`, `adresse`, `date_naissance`, `mdp`, `mdp_update_date`, `fb`, `github`, `linkedin`, `img_link`, `created_by`, `created_date`) VALUES ('$cin', '$rank', '$nom', '$prenom', '$email', '$poste', '$tel', '$adresse', '$date_naissance', MD5('$mdp'), 'NOW()', '$fb', '$github', '$linkedin', '$img_url', 'Sakly Ayoub', 'NOW()');";
	if(query_execute("mysqli_fetch_object", $query)){redirect('ili-users/users?message=7');}else{redirect('ili-users/users?message=6');}
}

if((isset($_POST['cin']))&&(isset($_POST['nom']))&&(isset($_POST['prenom']))&&(isset($_POST['email']))&&(isset($_POST['tel']))&&(isset($_POST['mdp']))&&(isset($_POST['poste']))&&(isset($_POST['rank']))&&(isset($_POST['adresse']))&&(isset($_POST['date_naissance']))){
	$cin						=addslashes($_POST['cin']);
	$nom						=addslashes($_POST['nom']);
	$prenom						=addslashes($_POST['prenom']);
	$email						=addslashes($_POST['email']);
	$poste						=addslashes($_POST['poste']);
	$tel						=addslashes($_POST['tel']);
	$adresse					=addslashes($_POST['adresse']);
	$date_naissance				=addslashes($_POST['date_naissance']);
	$mdp						=addslashes($_POST['mdp']);
	$rank						=addslashes($_POST['rank']);
	if(isset($_POST['fb'])){$fb=$_POST['fb'];}else{$fb='';}
	if(isset($_POST['github'])){$github=$_POST['github'];}else{$github='';}
	if(isset($_POST['linkedin'])){$linkedin=$_POST['linkedin'];}else{$linkedin='';}
	if(isset($_POST['img_url'])){$img_url=$_POST['img_url'];}else{$img_url='';}
	$admin						= $_SESSION['user_nom'].' '.$_SESSION['user_nom'];
	create_user($cin, $rank, $nom, $prenom, $email, $poste, $tel, $adresse, $date_naissance, $mdp, $fb, $github, $linkedin, $img_url, $admin);
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title>Form Components</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="../ili-style/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="../ili-style/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="../ili-style/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
<link href="../ili-style/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="../ili-style/css/style.css" rel="stylesheet" />
<link href="../ili-style/css/style_responsive.css" rel="stylesheet" />
<link href="../ili-style/css/style_default.css" rel="stylesheet" id="style_color" />
<link href="../ili-style/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/gritter/css/jquery.gritter.css" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/uniform/css/uniform.default.css" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/chosen-bootstrap/chosen/chosen.css" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/jquery-tags-input/jquery.tagsinput.css" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/clockface/css/clockface.css" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/bootstrap-colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="../ili-style/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
<link rel="stylesheet" href="../ili-style/assets/data-tables/DT_bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/bootstrap-daterangepicker/daterangepicker.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<?php include"../ili-functions/fragments/page_header.php";?>
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
	<?php include"../ili-functions/fragments/sidebar.php";?>
	<!-- BEGIN PAGE -->
	<div id="main-content"> 
		<!-- BEGIN PAGE CONTAINER-->
		<div class="container-fluid"> 
			<!-- BEGIN PAGE HEADER-->
			<div class="row-fluid">
				<div class="span12"> 
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title"> Dashboard <small> Création utilisateur</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site;?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="<?php echo $site;?>ili-users/users">Utilisateurs du système</a><span class="divider">&nbsp;</span></li>
						<li><a href="<?php echo $site;?>ili-users/user_add">Création</a><span class="divider-last">&nbsp;</span></li>
						<li class="pull-right search-wrap">
							<form class="hidden-phone">
								<div class="search-input-area">
									<input id=" " class="search-query" type="text" placeholder="Recherche ?">
									<i class="icon-search"></i> </div>
							</form>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB--> 
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div class="row-fluid">
				<div class="span12">
					<?php get_message('message'); ?>
					<div class="widget">
						<div class="widget-title">
							<h4><i class="icon-reorder"></i> Informations globales</h4>
							<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
						<div class="widget-body form">
							<form action="#" class="form-horizontal" method="post">
								<div class="control-group">
									<label class="control-label">N° CIN</label>
									<div class="controls">
										<input type="text" required name="cin" class="span6  popovers" data-trigger="hover" data-content="Numéro de Carte Identité Nationnale" data-original-title="8 Chiffres" />
										<span class="help-inline"> Champ obligatoire</span> </div>
								</div>
								<!--N° CIN*-->
								<div class="control-group">
									<label class="control-label">Nom</label>
									<div class="controls">
										<input type="text" required name="nom" class="span6  popovers" />
										<span class="help-inline"> Champ obligatoire</span> </div>
								</div>
								<!--Nom*-->
								<div class="control-group">
									<label class="control-label">Prénom</label>
									<div class="controls">
										<input type="text" required name="prenom" class="span6  popovers" />
										<span class="help-inline"> Champ obligatoire</span> </div>
								</div>
								<!--Prénom*-->
								<div class="control-group">
									<label class="control-label">Date de naissance</label>
									<div class="controls">
										<div class="input-append date date-picker span6" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
											<input class="m-ctrl-medium date-picker span6 popovers" name="date_naissance" size="16" type="text" required />
											<span class="add-on"><i class="icon-calendar"></i></span>
										</div>
										<span class="help-inline"> Champ obligatoire</span>
									</div>
								</div>
								<!--Date de naissance-->
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="email" required name="email" class="span6 popovers" />
										<span class="help-inline"> Champ obligatoire</span> </div>
								</div>
								<!--Email*-->
								<div class="control-group">
									<label class="control-label">Tel</label>
									<div class="controls">
										<input type="text" required name="tel" class="span6  popovers" />
										<span class="help-inline"> Champ obligatoire</span> </div>
								</div>
								<!--Tel*-->
								<div class="control-group">
									<label class="control-label">Image URL</label>
									<div class="controls">
										<input type="text" name="img_url" class="span6  popovers" data-trigger="hover" data-content="Laisser vide, si vous avez pas un lien" data-original-title="Un lien direct avec extention" />
									</div>
								</div>
								<!--Image URL-->
								<div class="control-group">
									<label class="control-label">Adresse</label>
									<div class="controls">
										<textarea class="span6 " rows="3" name="adresse" required></textarea>
										<span class="help-inline"> Champ obligatoire</span> </div>
								</div>
								<!--Adresse*-->
								<div class="control-group">
									<label class="control-label">Mot de passe</label>
									<div class="controls">
										<input type="text" required name="mdp" class="span6  popovers" data-trigger="hover" data-content="Essayé une mot de passe complex de 5 caractéres au minimume, genre X2€n!" data-original-title="Mot de passe par defaut" />
										<span class="help-inline"> Champ obligatoire</span> </div>
								</div>
								<!--Mot de passe*-->
								<div class="control-group">
									<label class="control-label">Facebook URL</label>
									<div class="controls">
										<input type="text" name="fb" class="span6  popovers" />
									</div>
								</div>
								<!--Facebook URL-->
								<div class="control-group">
									<label class="control-label">LinkedIN URL</label>
									<div class="controls">
										<input type="text" name="linkedin" class="span6  popovers" />
									</div>
								</div>
								<!--LinkedIN URL-->
								<div class="control-group">
									<label class="control-label">Github URL</label>
									<div class="controls">
										<input type="text" name="github" class="span6  popovers" />
									</div>
								</div>
								<!--Github URL-->
								<div class="control-group">
									<label class="control-label">Poste</label>
									<div class="controls">
										<input type="text" required name="poste" class="span6  popovers" />
										<span class="help-inline"> Champ obligatoire</span> </div>
								</div>
								<!--Poste*-->
								<div class="control-group">
									<label class="control-label">Grade</label>
									<div class="controls">
										<select name="rank" required class="span6 chosen" data-placeholder="Choose a Category" tabindex="1">
											<?php grade_list(); ?>
										</select>
									</div>
								</div>
								<!--rank*--> 
								<br>
								<center>
									<button type="reset" class="btn btn-info"><i class="icon-ban-circle icon-white"></i> Cancel</button>
									<button type="submit" class="btn btn-warning"><i class="icon-plus icon-white"></i> Create</button>
								</center>
							</form>
						</div>
					</div>
					<!-- Informations globales --> 
				</div>
				<!-- END PAGE CONTENT--> 
			</div>
			<!-- END PAGE CONTAINER--> 
		</div>
		<!-- END PAGE --> 
	</div>
</div>
<!-- END CONTAINER -->




<div id="footer"> 2013 &copy; Admin Lab Dashboard.
	<div class="span pull-right"> <span class="go-top"><i class="icon-arrow-up"></i></span> </div>
</div>
<!-- END FOOTER --> 
<!-- BEGIN JAVASCRIPTS --> 
<!-- Load javascripts at bottom, this will reduce page load time --> 
<script src="../ili-style/js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="../ili-style/assets/ckeditor/ckeditor.js"></script> 
<script src="../ili-style/assets/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="../ili-style/assets/bootstrap/js/bootstrap-fileupload.js"></script> 
<script src="../ili-style/js/jquery.blockui.js"></script> 
<!-- ie8 fixes --> 
<!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]--> 
<script type="text/javascript" src="../ili-style/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="../ili-style/assets/uniform/jquery.uniform.min.js"></script> 
<script type="text/javascript" src="../ili-style/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
<script type="text/javascript" src="../ili-style/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script> 
<script type="text/javascript" src="../ili-style/assets/clockface/js/clockface.js"></script> 
<script type="text/javascript" src="../ili-style/assets/jquery-tags-input/jquery.tagsinput.min.js"></script> 
<script type="text/javascript" src="../ili-style/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script> 
<script type="text/javascript" src="../ili-style/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="../ili-style/assets/bootstrap-daterangepicker/date.js"></script> 
<script type="text/javascript" src="../ili-style/assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script type="text/javascript" src="../ili-style/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
<script type="text/javascript" src="../ili-style/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
<script type="text/javascript" src="../ili-style/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script> 
<script src="../ili-style/assets/fancybox/source/jquery.fancybox.pack.js"></script> 
<script src="../ili-style/js/scripts.js"></script> 
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