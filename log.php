<?php 
include"ili-functions/functions.php";
autorisation('2');
function log_read(){
	$query="SELECT * FROM `system_log` ORDER BY id DESC";
	$result=query_excute_while($query);
	while ($o=mysqli_fetch_object($result)){
		echo'
			<tr class="odd gradeX">
				<th><input type="checkbox" class="group-checkable"/></th>
				<th>'.$o->id.'</th>
				<th><a href="ili-users/user_profil?id='.$o->id_user.'">'.$o->id_user.'</a></th>
				<th class="hidden-phone">'.$o->operation.'</th>
				<th class="center hidden-phone">'.$o->date_operation.'</th>
			</tr>
			';
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
<link href="ili-style/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="ili-style/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="ili-style/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="ili-style/css/style.css" rel="stylesheet" />
<link href="ili-style/css/style_responsive.css" rel="stylesheet" />
<link href="ili-style/css/style_default.css" rel="stylesheet" id="style_color" />
<link href="ili-style/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="ili-style/assets/uniform/css/uniform.default.css" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<?php include"ili-functions/fragments/page_header.php";?>
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
	<?php include"ili-functions/fragments/sidebar.php";?>
	<!-- BEGIN PAGE -->
	<div id="main-content"> 
		<!-- BEGIN PAGE CONTAINER-->
		<div class="container-fluid"> 
			<!-- BEGIN PAGE HEADER-->
			<div class="row-fluid">
				<div class="span12"> 
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title"> Utilisateurs <small> Profil</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site;?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li> <a href="">Journal du système</a><span class="divider-last">&nbsp;</span></li>
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
			<!-- BEGIN ADVANCED TABLE widget-->
			<div class="row-fluid">
				<div class="span12"> 
					<!-- BEGIN EXAMPLE TABLE widget-->
					<div class="widget">
						<div class="widget-title">
							<h4><i class="icon-reorder"></i> Journal système</h4>
							<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
						<div class="widget-body">
							<table class="table table-striped table-bordered" id="sample_1">
								<thead>
									<tr>
										<th width="2%"></th>
										<th width="3%">Id</th>
										<th width="10%">Opératuer</th>
										<th class="hidden-phone" width="70%">Opération</th>
										<th class="hidden-phone" width="15%">Date</th>
									</tr>
								</thead>
								<!--<script>
								 $(document).ready(function() {
									 $("#log-table").load("ili-functions/log.php");
								   var refreshId = setInterval(function() {
									  $("#log-table").load('ili-functions/log.php?randval='+ Math.random());
								   }, 3000);
								   $.ajaxSetup({ cache: false });
								});
								</script>-->
								<tbody><?php log_read();?></tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE widget--> 
				</div>
			</div>
			
			<!-- END ADVANCED TABLE widget--> 
			
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
<script src="ili-style/js/jquery-1.8.3.min.js"></script> 
<script src="ili-style/assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="ili-style/js/jquery.blockui.js"></script> 
<!-- ie8 fixes --> 
<!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]--> 
<script type="text/javascript" src="ili-style/assets/uniform/jquery.uniform.min.js"></script> 
<script type="text/javascript" src="ili-style/assets/data-tables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="ili-style/assets/data-tables/DT_bootstrap.js"></script> 
<script src="ili-style/js/scripts.js"></script> 
<script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
</body>
<!-- END BODY -->
</html>
