<?php 
include"../../ili-functions/functions.php";
autorisation('2');
$id_client=$_GET['id'];
$clt=get_client_info($id_client);
$createur=get_user_info($clt->created_by);
if(isset($_POST['ban_raison'])&&isset($_POST['id_clt'])){
	$ban_raison=addslashes($_POST['ban_raison']);
	$id_clt=addslashes($_POST['id_clt']);
	redirect('ili-modules/client/ban?id='.$id_clt.'&ban_raison='.$ban_raison);
}
function users_pannel($id, $clt){
	// ADMIN
	if($_SESSION['user_id_rank']==3){
		//C
		echo'<a href="add" class="icon-plus tooltips" data-original-title="Ajouter"></a>';
		//U=B
		echo'<a href="edit?id='.$clt->id_clt.'" class="icon-edit tooltips" data-original-title="Modifier"></a>';
		//D
		echo'<a href="#myModal_del" class="icon-trash tooltips" data-toggle="modal" data-original-title="Supprimer"></a>';
		//B=U
		if($clt->ban=='0'){echo'<a href="#myModal_ban" class="icon-ban-circle tooltips" data-toggle="modal" data-original-title="Bannir"></a>';}
		else{echo'<a href="deban?id='.$clt->id_clt.'" class="icon-repeat tooltips" data-original-title="Débannir"></a>';}
	}
	// USER
	if($_SESSION['user_id_rank']==2){
		$up=user_privileges("CLIENTS", $_SESSION['user_id']);$s=$up->s;$c=$up->c;$u=$up->u;$d=$up->d;
		//S
		if(!$s){echo'<script language="Javascript">document.location.href="../../index?message=17"</script>';}
		//C
		if($c){echo'<a href="add" class="icon-plus tooltips" data-original-title="Ajouter"></a>';}
		//U=B
		if($u){echo'<a href="edit?id='.$clt->id_clt.'" class="icon-edit tooltips" data-original-title="Modifier"></a>';}
		//D
		if($d){echo'<a href="#myModal_del" class="icon-trash tooltips" data-toggle="modal" data-original-title="Supprimer"></a>';}
		//B=D
		if($u){
			if($clt->ban=='0'){echo'<a href="#myModal_ban" class="icon-ban-circle tooltips" data-toggle="modal" data-original-title="Bannir"></a>';}
			else{echo'<a href="deban?id='.$clt->id_clt.'" class="icon-repeat tooltips" data-original-title="Débannir"></a>';}
		}
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
					<h3 class="page-title"> Client <small> Fiche Client</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="liste">Clients</a><span class="divider">&nbsp;</span></li>
						<li><a href="client?id=<?php echo $id_client; ?>">Fiche</a><span class="divider-last">&nbsp;</span></li>
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
                            <span class="tools">
								<?php users_pannel($_SESSION['user_id'], $clt);?>
								<a href="javascript:;" class="icon-chevron-down"></a>
							</span>
                        </div>
						
						<div class="widget-body">
                            <div class="span8">
                                <h3><?php echo $clt->nom_clt; ?><?php if($clt->activite_clt==''){echo '<br>'.$clt->prenom_clt; }?> <br/><small><?php echo $clt->activite_clt; ?></small></h3>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span4">
										<?php if($clt->activite_clt==''){echo'CIN : ';}else{echo'Matricule Fiscale :';}?>
										</td>
                                        <td><?php echo $clt->id_clt; ?></td>
                                    </tr>
									<?php if(($clt->activite_clt=='')&&($clt->date_nais_clt!='')){echo'
									<tr>
                                        <td class="span4">Age :</td>
                                        <td>'.age($clt->date_nais_clt).'</td>
                                    </tr>
									';}?>
									<?php if($clt->activite_clt!=''){echo'
									<tr>
                                        <td class="span4">Registre du commerce :</td>
                                        <td>'.$clt->rc.'</td>
                                    </tr>
									';}?>
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
                                        <?php echo $clt->adresse_clt; ?><br><br>
                                        <?php echo $clt->fix_clt; ?><br>
                                    </address>
                                    <address>
                                        <a href="mailto:<?php echo $clt->email_clt; ?>"><?php echo $clt->email_clt; ?></a>
                                    </address>
                                </div>
                            </div>
                            <div class="span4">
								<?php
								if($clt->nom_con_clt!=''){
									echo'
                                <h4>Contact</h4>
								<ul class="unstyled">
									<table class="table-borderless" width="100%">
										<tbody>
											<tr>
												<td width="30%">Nom</td>
												<td width="70%">'.$clt->nom_con_clt.'</td>
											</tr>
											<tr>
												<td>Prénom</td>
												<td>'.$clt->prenom_con_clt.'</td>
											</tr>
											<tr>
												<td>Poste</td>
												<td>'.$clt->post_con_clt.'</td>
											</tr>
											<tr>
												<td>Tel1</td>
												<td>'.$clt->tel_con_clt.'</td>
											</tr>
											<tr>
												<td>Tel2</td>
												<td>'.$clt->tel2_con_clt.'</td>
											</tr>
											<tr>
												<td>Email</td>
												<td><a href="mailto:'.$clt->email_con_clt.'">'.$clt->email_con_clt.'</a></td>
											</tr>
										</tbody>
									</table>
                                </ul>
								';}?>
                                <div class="alert alert-success"><i class="icon-ok-sign"></i> Crée le, <?php echo $clt->created_date; ?> par : <a href="<?php echo $site; ?>ili-users/user_profil?id=<?php echo $clt->created_by; ?>"><?php echo $createur->nom.' '.$createur->prenom; ?></a></div>
								
								<?php 
								if($clt->ban=='1'){
									$usr=get_user_info($clt->banned_by);
									echo'
									<div class="alert alert-danger"><i class="icon-ban-circle"></i> Banni par, <a href="'.$site.'ili-users/user_profil?id='.$clt->banned_by.'">'.$usr->nom.' '.$usr->prenom.'</a>, <br> Raison : '.$clt->ban_raison.' </div>
									';
								}
								?>
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
		<p>Vous êtes sur de vouloire supprimer le client <strong><?php echo $clt->nom_clt.' '.$clt->prenom_clt; ?></strong>? <br> Cette action est <strong>irréversible!</strong></p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
		<button onClick='document.location.href="remove?id=<?php echo $clt->id_clt; ?>";' data-dismiss="modal" class="btn btn-primary">Confirm</button>
	</div>
</div>
<!-- Modale de confirmation de suppression -->

<!-- Modale de banissement client -->
<div id="myModal_ban" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_ban" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel_ban">Confirmation de banissement</h3>
	</div>
	<div class="modal-body">
		<form action="" method="post">
		<p>Raison de banissement:</p>
		<textarea name="ban_raison" style="resize: vertical; width:90%; max-height:150px;" rows="4" required></textarea>
		<input type="hidden" name="id_clt" value="<?php echo $clt->id_clt; ?>">
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
		<input type="submit" class="btn btn-primary" value="Confirmer"/>
		</form>
	</div>
</div>
<!-- Modale de banissement client -->



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