<?php 
include"../../../ili-functions/functions.php";
autorisation('2');
autorisation_double_check_privilege('ARTICLES', 'U');

function unit_art(){
	$q="SELECT * FROM article_unitee";
	$r=query_excute_while($q);
	while ($o=mysqli_fetch_object($r)){
		if(isset($_POST['id_unit_art'])){
			$id=$_POST['id_unit_art'];
			if(isset($_POST['unit'])){$unit_art=addslashes($_POST['unit']);}else{$unit_art='';}
			$q="UPDATE `article_unitee` SET 
						`unit_art`='$unit_art'
				WHERE `id_unit_art`='$id';";
			query_execute_insert($q);
			actualiser();
		}
		echo'
		
		<form name="form1" action="" method="post">
			<tr class="odd gradeX">
				<input type="hidden" name="id_unit_art" value="'.$o->id_unit_art.'"/>
				<td class="hidden-phone"><input name="unit" value="'.$o->unit_art.'" class="input" OnChange="javascript:form1.submit();return false;" /></td>
				<td><a href="rmv_unit?id='.$o->id_unit_art.'" class="icon-trash tooltips" data-original-title="Supprimer"></a></td>
			</tr>
		</form>
		';
	}
}
function add_unit($unit_art){
	$q="INSERT INTO article_unitee VALUES (NULL, '$unit_art');";
	query_execute_insert($q);
	actualiser();
}
if(isset($_POST['add_unit_art'])){
	$unit_art=addslashes($_POST['add_unit_art']);
	add_unit($unit_art);
}

function famille_art(){
	$q="SELECT * FROM article_famille";
	$r=query_excute_while($q);
	while ($o=mysqli_fetch_object($r)){
		if(isset($_POST['id_famille_art'])){
			$id=$_POST['id_famille_art'];
			if(isset($_POST['fam'])){$fam=addslashes($_POST['fam']);}else{$fam='';}
			$q="UPDATE `article_famille` SET `famille_art` = '$fam' WHERE `id_famille_art` = '$id';";
			query_execute_insert($q);
			actualiser();
		}
		echo'
		<form name="form2" action="" method="post">
			<tr class="odd gradeX">
				<input type="hidden" name="id_famille_art" value="'.$o->id_famille_art.'"/>
				<td class="hidden-phone"><input name="fam" value="'.$o->famille_art.'" class="input" OnBlur="javascript:form2.submit();return false;"/></td>
				<td><a href="rmv_fam?id='.$o->id_famille_art.'" class="icon-trash tooltips" data-original-title="Supprimer"></a></td>
			</tr>
		</form>
		';
	}
}
function add_famille($famille){
	$q="INSERT INTO article_famille VALUES (NULL, '$famille');";
	query_execute_insert($q);
	actualiser();
}
if(isset($_POST['add_famille'])){
	$add_famille=addslashes($_POST['add_famille']);
	add_famille($add_famille);
}

function users_pannel($id, $art){
	// ADMIN
	if($_SESSION['user_id_rank']==3){
	}
	// USER
	if($_SESSION['user_id_rank']==2){
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
<link href="../../../ili-style/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="../../../ili-style/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="../../../ili-style/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
<link href="../../../ili-style/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="../../../ili-style/css/style.css" rel="stylesheet" />
<link href="../../../ili-style/css/style_responsive.css" rel="stylesheet" />
<link href="../../../ili-style/css/style_default.css" rel="stylesheet" id="style_color" />
<link rel="stylesheet" type="text/css" href="../../../ili-style/assets/chosen-bootstrap/chosen/chosen.css" />
<link href="../../../ili-style/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../../../ili-style/assets/uniform/css/uniform.default.css" />
</head>
<style>
.input{
	width:98%;
	height:25px;
	padding-left:9px;
	font-size:11.844px;
	line-height:14px;
	color: #868686;
	white-space:nowrap;
	vertical-align:baseline;
	border:none;
	box-shadow:none;
	font-family: "Arial";
	font-size:13px;
	margin-left:-0.15%;
	margin-top:-2.2%;
	margin-bottom:-2%;
	padding:-1%, -1%;
}
</style>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<?php include"../../../ili-functions/fragments/page_header.php";?>
<!-- END HEADER --> 
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid"> 
	<!-- BEGIN SIDEBAR -->
	<?php include"../../../ili-functions/fragments/sidebar.php";?>
	<!-- END SIDEBAR --> 
	<!-- BEGIN PAGE -->
	<div id="main-content"> 
		<!-- BEGIN PAGE CONTAINER-->
		<div class="container-fluid"> 
			<!-- BEGIN PAGE HEADER-->
			<div class="row-fluid">
				<div class="span12">
					<h3 class="page-title"> Article <small> Configurations</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="#" onclick="history.go(-1); return false;">Article</a><span class="divider">&nbsp;</span></li>
						<li><a href="../conf/conf">Configurations</a><span class="divider-last">&nbsp;</span></li>
					</ul>
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div class="row-fluid">
				<div class="span4">
                	<div class="widget">
                    	<div class="widget-title">
                        	<h4><i class="icon-cogs"></i> UNITEE</h4>
                            	<span class="tools">
                                	<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
								</span>							
						</div>
						<div class="widget-body">
                        	<div class="widget-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    	<form name="form11" action="" method="post">
                                            <tr>
                                                <th><input name="add_unit_art" value="" class="input" placeholder="Abriviation Unité"/></th>
                                                <th style="width:8px;"><a href="#" onClick="javascript:form11.submit();return false;" class="icon-plus tooltips" data-original-title="Ajouter"></a></th>
                                            </tr>
                                        </form>
                                    </thead>
                                    <tbody><?php unit_art();?></tbody>
                                </table>
                            </div>
						</div>
					</div>
				</div>
                <div class="span4">
                	<div class="widget">
                    	<div class="widget-title">
                        	<h4><i class="icon-cogs"></i> FAMILLE</h4>
                            	<span class="tools">
                                	<a href="javascript:;" class="icon-chevron-down"></a>
								</span>							
						</div>
						<div class="widget-body">
                        	<div class="widget-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    	<form name="form22" action="" method="post">
                                            <tr>
                                                <th><input name="add_famille" value="" class="input" placeholder="Famille"/></th>
                                                <th style="width:8px;"><a href="#" onClick="javascript:form22.submit();return false;" class="icon-plus tooltips" data-original-title="Ajouter"></a></th>
                                            </tr>
                                        </form>
                                    </thead>
                                    <tbody><?php famille_art(); ?></tbody>
                            	</table>
                            </div>
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
<script src="../../../ili-style/js/jquery-1.8.3.min.js"></script> 
<script src="../../../ili-style/assets/bootstrap/js/bootstrap.min.js"></script> 

<script type="text/javascript" src="../../../ili-style/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/uniform/jquery.uniform.min.js"></script> 
<script src="../../../ili-style/js/scripts.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/ckeditor/ckeditor.js"></script> 
<script src="../../../ili-style/js/jquery.blockui.js"></script> 
<!-- ie8 fixes --> 
<!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]--> 
<script type="text/javascript" src="../../../ili-style/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/uniform/jquery.uniform.min.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/clockface/js/clockface.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/jquery-tags-input/jquery.tagsinput.min.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/bootstrap-daterangepicker/date.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/data-tables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="../../../ili-style/assets/data-tables/DT_bootstrap.js"></script>
<script src="../../../ili-style/assets/fancybox/source/jquery.fancybox.pack.js"></script> 
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