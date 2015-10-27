<?php include"../ili-functions/functions.php";?>
<?php 
autorisation('5'); 
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
				<h3 class="page-title"> Dashboard <small> Création utilisateur</small> </h3>
				<ul class="breadcrumb">
					<li> <a href="<?php echo $site ; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
					<li><a href="<?php echo $site ; ?>ili-users/users">Utilisateurs du système</a><span class="divider">&nbsp;</span></li>
					<li><a href="<?php echo $site ; ?>ili-users/user_add">Création</a><span class="divider-last">&nbsp;</span></li>
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
                  <div class="widget box blue" id="form_wizard_1">
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Création Utilisateur</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                     </div>
                     <div class="widget-body form">
                        <form action="#" class="form-horizontal" method="post" enctype="multipart/form-data">
							
							<div class="control-group">
								<label class="control-label">N° CIN</label>
								<div class="controls">
									<input type="text" required name="cin" class="span6  popovers" data-trigger="hover" data-content="Numéro de Carte Identité Nationnale" data-original-title="8 Chiffres" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Nom</label>
								<div class="controls">
									<input type="text" required name="nom" class="span6  popovers" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Prénom</label>
								<div class="controls">
									<input type="text" required name="prenom" class="span6  popovers" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Email</label>
								<div class="controls">
									<input type="email" required name="email" class="span6  popovers" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Tel</label>
								<div class="controls">
									<input type="text" required name="tel" class="span6  popovers" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Facebook URL</label>
								<div class="controls">
									<input type="text" required name="fb" class="span6  popovers" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">LinkedIN URL</label>
								<div class="controls">
									<input type="text" required name="linkedin" class="span6  popovers" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Github URL</label>
								<div class="controls">
									<input type="text" required name="github" class="span6  popovers" />
								</div>
							</div>
							
							
                        </form>
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
<?php include"../ili-functions/fragments/footer.php";?>
<script>jQuery(document).ready(function() {App.init();});</script>