<?php 
include"../../ili-functions/functions.php";
autorisation('2');
autorisation_double_check_privilege('CLIENTS', 'C');
$type_art=$_GET['type'];
function get_nature_article_radio_form_excute($type_art){
	$r=query_excute_while("SELECT * FROM `article_type`;");
	while ($o=mysqli_fetch_object($r)){
		if(($type_art!=$o->type) && (isset($_POST[$o->type])) ){redirect('ili-modules/article/add?type='.$o->type);}
	}
}
get_nature_article_radio_form_excute($type_art);
if( (isset($_POST['famille'])) && (isset($_POST['designation'])) && (isset($_POST['unitee'])) && (isset($_POST['tva'])) && (isset($_POST['pvuttc'])) && (isset($_POST['mrautorisee'])) ){
	$id_famille			=addslashes($_POST['famille']);
	$designation		=addslashes($_POST['designation']);
	$id_unitee			=addslashes($_POST['unitee']);
	$id_tva				=addslashes($_POST['tva']);
	$pvuttc				=addslashes($_POST['pvuttc']);
	$mrautorisee		=addslashes($_POST['mrautorisee']);
	$id_type=get_id_from_type_article($type_art);
	article_add($id_type->id_type, $id_famille, $designation, $id_unitee, $id_tva, $pvuttc, $mrautorisee);
}
function article_add($id_type, $id_famille, $designation, $id_unitee, $id_tva, $pvuttc, $mrautorisee){
	global $site;
	$now = date("Y-m-d");
	$id_user = $_SESSION['user_id'];
	$user_nom = $_SESSION['user_nom'];
	$user_prenom = $_SESSION['user_prenom']; 
	$q="INSERT INTO `article` VALUES (NULL, '$id_type', '$id_famille', '$designation', '$id_unitee', '$id_tva', '$pvuttc', '$mrautorisee', '$id_user', '$now');";
	query_execute_insert($q);
	$o=get_id_from_article($designation);
	$id_art=$o->code_art;
	notif_all('', '', '<a href="'.$site.'ili-modules/article/article?id='.$id_art.'">'.$user_nom.' '.$user_prenom.' a creé un nouveau article : '.$designation);
	write_log("Création d\'artcile: <a href=\"ili-modules/article/article?id=".$id_art."\">".$id_art."</a>");
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
					<h3 class="page-title"> Client <small> Forme ajout</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="../../ili-modules/article/liste?type=<?php get_premier_type_art(); ?>">Article</a><span class="divider">&nbsp;</span></li>
						<li><a href="add?type=<?php echo $type_art; ?>">Ajout</a><span class="divider">&nbsp;</span></li>
						<li><a href="add?type=<?php echo $type_art; ?>"><?php echo $type_art; ?></a><span class="divider-last">&nbsp;</span></li>
					</ul>
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div class="row-fluid">
				<div class="widget">
						<div class="widget-title">
							<h4><i class="icon-reorder"></i> Informations globales</h4>
							<!--<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span>--> </div>
						<div class="widget-body form">
							<form action="" class="form-horizontal" method="post">
								<div class="control-group">
									<label class="control-label">Nature Article *</label>
									<div class="controls"><?php get_nature_article_radio_form($type_art); ?></div>
								</div>
							</form><br>
							<form action="#" class="form-horizontal" method="post">
								<div class="control-group">
									<label class="control-label">Famille
                                    	<span>
                                        	<a href="conf/conf" class="icon-edit tooltips" data-original-title="Gestion de famille"></a>
                                    	</span>
                                    </label>
									<div class="controls"><select name="famille"><?php get_all_fam(); ?></select></div>
								</div>
								<div class="control-group">
									<label class="control-label">Désignation</label>
									<div class="controls">
										<input type="text" name="designation" class="span9" required />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Unité
                                    <span>
                                       	<a href="conf/conf" class="icon-edit tooltips" data-original-title="Gestion d'unité"></a>
                                    </span>
                                    </label>
									<div class="controls"><select name="unitee"><?php get_all_unt(); ?></select></div>
								</div>
								<div class="control-group">
									<label class="control-label">TVA</label>
									<div class="controls"><select name="tva"><?php get_all_tva(); ?></select></div>
								</div>
								<div class="control-group">
									<label class="control-label">Prix de vente U.TTC</label>
									<div class="controls">
										<input class="span9" type="text" name="pvuttc"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Max Remise autorisé</label>
									<div class="controls">
										<input class="span9" type="text" name="mrautorisee" data-mask="99"/>
									</div>
								</div>
<?php
if($type_art=='FABRIQUE'){
echo'
                  <!-- BEGIN SAMPLE TABLE widget-->
                     <div class="widget-body">
                        <table class="table table-striped table-bordered table-advance table-hover">
                           <thead>
                              <tr>
                                 <th width="10%"><i class="icon-barcode"></i> Code</th>
                                 <th width="70%" class="hidden-phone"><i class="icon-cogs"></i> Designation</th>
                                 <th width="10%"><i class="icon-beaker"></i> Qte</th>
                                 <th width="10%"></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="highlight"><input class="span12" type="text" name=""/></td>
                                 <td class="hidden-phone"><input class="span12" type="text" name=""/></td>
                                 <td><input class="span12" type="text" name=""/></td>
                                 <td><a href="#" class="btn mini purple"><i class="icon-plus"></i></a></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  <!-- END SAMPLE TABLE widget-->
';
}
?>                                
								<br>
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