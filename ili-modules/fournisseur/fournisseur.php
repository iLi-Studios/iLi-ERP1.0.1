<?php 
include"../../ili-functions/functions.php";
autorisation('2');
autorisation_double_check_privilege('FOURNISSEURS', 'S');
if(isset($_GET['mf'])){$id_frn=get_id_frn_from_mf($_GET['mf']);}else{$id_frn=$_GET['id'];}
$frn=get_fournisseur_info($id_frn);
if($frn==''){redirect('index?message=19');}
$createur=get_user_info($frn->created_by);
function users_pannel($id, $frn){
	// ADMIN
	if($_SESSION['user_id_rank']==3){
		//C
		echo'<a href="add" class="icon-plus tooltips" data-original-title="Ajouter"></a>';
		//U=B
		echo'<a href="edit?id='.$frn->id_frn.'" class="icon-edit tooltips" data-original-title="Modifier"></a>';
		//D
		echo'<a href="#myModal_del" class="icon-trash tooltips" data-toggle="modal" data-original-title="Supprimer"></a>';
	}
	// USER
	if($_SESSION['user_id_rank']==2){
		$up=user_privileges("FOURNISSEURS", $_SESSION['user_id']);$s=$up->s;$c=$up->c;$u=$up->u;$d=$up->d;
		//S
		if(!$s){echo'<script language="Javascript">document.location.href="../../index?message=17"</script>';}
		//C
		if($c){echo'<a href="add" class="icon-plus tooltips" data-original-title="Ajouter"></a>';}
		//U=B
		if($u){echo'<a href="edit?id='.$frn->id_frn.'" class="icon-edit tooltips" data-original-title="Modifier"></a>';}
		//D
		if($d){echo'<a href="#myModal_del" class="icon-trash tooltips" data-toggle="modal" data-original-title="Supprimer"></a>';}
	}
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
					<h3 class="page-title"> Fournisseur <small> Fiche Fournisseur</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="liste">Fournisseurs</a><span class="divider">&nbsp;</span></li>
						<li><a href="fournisseur?id=<?php echo $id_frn; ?>">Fiche</a><span class="divider-last">&nbsp;</span></li>
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
                            <h4><i class="icon-reorder"></i> Fiche Fournisseur</h4>
                            <span class="tools">
								<?php users_pannel($_SESSION['user_id'], $frn);?>
								<a href="javascript:;" class="icon-chevron-down"></a>
							</span>
                        </div>
						
						<div class="widget-body">
                            <div class="span8">
                                <h3><?php echo $frn->nom_frn; ?><br/><small><?php echo $frn->activite_frn; ?></small></h3>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span4">Matricule Fiscale :</td>
                                        <td><?php echo $frn->mf_frn; ?></td>
                                    </tr>
									<tr>
                                        <td class="span4">Registre du commerce :</td>
                                        <td><?php echo $frn->rc_frn; ?></td>
                                    </tr>
									<tr>
                                        <td class="span4">Tel.1 :</td>
                                        <td><?php echo $frn->tel_frn; ?></td>
                                    </tr>
									<tr>
                                        <td class="span4">Tel.2 :</td>
                                        <td><?php echo $frn->tel2_frn; ?></td>
                                    </tr>
									<tr>
                                        <td class="span4">Fax :</td>
                                        <td><?php echo $frn->fax_frn; ?></td>
                                    </tr>
									<tr>
                                        <td class="span4">Site Web :</td>
                                        <td><a href="<?php echo $frn->site_frn; ?>"><?php echo $frn->site_frn; ?></a></td>
                                    </tr>
									<tr>
                                        <td class="span4">Email :</td>
                                        <td><a href="mailto:<?php echo $frn->email_frn; ?>"><?php echo $frn->email_frn; ?></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h4>Addresse</h4>
                                <div class="well">
                                    <address>
                                        <strong><?php echo $frn->nom_frn; ?></strong><br>
                                        <?php echo $frn->adresse_frn; ?><br><br>
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


<!-- Modale de confirmation de suppression -->
<div id="myModal_del" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_del" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel_del">Confirmation de suppression</h3>
	</div>
	<div class="modal-body">
		<p>Vous êtes sur de vouloire supprimer le fournisseur <strong><?php echo $frn->nom_frn; ?></strong>? <br> Cette action est <strong>irréversible!</strong></p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
		<button onClick='document.location.href="remove?id=<?php echo $frn->id_frn; ?>";' data-dismiss="modal" class="btn btn-primary">Confirm</button>
	</div>
</div>
<!-- Modale de confirmation de suppression -->
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