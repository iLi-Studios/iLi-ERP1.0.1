<?php 
include"../../ili-functions/functions.php";
autorisation('2');
autorisation_double_check_privilege('ARTICLES', 'U');
$id_art=$_GET['id'];
$art=get_art_info($id_art);
if($art==''){redirect('index?message=22');}
$createur=get_user_info($art->created_by);
function modif_art($id_art, $id_type, $id_famille_art, $designation_art, $id_unit_art, $id_tva_art, $prix_vente_ht, $max_remise_art){
	global $site;
	$q="
	UPDATE `article` SET 
	`id_type` 			= '$id_type',
	`id_famille_art`	= '$id_famille_art',
	`designation_art`	= '$designation_art',
	`id_unit_art`		= '$id_unit_art',
	`id_tva_art`		= '$id_tva_art',
	`prix_vente_ht`		= '$prix_vente_ht',
	`max_remise_art`	= '$max_remise_art'
	WHERE `code_art` ='$id_art';";
	$user_nom=$_SESSION['user_nom'];
	$user_prenom=$_SESSION['user_prenom'];
	query_execute("mysqli_fetch_object", $q);
	notif_all('', '', '<a href="'.$site.'ili-modules/article/article?id='.$id_art.'">'.$user_nom.' '.$user_prenom.' a modifié l article : '.$designation_art);
	write_log("Modification d\'article : <a href=\"ili-modules/article/article?id=".$id_art."\">".$id_art."</a>");
	redirect('ili-modules/article/article?id='.$id_art);
}
if( (isset($_POST['designation_art'])) && (isset($_POST['id_art'])) && (isset($_POST['id_type'])) && (isset($_POST['id_famille_art'])) && (isset($_POST['id_unit_art'])) && (isset($_POST['prix_vente_ht'])) && (isset($_POST['id_tva_art'])) && (isset($_POST['max_remise_art'])) ){
	$id_art				=addslashes($_POST['id_art']);
	$id_type			=addslashes($_POST['id_type']);
	$id_famille_art		=addslashes($_POST['id_famille_art']);
	$designation_art	=addslashes($_POST['designation_art']);
	$id_unit_art		=addslashes($_POST['id_unit_art']);
	$id_tva_art			=addslashes($_POST['id_tva_art']);
	$prix_vente_ht		=addslashes($_POST['prix_vente_ht']);
	$max_remise_art		=addslashes($_POST['max_remise_art']);
	modif_art($id_art, $id_type, $id_famille_art, $designation_art, $id_unit_art, $id_tva_art, $prix_vente_ht, $max_remise_art);
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
#input 			{width:5%;height:25px;padding-left:9px;font-size:11.844px;line-height:14px;white-space:nowrap;vertical-align:baseline;box-shadow:none;font-family: "Arial";font-size:13px;margin-left:-0.15%;padding:-1%, -1%;border:none;}
#nom 	 		{padding-left:9px;border-radius:4px;background-color:#32C2CD;font-size:11.844px;font-weight:bold;line-height:14px;color:#FFF;white-space:nowrap;vertical-align:baseline; border:none;box-shadow:none;font-size:24.5px;margin-left:-0.15%;margin-top:-0.5%;}
#id_art	 		{height:25px;padding-left:9px;border-radius:4px;background-color:#E74955;font-size:11.844px;font-weight:bold;line-height:14px;color:#FFF;white-space:nowrap;vertical-align:baseline; border:none;box-shadow:none;font-size:13px;margin-left:-0.15%;margin-top:-2.2%;margin-bottom:-2%;padding:-1%, -1%;}
#rc 			{height:25px;padding-left:9px;border-radius:4px;background-color:#32C2CD;font-size:11.844px;font-weight:bold;line-height:14px;color:#FFF;white-space:nowrap;vertical-align:baseline; border:none;box-shadow:none;font-size:13px;margin-left:-0.15%;margin-top:-2.2%;margin-bottom:-2%;padding:-1%, -1%;}
#select	 		{position:relative; z-index:100;height:25px;border-radius:4px;background-color:#32C2CD;font-size:11.844px;font-weight:bold;line-height:14px;color:#FFF;white-space:nowrap;vertical-align:baseline; border:none;box-shadow:none;font-size:13px;margin-left:-0.15%;margin-top:-2.2%;margin-bottom:-2%;padding:-1%, -1%;}
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
					<h3 class="page-title"> Article <small> Modification Article</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="../article/liste?type=<?php echo $art->type; ?>">Article</a><span class="divider">&nbsp;</span></li>
                        <li><a href="../article/article?id=<?php echo $id_art; ?>">Fiche</a><span class="divider">&nbsp;</span></li>
						<li><a href="../article/edit?id=<?php echo $id_art; ?>">Modification</a><span class="divider-last">&nbsp;</span></li>
					</ul>
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div class="row-fluid">
				<div class="span12">
                <form action="" method="post" name="form1">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
								<h4><i class="icon-reorder"></i> Fiche Article</h4>
								<span class="tools"><a href="#" onClick="javascript:form1.submit();return false;" class="icon-save tooltips" data-original-title="Enregistrer"></a></span>
							</div>
						
						<div class="widget-body">
                            <div class="span8">
                                <h3><input name="designation_art" value="<?php echo $art->designation_art; ?>" id="nom" class="span12" autofocus required/><small></small></h3>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span4">Code</td>
                                        <td><input class="span6" name="id_art" value="<?php echo $art->code_art; ?>" id="id_art" readonly required/></td>
                                    </tr>
									<tr>
                                        <td class="span4">Type</td>
                                        <input type="hidden" name="id_type" value="<?php echo $art->id_type; ?>"/>
                                        <td><input class="span6" name="type" value="<?php echo $art->type; ?>" id="id_art" readonly required/></td>
                                    </tr>
                                    <tr>
                                        <td class="span4">Famille</td>
                                        <td><select class="span6" name="id_famille_art" id="select"><?php get_all_fam($art->id_famille_art); ?></select></td>
                                    </tr>
                                    <tr>
                                        <td class="span4">Unité</td>
                                        <td><select class="span6" name="id_unit_art" id="select"><?php get_all_unt($art->id_unit_art); ?></select></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h4>Prix de ventes</h4>
                                <div class="well">
                                	<table width="98%">
                                        <tr>
                                            <td width="34%">PRIX VENTE U.HT</td>
                                            <td><input class="span6" name="prix_vente_ht" value="<?php echo $art->prix_vente_ht; ?>" id="rc"/> TND</td>
                                        </tr>
                                        <tr>
                                        	<td>TVA</td>
                                        	<td><select class="span6" name="id_tva_art" id="select"><?php get_all_tva($art->id_tva_art); ?></select> %</td>
                                    	</tr>
                                        <tr>
                                     	<td>Max Remise %</td>
                                        <td><input class="span6" name="max_remise_art" value="<?php echo $art->max_remise_art; ?>" id="rc"/> %</td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="span4"><br>
                            	<h4>CALCULE</h4>
                                <div class="well">
                                	<table width="100%">
                                    	<tr>
                                        	<td width="50%">PRIX VENTE U.HT</td>
                                            <td width="50%"><input id="p_ht" class="span8" value="<?php echo $art->prix_vente_ht; ?>" readonly/> TND</td>
                                        </tr>
                                        <tr>
                                        	<td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
<?php 
$ets=get_ets_info();
	$p_ht 		= $art->prix_vente_ht;
	$tva 		= $art->tva_art;
	$tva_na		= $art->tva_na_art;
	$p_ttc 		= $p_ht + ($p_ht*$tva/100);
	$p_ttc_na	= $p_ht + ($p_ht*$tva_na/100);
	
if($ets->vente_en_gros){
	echo'
										<tr>
                                        	<td>REMISE EN %</td>
                                            <td><input type="number" id="r" class="span8" min="0" max="'.$art->max_remise_art.'" onKeyUp="Calculate_vg();" /> %</td>
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
                                        	<td><input id="tva_a" class="span5" value="'.$art->tva_art.'" readonly/> %</td>
                                            <td><input id="tva_na" class="span5" value="'.$art->tva_na_art.'" readonly/> %</td>
                                        </tr>
										<tr>
                                        	<td>P.TTC ASSUJ. TVA</td>
                                            <td>P.TTC N.ASSUJ. TVA</td>
                                        </tr>
										<tr>
                                        	<td><strong><input id="p_ttc_a" class="span8" value="'.sprintf("%.3f", $p_ttc).'" readonly/> TND</strong></td>
                                            <td><strong><input id="p_ttc_na" class="span8" value="'.sprintf("%.3f", $p_ttc_na).'" readonly/> TND</strong></td>
                                        </tr>
	';
}
else{
	echo'
										<tr>
                                        	<td>REMISE EN %</td>
                                            <td><input type="number" id="r" class="span8" min="0" max="'.$art->max_remise_art.'" onKeyUp="Calculate();" /> %</td>
                                        </tr>
										<tr>
                                        	<td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
										<tr>
                                        	<td>TVA </td>
                                            <td><input id="tva_a" class="span8" value="'.$art->tva_art.'" readonly/> %</td>
                                        </tr>
										<tr>
                                        	<td>P.TTC</td>
                                            <td><strong><input id="p_ttc_a" class="span8" value="'.sprintf("%.3f", $p_ttc).'" readonly/> TND</strong></td>
                                        </tr>
	';
}
?>
<script>
function Calculate_vg(){
	var p_ht = document.getElementById('p_ht').value;
	var r = document.getElementById('r').value;
	var tva_a = document.getElementById('tva_a').value;
	var tva_na = document.getElementById('tva_na').value;
 
	var p_ttc_a =  ( p_ht - ( (r / 100) * p_ht ) ) + ( ( p_ht - ( (r / 100) * p_ht ) ) * ( tva_a / 100 ) );
	var p_ttc_na = ( p_ht - ( (r / 100) * p_ht ) ) + ( ( p_ht - ( (r / 100) * p_ht ) ) * ( tva_na / 100 ) );
										  
	document.getElementById('p_ttc_a').value=  p_ttc_a.toFixed(3) ;
	document.getElementById('p_ttc_na').value=  p_ttc_na.toFixed(3) ;
}
</script>
<script>
function Calculate(){
	var p_ht = document.getElementById('p_ht').value;
	var r = document.getElementById('r').value;
	var tva_a = document.getElementById('tva_a').value;
 
	var p_ttc_a =  ( p_ht - ( (r / 100) * p_ht ) ) + ( ( p_ht - ( (r / 100) * p_ht ) ) * ( tva_a / 100 ) );
										  
	document.getElementById('p_ttc_a').value=  p_ttc_a.toFixed(3) ;
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
                    </form>
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