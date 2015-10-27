<?php include"../ili-functions/functions.php";?>
<?php autorisation('2'); ?>
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
					<h3 class="page-title"> Dashboard <small> Utilisateurs du système</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site ; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="<?php echo $site ; ?>ili-users/users">Utilisateurs du système</a><span class="divider-last">&nbsp;</span></li>
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
							<h4><i class="icon-reorder"></i>Sakly Ayoub (ADMIN)</h4>
							<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
						<div class="widget-body">
							<table width="100%">
								<tr>
									<td width="33%">
										
										<table width="80%">
											<tbody class="table table-borderless">
												<tr><td colspan="2"><h4>Sakly Ayoub</h4></td></tr>
												<tr><td>Nom : </td><td>Sakly</td></tr>
												<tr><td>Prenom : </td><td>Ayoub</td></tr>
												<tr><td>Poste : </td><td>CEO&Founder iLi-Studios</td></tr>
												<tr><td>GRADE : </td><td>ADMIN</td></tr>
												<tr><td>Email : </td><td>sakly@ili-studios.com</td></tr>
												<tr><td>Tel : </td><td>20666996</td></tr>
												<tr><td>Naissance : </td><td>22/09/1988</td></tr>
												<tr><td>Dérniére expérance : </td><td>S.I.V (Rades, Tunis)</td></tr>
												<tr><td>Dérnier diplôme : </td><td>Certificat de fin de formation
Projet : Création d'une boite de développement</td></tr>
											</tbody>
										</table>
									</td>
									<td width="33%">
										<h4>Compétance</h4>
                              			<table class="table table-borderless">
											<tbody>
											<tr>
												<td class="span1"><span class="label label-inverse">HTML</span></td>
												<td>
													<div class="progress progress-success progress-striped">
														<div style="width: 90%" class="bar"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="span1"><span class="label label-inverse">CSS</span></td>
												<td>
													<div class="progress progress-warning progress-striped">
														<div style="width: 85%" class="bar"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="span1"><span class="label label-inverse">Javascript</span></td>
												<td>
													<div class="progress progress-success progress-striped">
														<div style="width: 60%" class="bar"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="span1"><span class="label label-inverse">PHP</span></td>
												<td>
													<div class="progress progress-success progress-striped">
														<div style="width: 40%" class="bar"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="span1"><span class="label label-inverse">Photoshop</span></td>
												<td>
													<div class="progress progress-warning progress-striped">
														<div style="width: 80%" class="bar"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="span1"><span class="label label-inverse">Node.js</span></td>
												<td>
													<div class="progress progress-danger progress-striped">
														<div style="width: 45%" class="bar"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="span1"><span class="label label-inverse">Java</span></td>
												<td>
													<div class="progress progress-danger progress-striped">
														<div style="width: 10%" class="bar"></div>
													</div>
												</td>
											</tr>
											</tbody>
										</table>
									</td>
									<td width="33%"><img src="<?php echo $_SESSION['user_img'] ;?>"/></td>
								</tr>
							</table>
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
<?php include"../ili-functions/fragments/footer.php";?>
<script>jQuery(document).ready(function() {App.init();});</script>