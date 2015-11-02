<?php 
include"../ili-functions/functions.php";
autorisation('2');
$id_user=$_GET['id'];
// get user info from id
function get_user_info($id){
	$query="SELECT * FROM users, users_rank WHERE users.id_user='$id' AND users.id_rank=users_rank.id_rank";
	if($o=(query_execute("mysqli_fetch_object", $query))){return $o;}
}
$user=get_user_info($id_user);
function get_users_skills($id){
	$query="SELECT * FROM users_skills WHERE id_user='$id' ORDER BY id DESC;";
	if(query_execute('mysqli_num_rows', $query)=='0'){echo"<strong>PAS DE COMPETANCE!</strong>";}
	else{
		$result=query_excute_while($query);
		while ($o=mysqli_fetch_object($result)){
			if($o->pourcentage >= '0' && $o->pourcentage <= '33'){$color='danger';}
			if($o->pourcentage >'33' && $o->pourcentage <= '66'){$color='warning';}
			if($o->pourcentage >'66' && $o->pourcentage <= '100'){$color='success';}
			echo'
				<tr>
					<td class="span1"><span class="label label-inverse">'.$o->skills.'</span></td>
					<td>
						<div class="progress progress-'.$color.' progress-striped">
							<div style="width: '.$o->pourcentage.'%" class="bar"></div>
						</div>
					</td>
				</tr>';
		}
	}
}
function get_users_diploma($id){
	$query="SELECT * FROM users_diploma WHERE id_user='$id' ORDER BY id DESC;";
	if(query_execute('mysqli_num_rows', $query)=='0'){echo"<strong>PAS DE DIPLOME!</strong>";}
	else{
		$result=query_excute_while($query);
		while ($o=mysqli_fetch_object($result)){
			echo'	<li><i class="icon-hand-right"></i>
						<strong>'.$o->diplome.'</strong><br/>
						<em>'.$o->lieux.', '.$o->annee.'</em><br/>
						<em><strong>'.$o->etablissement.'</strong></em><br>
					</li><br>';
		}
	}
}
function get_users_expirance($id){
	$query="SELECT * FROM users_expirance WHERE id_user='$id' ORDER BY id DESC;";
	if(query_execute('mysqli_num_rows', $query)=='0'){echo"<strong>PAS D'EXPERANCE!</strong>";}
	else{
		$result=query_excute_while($query);
		while ($o=mysqli_fetch_object($result)){
			echo'	<li><i class="icon-hand-right"></i>
						<strong>'.$o->company.'</strong><br/>
						<em>Durée : '.$o->duration.'</em><br/>
						<em>&nbsp;&nbsp;&nbsp;'.$o->experience.'</em><br>
						<a href="'.$o->company_url.'" target="new">'.$o->company_url.'</a>
					</li><br>';
		}
	}
}
function age($date){return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);}?>
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
<link href="../ili-style/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="../ili-style/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="../ili-style/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="../ili-style/css/style.css" rel="stylesheet" />
<link href="../ili-style/css/style_responsive.css" rel="stylesheet" />
<link href="../ili-style/css/style_default.css" rel="stylesheet" id="style_color" />
<link href="../ili-style/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/uniform/css/uniform.default.css" />
<link href="../ili-style/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
<link href="../ili-style/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
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
					<h3 class="page-title"> Utilisateurs <small> Profile</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site;?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li> <a href="users">Utilisateurs du système</a> <span class="divider">&nbsp;</span></li>
						<li> <a href="user_profile?id=<?php echo $id_user ;?>">Profile</a><span class="divider-last">&nbsp;</span></li>
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
					<div class="widget">
						<div class="widget-title">
							<h4><i class="icon-user"></i> Profile</h4>
							<span class="tools">
							<?php
								// on peut modifier si
								// DEV || ADMIN || (UTILISATEUR dans le profil ouvert et le sien)
								if( ($_SESSION['user_id_rank']==6) || ($_SESSION['user_id_rank']==5) || ($_SESSION['user_id']==$id_user) ){
									echo'<a href="user_edit?id='.$id_user.'" class="icon-edit tooltips" data-original-title="Modifier"></a>';
								}?>
							</span> </div>
						<div class="widget-body">
							<div class="span3">
								<div class="text-center profile-pic">
									<?php if($user->img_link!=''){echo'<img src="'.$user->img_link.'" width="100%" height="226px;">';}?>
								</div>
								<ul class="nav nav-tabs nav-stacked">
									<?php
									if($user->fb){echo'<li><a href="'.$user->fb.'" target="new"><i class="icon-facebook"></i> Facebook</a></li>';}
									if($user->linkedin){echo'<li><a href="'.$user->linkedin.'" target="new"><i class="icon-linkedin"></i> LinkedIn</a></li>';}
									if($user->github){echo'<li><a href="'.$user->github.'" target="new"><i class="icon-github"></i> Github</a></li>';}
									?>
								</ul>
							</div>
							<div class="span6">
								<h4><?php echo $user->nom; ?> <?php echo $user->prenom; ?><br/>
									<small><?php echo $user->poste; ?></small></h4>
								<table class="table table-borderless">
									<tbody>
										<tr>
											<td class="span2">CIN :</td>
											<td><?php echo $id_user ;?></td>
										</tr>
										<tr>
											<td class="span2">Nom :</td>
											<td><?php echo $user->nom; ?></td>
										</tr>
										<tr>
											<td class="span2">Prénom :</td>
											<td><?php echo $user->prenom; ?></td>
										</tr>
										<tr>
											<td class="span2">Age :</td>
											<td><?php echo age($user->date_naissance);?> ans</td>
										</tr>
										<tr>
											<td class="span2">Poste :</td>
											<td><?php echo $user->poste; ?></td>
										</tr>
										<tr>
											<td class="span2"> Email :</td>
											<td><?php echo $user->email; ?></td>
										</tr>
										<tr>
											<td class="span2"> Mobile :</td>
											<td><?php echo $user->tel; ?></td>
										</tr>
										<tr>
											<td class="span2">Grade :</td>
											<td><?php echo $user->rank; ?></td>
										</tr>
										<tr>
											<td class="span2">Ajouté le :</td>
											<td><?php echo $user->created_date; ?> Par <?php echo $user->created_by; ?></td>
										</tr>
										<tr>
											<td class="span2">Mot de passe mise à jour le :</td>
											<td><?php echo $user->mdp_update_date; ?></td>
										</tr>
									</tbody>
								</table>
								<h4>Compétances</h4>
								<table class="table table-borderless">
									<tbody>
										<?php get_users_skills($id_user); ?>
									</tbody>
								</table>
								<h4>Adresse</h4>
								<div class="well">
									<address>
									<strong><?php echo $user->nom; ?> <?php echo $user->prenom; ?></strong><br>
									<?php echo $user->adresse; ?><br>
									</address>
									<address>
									<abbr title="Phone">P:</abbr><?php echo $user->tel; ?><br>
									<a href="mailto:<?php echo $user->email; ?>"><?php echo $user->email; ?></a>
									</address>
								</div>
							</div>
							<div class="span3">
								<h4>Diplômes</h4>
								<ul class="icons push">
									<?php get_users_diploma($id_user);?>
								</ul>
								<h4>Expérance</h4>
								<ul class="icons push">
									<?php get_users_expirance($id_user);?>
								</ul>
							</div>
							<div class="space5"></div>
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
<div id="footer"><?php echo $copy_right;?>
	<div class="span pull-right"> <span class="go-top"><i class="icon-arrow-up"></i></span> </div>
