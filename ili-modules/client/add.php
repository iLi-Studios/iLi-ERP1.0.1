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
					<h3 class="page-title"> Client <small> Liste</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li> <a href="#">Client</a> <span class="divider_last">&nbsp;</span> </li>
					</ul>
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div class="row-fluid">
				<div class="widget">
						<div class="widget-title">
							<h4><i class="icon-reorder"></i> Informations globales</h4>
							<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
						<div class="widget-body form">
							<form action="" class="form-horizontal" method="post">
								<div class="control-group">
									<label class="control-label">Nature Client*</label>
									<div class="controls">
										<label class="radio">
											<input type="radio" name="PARTICULIER" checked onChange="this.form.submit()"/>PARTICULIER
										</label>
										<label class="radio">
											<input type="radio" name="ENTREPRISE" onChange="this.form.submit()"/>ENTREPRISE
										</label>
									</div>
								</div>
							</form><br>
							<form action="#" class="form-horizontal" method="post">
								<div class="control-group">
									<label class="control-label">CIN*</label>
									<div class="controls">
										<input class="span9" type="text" name="cin" data-mask="99999999" required/>
										<span class="help-inline"> Champ obligatoire</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nom*</label>
									<div class="controls">
										<input type="text" name="nom" class="span9" required />
										<span class="help-inline"> Champ obligatoire</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Prénom*</label>
									<div class="controls">
										<input type="text" name="prenom" class="span9" required />
										<span class="help-inline"> Champ obligatoire</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Date de naissance</label>
									<div class="controls">
										<input class="span9" type="text" name="naissance" data-mask="99/99/9999"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Adresse*</label>
									<div class="controls">
										<textarea name="adresse" class="span9 " rows="3" required ></textarea>
										<span class="help-inline"> Champ obligatoire</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Tel FIX</label>
									<div class="controls">
										<input class="span9" type="text" name="fix" data-mask="99.999.999"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Tel Fax</label>
									<div class="controls">
										<input class="span9" type="text" name="fax" data-mask="99.999.999"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Tel Portable</label>
									<div class="controls">
										<input class="span9" type="text" name="portable" data-mask="99.999.999"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<div class="input-icon left">
											<i class="icon-envelope"></i>
											<input class="span9" type="email" placeholder="Email Address" name="email" id="email" />    
										</div>
									</div>
								</div>
								<br>
								<center>
									<button type="reset" class="btn btn-info"><i class="icon-ban-circle icon-white"></i> Cancel</button>
									<button type="submit" class="btn btn-warning"><i class="icon-plus icon-white"></i> Create</button>
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