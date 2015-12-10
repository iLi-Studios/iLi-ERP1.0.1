<?php 
include"../../ili-functions/functions.php";
autorisation('2');
autorisation_double_check_privilege('ARTICLES', 'S');
$type_art=$_GET['type'];
function get_art_list($type_art){
	$q="SELECT * FROM article WHERE type_art='$type_art'";
	$r=query_excute_while($q);
	while ($o=mysqli_fetch_object($r)){
		echo'
		<tr class="odd gradeX">
			<td><input type="checkbox" class="checkboxes" value="1" /></td>
			<td><a href="article?id='.$o->code_art.'">'.$o->code_art.'</a></td>
			<td class="hidden-phone">'.$o->famille_art.'</td>
			<td class="hidden-phone"><a href="article?id='.$o->code_art.'">'.$o->designation_art.'</a></td>
			<td class="hidden-phone">'.$o->unite_art.'</td>
			<td class="hidden-phone">'.$o->prix_vente_ht.'</td>
			<td class="hidden-phone">'.$o->tva_art.'% </td>
			<td class="hidden-phone">'.$o->max_remise_art.'% </td>
		</tr>
		';
	}
}
function users_pannel($id){
	global $site;
	//ADMIN
	if($_SESSION['user_id_rank']==3){
		//C
		echo'<a href="add" class="icon-plus tooltips" data-original-title="Ajouter"></a>';
		//CONFIG=U
		echo'<a href="conf/conf" class="icon-cogs tooltips" data-original-title="Configuration"></a>';
	}
	//USER
	if($_SESSION['user_id_rank']==2){
		$up=user_privileges("ARTICLES", $_SESSION['user_id']);$c=$up->c;
		//C
		if($c){echo'<a href="add" class="icon-plus tooltips" data-original-title="Ajouter"></a>';}
	}
}
if(($type_art=='FABRIQUEE') && (isset($_POST['STANDARD'])) ){redirect('ili-modules/article/liste?type=STANDARD');}
if(($type_art=='STANDARD') && (isset($_POST['FABRIQUEE'])) ){redirect('ili-modules/article/liste?type=FABRIQUEE');}
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
	<meta content="iLi-ERP" name="description" />
	<meta content="SAKLY AYOUB" name="author" />
	<link href="../../ili-style/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../ili-style/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
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
					<h3 class="page-title"> Articles <small> Liste</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="liste?type=STANDARD">Articles</a><span class="divider-last">&nbsp;</span></li>
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
                            <h4><i class="icon-reorder"></i>Liste des articles</h4>
                            <span class="tools"><?php users_pannel($_SESSION['user_id']);?></span>
                        </div>
                        <div class="widget-body">
                            <form action="" class="form-horizontal" method="post">
								<div class="control-group">
									<label class="control-label">Nature d'article*</label>
									<div class="controls">
										<label class="radio">
											<input type="radio" name="STANDARD" value="STANDARD" <?php if($type_art=='STANDARD'){echo'checked';} ?> onChange="this.form.submit()"/>STANDARD
										</label>
										<label class="radio">
											<input type="radio" name="FABRIQUEE" value="FABRIQUEE" <?php if($type_art=='FABRIQUEE'){echo'checked';} ?> onChange="this.form.submit()"/>FABRIQUEE
										</label>
									</div>
								</div>
                            </form><br>
                            <table class="table table-striped table-bordered" id="sample_1">
								<thead>
									<tr>
										<th width="1%"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
										<th width="4%">Code</th>
                                        <th width="10%">Famille</th>
										<th class="hidden-phone" width="48%">Designation</th>
										<th class="hidden-phone" width="7%">Unité</th>
										<th class="hidden-phone" width="10%">PV.U.HT</th>
										<th class="hidden-phone" width="5%">TVA %</th>
										<th class="hidden-phone" width="5%">R.M %</th>
									</tr>
								</thead>
								<tbody><?php get_art_list($type_art); ?></tbody>
                        	</table>
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
<script src="../../ili-style/js/scripts.js"></script> 
<script src="../../ili-style/assets/bootstrap/js/bootstrap.min.js"></script> 
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
<script type="text/javascript" src="../../ili-style/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>  
<script type="text/javascript" src="../../ili-style/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/data-tables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="../../ili-style/assets/data-tables/DT_bootstrap.js"></script>
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