</div>
<!-- END FOOTER --> 
<!-- BEGIN JAVASCRIPTS --> 
<!-- Load javascripts at bottom, this will reduce page load time --> 
<script src="../ili-style/js/jquery-1.8.3.min.js"></script> 
<script src="../ili-style/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script> 
<script src="../ili-style/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script> 
<script src="../ili-style/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script> 
<script src="../ili-style/assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="../ili-style/js/jquery.blockui.js"></script> 
<script src="../ili-style/js/jquery.cookie.js"></script> 
<!-- ie8 fixes --> 
<!--[if lt IE 9]>
        <script src="../ili-style/js/excanvas.js"></script>
        <script src="../ili-style/js/respond.js"></script>
        <![endif]--> 
<script src="../ili-style/assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script> 
<script src="../ili-style/assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script> 
<script src="../ili-style/assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script> 
<script src="../ili-style/assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script> 
<script src="../ili-style/assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script> 
<script src="../ili-style/assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script> 
<script src="../ili-style/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script> 
<script src="../ili-style/assets/jquery-knob/js/jquery.knob.js"></script> 
<script src="../ili-style/assets/flot/jquery.flot.js"></script> 
<script src="../ili-style/assets/flot/jquery.flot.resize.js"></script> 
<script src="../ili-style/assets/flot/jquery.flot.pie.js"></script> 
<script src="../ili-style/assets/flot/jquery.flot.stack.js"></script> 
<script src="../ili-style/assets/flot/jquery.flot.crosshair.js"></script> 
<script src="../ili-style/js/jquery.peity.min.js"></script> 
<script type="text/javascript" src="../ili-style/assets/uniform/jquery.uniform.min.js"></script> 
<script type="text/javascript" src="../ili-style/assets/data-tables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="../ili-style/assets/data-tables/DT_bootstrap.js"></script> 
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
