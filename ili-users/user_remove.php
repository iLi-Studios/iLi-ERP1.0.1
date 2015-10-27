<?php include"../ili-functions/functions.php";?>
<?php 
autorisation('6', 'ili-users/user_remove'); 
?>
<?php include"../ili-functions/fragments/head.php";?>
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
				<h3 class="page-title"> Dashboard <small> Supression utilisateur</small> </h3>
				<ul class="breadcrumb">
					<li> <a href="<?php echo $site ; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
					<li><a href="<?php echo $site ; ?>ili-users/users">Utilisateurs du système</a><span class="divider">&nbsp;</span></li>
					<li><a href="<?php echo $site ; ?>ili-users/users_edit">Supprission</a><span class="divider-last">&nbsp;</span></li>
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
			
			
			
			
			</div>
			<!-- END PAGE CONTENT--> 
		</div>
		<!-- END PAGE CONTAINER--> 
	</div>
	<!-- END PAGE --> 
</div>
<!-- END CONTAINER -->
<?php include"../ili-functions/fragments/footer.php";?>
<script>jQuery(document).ready(function() {App.init();});</script>