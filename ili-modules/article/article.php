<?php 
include"../../ili-functions/functions.php";
autorisation('2');
autorisation_double_check_privilege('ARTICLES', 'S');
$id_art=$_GET['id'];
$art=get_art_info($id_art);
if($art==''){redirect('index?message=22');}
$createur=get_user_info($art->created_by);
function users_pannel($id, $art){
	// ADMIN
	if($_SESSION['user_id_rank']==3){
		//C
		echo'<a href="add" class="icon-plus tooltips" data-original-title="Ajouter"></a>';
		//U
		echo'<a href="edit?id='.$art->code_art.'" class="icon-edit tooltips" data-original-title="Modifier"></a>';
		//D
		echo'<a href="#myModal_del" class="icon-trash tooltips" data-toggle="modal" data-original-title="Supprimer"></a>';
		//CONFIG=U
		echo'<a href="conf/conf" class="icon-cogs tooltips" data-original-title="Configuration"></a>';
	}
	// USER
	if($_SESSION['user_id_rank']==2){
		$up=user_privileges("CLIENTS", $_SESSION['user_id']);$s=$up->s;$c=$up->c;$u=$up->u;$d=$up->d;
		//S
		if(!$s){echo'<script language="Javascript">document.location.href="../../index?message=17"</script>';}
		//C
		if($c){echo'<a href="add" class="icon-plus tooltips" data-original-title="Ajouter"></a>';}
		//U
		if($u){echo'<a href="edit?id='.$art->code_art.'" class="icon-edit tooltips" data-original-title="Modifier"></a>';}
		//D
		if($d){echo'<a href="#myModal_del" class="icon-trash tooltips" data-toggle="modal" data-original-title="Supprimer"></a>';}
		//U
		if($u){echo'<a href="conf" class="icon-cogs tooltips" data-original-title="Configuration"></a>';}
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
	<link href="../../ili-style/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="../../ili-style/css/style.css" rel="stylesheet" />
	<link href="../../ili-style/css/style_responsive.css" rel="stylesheet" />
	<link href="../../ili-style/css/style_default.css" rel="stylesheet" id="style_color" />

	<link rel="stylesheet" type="text/css" href="../../ili-style/assets/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="../../ili-style/assets/uniform/css/uniform.default.css" />
	<link href="../../ili-style/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />

    <!-- jquery slider -->
    <link rel="stylesheet" href="../../ili-style/assets/jslider/css/jslider.css" type="text/css">
    <link rel="stylesheet" href="../../ili-style/assets/jslider/css/jslider.blue.css" type="text/css">
    <link rel="stylesheet" href="../../ili-style/assets/jslider/css/jslider.plastic.css" type="text/css">
    <link rel="stylesheet" href="../../ili-style/assets/jslider/css/jslider.round.css" type="text/css">
    <link rel="stylesheet" href="../../ili-style/assets/jslider/css/jslider.round.plastic.css" type="text/css">
    <!-- end -->
</head>
<style>
#input{
	width:5%;
	height:25px;
	padding-left:9px;
	font-size:11.844px;
	line-height:14px;
	white-space:nowrap;
	vertical-align:baseline;
	box-shadow:none;
	font-family: "Arial";
	font-size:13px;
	margin-left:-0.15%;
	padding:-1%, -1%;
	border:none;
}
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
					<h3 class="page-title"> Article <small> Fiche Article</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="#" onclick="history.go(-1); return false;">Article</a><span class="divider">&nbsp;</span></li>
						<li><a href="../article/article?id=<?php echo $id_art; ?>">Fiche</a><span class="divider-last">&nbsp;</span></li>
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
                            <h4><i class="icon-reorder"></i> Fiche Article</h4>
                            <span class="tools">
								<?php users_pannel($_SESSION['user_id'], $art);?>
								<a href="javascript:;" class="icon-chevron-down"></a>
							</span>
                        </div>
						
						<div class="widget-body">
                            <div class="span8">
                                <h3><?php echo $art->designation_art; ?><small></small></h3>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span4">Code</td>
                                        <td><?php echo $art->code_art; ?></td>
                                    </tr>
									<tr>
                                        <td class="span4">Type</td>
                                        <td><?php echo $art->type_art; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="span4">Famille</td>
                                        <td><?php echo $art->famille_art; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="span4">Unité</td>
                                        <td><?php echo $art->unite_art; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h4>Prix de ventes</h4>
                                <div class="well">
                                	<table width="98%">
                                        <tr>
                                            <td width="34%">PRIX VENTE U.HT</td>
                                            <td><?php echo $art->prix_vente_ht; ?> TND</td>
                                        </tr>
                                        <tr>
                                        	<td>TVA</td>
                                        	<td><?php echo $art->tva_art; ?> %</td>
                                    	</tr>
                                        <tr>
                                     	<td>Max Remise %</td>
                                        <td><?php echo $art->max_remise_art; ?> %</td>
                                    </tr>
                                        <!--<tr>
                                            <td>PRIX VENTE U.TTC</td>
                                            <td><strong><?php /*printf("%.3f",(( $art->prix_vente_ht * $art->tva_art / 100 ) + $art->prix_vente_ht))*/ ?> TND</strong></td>
                                        </tr>-->
                                    </table>
                                </div>
                            </div>
                            <div class="span4"><br>
                            	<h4>CALCULE</h4>
                                <div class="well">
                                	<table width="100%">
                                    	<tr>
                                        	<td width="50%">PRIX VENTE U.HT</td>
                                            <td width="50%"><input id="p_ht" class="span8" value="<?php echo $art->prix_vente_ht; ?>"/> TND</td>
                                        </tr>
                                        <tr>
                                        	<td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                        	<td>REMISE EN %</td>
                                            <td><input id="r" class="span5" value="" onChange="Calculate();" autofocus/> %</td>
                                        </tr>
                                        
                                        <tr>
                                        	<td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                        	<td>TVA Assujetti</td>
                                            <td>TVA Non Assujetti</td>
                                        </tr>
                                        <tr>
                                        	<td><input id="tva_a" class="span5" value="<?php echo $art->tva_art; ?>"/> %</td>
                                            <td><input id="tva_na" class="span5" value="<?php echo $art->tva_art; ?>"/> %</td>
                                        </tr>
                                        <tr>
                                        	<td>Assujetti à la TVA</td>
                                            <td>Non Assujetti à la TVA</td>
                                        </tr>
                                        <tr>
                                        	<td><strong><input id="p_ttc_a" class="span8"/> TND</strong></td>
                                            <td><strong><input id="p_ttc_na" class="span8"/> TND</strong></td>
                                        </tr>
                                        <script>
										function Calculate()
										{
										  var p_ht = document.getElementById('p_ht').value;
										  var r = document.getElementById('r').value;
										  var tva_a = document.getElementById('tva_a').value;
										  var tva_na = document.getElementById('tva_na').value;
										  var p_ttc_a = p_ht-0.01*p_ht*r + 0.01*tva_a*p_ht-0.01*p_ht*r;
										  var p_ttc_na = p_ht-0.01*p_ht*r + 0.01*tva_na*p_ht-0.01*p_ht*r;
										  
										  document.getElementById('p_ttc_a').value=  p_ttc_a.toFixed(3) ;
										  document.getElementById('p_ttc_na').value=  p_ttc_na.toFixed(3) ;
										}
										</script>
                                 	</table>
                                 </div>
                                <div class="alert alert-success"><i class="icon-ok-sign"></i> Crée le, <?php echo $art->created_date; ?> par : <a href="<?php echo $site; ?>ili-users/user_profil?id=<?php echo $art->created_by; ?>"><?php echo $createur->nom.' '.$createur->prenom; ?></a></div>
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
	<script src="../../ili-style/js/jquery.blockui.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="js/excanvas.js"></script>
	<script src="js/respond.js"></script>
	<![endif]-->
	<script type="text/javascript" src="../../ili-style/assets/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="../../ili-style/assets/gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="../../ili-style/js/jquery.pulsate.min.js"></script>
	<script src="../../ili-style/assets/fancybox/source/jquery.fancybox.pack.js"></script>

    <!-- jquery slider -->
    <script type="text/javascript" src="../../ili-style/assets/jslider/js/jshashtable-2.1_src.js"></script>
    <script type="text/javascript" src="../../ili-style/assets/jslider/js/jquery.numberformatter-1.2.3.js"></script>
    <script type="text/javascript" src="../../ili-style/assets/jslider/js/tmpl.js"></script>
    <script type="text/javascript" src="../../ili-style/assets/jslider/js/jquery.dependClass-0.1.js"></script>
    <script type="text/javascript" src="../../ili-style/assets/jslider/js/draggable-0.1.js"></script>
    <script type="text/javascript" src="../../ili-style/assets/jslider/js/jquery.slider.js"></script>
    <!-- end -->

	<script src="../../ili-style/js/scripts.js"></script>

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