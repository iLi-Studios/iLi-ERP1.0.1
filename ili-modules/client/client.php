<?php 
include"../../ili-functions/functions.php";
autorisation('2');
$id_client=$_GET['id'];
$clt=get_client_info($id_client);
$createur=get_user_info($clt->created_by);
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
					<h3 class="page-title"> Client <small> Fiche Client</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="liste">Clients</a><span class="divider">&nbsp;</span></li>
						<li><a href="client">Fiche</a><span class="divider-last">&nbsp;</span></li>
					</ul>
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div class="row-fluid">
				<div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Fiche Client</h4>
                            <span class="tools"></span>
                        </div>
						
						<div class="widget-body">
                            <div class="span8">
                                <h3><?php echo $clt->nom_clt.' '.$clt->prenom_clt; ?> <br/><small><?php echo $clt->activite_clt; ?></small></h3>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span4">CODE :</td>
                                        <td><?php echo $clt->id_clt; ?></td>
                                    </tr>
									<tr>
                                        <td class="span4">Registre du commerce :</td>
                                        <td><?php echo $clt->rc; ?></td>
                                    </tr>
									<tr>
                                        <td class="span4">Tel FIX :</td>
                                        <td><?php echo $clt->fix_clt; ?></td>
                                    </tr>
									<tr>
                                        <td class="span4">Tel FAX :</td>
                                        <td><?php echo $clt->fax_clt; ?></td>
                                    </tr>
									<tr>
                                        <td class="span4">Email :</td>
                                        <td><a href="mailto:<?php echo $clt->email_clt; ?>"><?php echo $clt->email_clt; ?></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h4>Addresse</h4>
                                <div class="well">
                                    <address>
                                        <strong><?php echo $clt->nom_clt.' '.$clt->prenom_clt; ?></strong><br>
                                        <?php echo $clt->adresse_clt; ?><br>
                                        <?php echo $clt->fix_clt; ?><br>
                                    </address>
                                    <address>
                                        <strong>Full Name</strong><br>
                                        <a href="mailto:<?php echo $clt->email_clt; ?>"><?php echo $clt->email_clt; ?></a>
                                    </address>
                                </div>
                            </div>
                            <div class="span4">
                                <h4>Contact</h4>
								<ul class="unstyled">
									<table class="table-borderless" width="100%">
										<tbody>
											<tr>
												<td width="30%">Nom</td>
												<td width="70%"><?php echo $clt->nom_con_clt; ?></td>
											</tr>
											<tr>
												<td>Prénom</td>
												<td><?php echo $clt->prenom_con_clt; ?></td>
											</tr>
											<tr>
												<td>Poste</td>
												<td><?php echo $clt->post_con_clt; ?></td>
											</tr>
											<tr>
												<td>Tel1</td>
												<td><?php echo $clt->tel_con_clt; ?></td>
											</tr>
											<tr>
												<td>Tel2</td>
												<td><?php echo $clt->tel2_con_clt; ?></td>
											</tr>
											<tr>
												<td>Email</td>
												<td><a href="mailto:<?php echo $clt->email_con_clt; ?>"><?php echo $clt->email_con_clt; ?></a></td>
											</tr>
										</tbody>
									</table>
                                </ul>
                                <div class="alert alert-success"><i class="icon-ok-sign"></i> Crée le, <?php echo $clt->created_date; ?> par : <a href="<?php echo $site; ?>ili-users/user_profil?id=<?php echo $clt->created_by; ?>"><?php echo $createur->nom.' '.$createur->prenom; ?></a></div>
                            </div>
                            <div class="space5"></div>
                        </div>
						
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
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
<script type="text/javascript" src="../../ili-style/assets/data-tables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/data-tables/DT_bootstrap.js"></script>
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