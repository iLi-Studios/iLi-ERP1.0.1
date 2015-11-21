<?php 
include"../../ili-functions/functions.php";
autorisation('2');
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
<script type="text/javascript">
window.onload = function(){
    document.getElementById('cin_').onkeyup = function(){
        document.getElementById('cin').value = document.getElementById('cin_').value;   
    }
	document.getElementById('nom_').onkeyup = function(){
        document.getElementById('nom').value = document.getElementById('nom_').value;   
    }
	document.getElementById('prenom_').onkeyup = function(){
        document.getElementById('prenom').value = document.getElementById('prenom_').value;   
    }
	document.getElementById('naissance_').onkeyup = function(){
        document.getElementById('naissance').value = document.getElementById('naissance_').value;   
    }
	document.getElementById('adresse_').onkeyup = function(){
        document.getElementById('adresse').value = document.getElementById('adresse_').value;   
    }
	document.getElementById('fix_').onkeyup = function(){
        document.getElementById('fix').value = document.getElementById('fix_').value;   
    }
	document.getElementById('fax_').onkeyup = function(){
        document.getElementById('fax').value = document.getElementById('fax_').value;   
    }
	document.getElementById('portable_').onkeyup = function(){
        document.getElementById('portable').value = document.getElementById('portable_').value;   
    }
	document.getElementById('email_').onkeyup = function(){
        document.getElementById('email').value = document.getElementById('email_').value;   
    }
}; 
</script>
<script>
var loadFile = function(event) {
	var reader = new FileReader();
	reader.onload = function(){
		var output = document.getElementById('output');
		output.src = reader.result;
	};
	reader.readAsDataURL(event.target.files[0]);
};
</script>
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
						<li> <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li> <a href="#">Client</a> <span class="divider">&nbsp;</span> </li>
						<li><a href="add">Ajout</a><span class="divider-last">&nbsp;</span></li>
					</ul>
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div class="row-fluid">
				<div class="span12">
					<div class="widget box blue" id="form_wizard_1">
						<div class="widget-title">
							<h4> <i class="icon-reorder"></i> Pariculier </span> </h4>
							<span class="tools"> <a href="javascript:;" class="icon-chevron-up"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
						<div class="widget-body form">
							<form action="#" class="form-horizontal">
								<div class="form-wizard">
									<div class="navbar steps">
										<div class="navbar-inner">
											<ul class="row-fluid">
												<li class="span3"> <a href="#tab1" data-toggle="tab" class="step active"> <span class="number">1</span> <span class="desc"><i class="icon-ok"></i> Etape 1</span> </a> </li>
												<li class="span3"> <a href="#tab2" data-toggle="tab" class="step"> <span class="number">2</span> <span class="desc"><i class="icon-ok"></i> Etape 2</span> </a> </li>
												<li class="span3"> <a href="#tab3" data-toggle="tab" class="step"> <span class="number">3</span> <span class="desc"><i class="icon-ok"></i> Etape 3</span> </a> </li>
												<li class="span3"> <a href="#tab4" data-toggle="tab" class="step"> <span class="number">4</span> <span class="desc"><i class="icon-ok"></i> Etape final</span> </a> </li>
											</ul>
										</div>
									</div>
									<div id="bar" class="progress progress-striped">
										<div class="bar"></div>
									</div>
									<div class="tab-content">
										<div class="tab-pane active" id="tab1">
											<h3>Etape 1</h3>
											<div class="control-group">
												<label class="control-label">CIN*</label>
												<div class="controls">
													<input class="span6" type="text" id="cin_" name="cin_" data-mask="99999999">
													<span class="help-inline">99999999</span> </div>
											</div>
											<div class="control-group">
												<label class="control-label">Copie de CIN</label>
												<div class="controls">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<!--<span class="btn btn-file">
															<span class="fileupload-new">Select file</span>
															<span class="fileupload-exists">Change</span>
															<input type="file" id="getimage" class="default" />
														</span>
														<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>-->
														<input type="file" accept="image/*" onchange="loadFile(event)">
														<img id="output" width="80%" height="80%"/>
													</div>				
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab2">
											<h4>Etape 2</h4>
											<div class="control-group">
												<label class="control-label">Nom*</label>
												<div class="controls">
													<input type="text" id="nom_" name="nom_" class="span6" />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Prénom*</label>
												<div class="controls">
													<input type="text" id="prenom_" name="prenom_" class="span6" />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Date de naissance</label>
												<div class="controls">
													<input class="span6" type="text" data-mask="99/99/9999" id="naissance_" name="naissance_">
													<span class="help-inline">jj/mm/aaaa</span>
												</div>
											</div>
											<div class="control-group">
											  <label class="control-label">Adresse*</label>
											  <div class="controls">
												 <textarea name="adresse_" id="adresse_" class="span6 " rows="3"></textarea>
											  </div>
										   </div>
										</div>
										<div class="tab-pane" id="tab3">
											<h4>Etape 3</h4>
											<div class="control-group">
												<label class="control-label">Tel FIX</label>
												<div class="controls">
													<input class="span6" type="text" data-mask="99.999.999" id="fix_" name="fix_">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Tel Fax</label>
												<div class="controls">
													<input class="span6" type="text" data-mask="99.999.999" id="fax_" name="fax_">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Tel Portable</label>
												<div class="controls">
													<input class="span6" type="text" data-mask="99.999.999" id="portable_" name="portable_">
												</div>
											</div>
											<div class="control-group">
											  <label class="control-label">Email</label>
											  <div class="controls">
												 <div class="input-icon left">
													<i class="icon-envelope"></i>
													<input class="span6" type="email" placeholder="Email Address" name="email_" id="email_" />    
												 </div>
											  </div>
										   </div>
										</div>
										<div class="tab-pane" id="tab4">
											<h4>Etape Finale</h4>
											<div class="control-group">
												<label class="control-label">CIN*</label>
												<div class="controls">
													<input class="span6" type="text" name="cin" id="cin" disabled required />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Nom*</label>
												<div class="controls">
													<input type="text" name="nom" id="nom" class="span6" disabled required />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Prénom*</label>
												<div class="controls">
													<input type="text" name="prenom" id="prenom" class="span6" disabled required />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Date de naissance</label>
												<div class="controls">
													<input class="span6" type="text" name="naissance" id="naissance" disabled />
												</div>
											</div>
											<div class="control-group">
											  <label class="control-label">Adresse*</label>
											  <div class="controls">
												 <textarea name="adresse" id="adresse" class="span6 " rows="3" disabled required ></textarea>
											  </div>
										   </div>
										    <div class="control-group">
												<label class="control-label">Tel FIX</label>
												<div class="controls">
													<input class="span6" type="text" name="fix" id="fix" disabled />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Tel Fax</label>
												<div class="controls">
													<input class="span6" type="text" name="fax" id="fax" disabled />
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Tel Portable</label>
												<div class="controls">
													<input class="span6" type="text" name="portable" id="portable" disabled />
												</div>
											</div>
											<div class="control-group">
											  <label class="control-label">Email</label>
											  <div class="controls">
												 <div class="input-icon left">
													<i class="icon-envelope"></i>
													<input class="span6" type="email" placeholder="Email Address" name="email" id="email" disabled />    
												 </div>
											  </div>
										   </div>
											<div class="control-group">
												<label class="control-label"></label>
												<div class="controls">
													<label class="checkbox">
														<input type="checkbox" value="" />
														Je confirme les étapes </label>
												</div>
												<span>* Champ obligatoire</span>
											</div>
										</div>
									</div>
									<div class="form-actions clearfix"> <a href="javascript:;" class="btn button-previous"> <i class="icon-angle-left"></i> Précédent </a> <a href="javascript:;" class="btn btn-primary blue button-next"> Suivant <i class="icon-angle-right"></i> </a> <a href="javascript:;" class="btn btn-success button-submit"> Enregistrer <i class="icon-ok"></i> </a> </div>
								</div>
							</form>
						</div>
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
<script src="../../ili-style/assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script> 
<script src="../../ili-style/js/jquery.blockui.js"></script> 
<!-- ie8 fixes --> 
<!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]--> 
<script type="text/javascript" src="../../ili-style/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/uniform/jquery.uniform.min.js"></script> 
<script src="../../ili-style/js/scripts.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/ckeditor/ckeditor.js"></script> 
<script src="../../ili-style/assets/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/bootstrap/js/bootstrap-fileupload.js"></script> 
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