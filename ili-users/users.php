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
						<h4><i class="icon-user"></i>Sakly Ayoub (ADMIN)</h4>
						<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
					<div class="widget-body">
						<div class="span3">
							<div class="text-center profile-pic"> <img src="img/profile-pic.jpg" alt=""> </div>
							<ul class="nav nav-tabs nav-stacked">
								<img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAXRAAAAJDhjOGZiMzFkLWQzODItNGMzZC1hZDMzLWVhYWNhODk3YjZhNA.jpg"><br>
								<br>
								<li><a href="https://www.facebook.com/saklyayoub" target="new"><i class="icon-facebook"></i> Facebook</a></li>
								<li><a href="https://tn.linkedin.com/pub/sakly-ayoub/91/693/ba2" target="new"><i class="icon-linkedin"></i> LinkedIn</a></li>
								<li><a href="https://github.com/saklyayoub" target="new"><i class="icon-github"></i> Github</a></li>
							</ul>
						</div>
						<div class="span6">
							<h4>CEO&Founder iLi-Studios<br/></h4>
							<table class="table table-borderless">
								<tbody>
									<tr>
										<td class="span2">Naissance :</td>
										<td>2015-09-22</td>
									</tr>
									<tr>
										<td class="span2"> Email :</td>
										<td>sakly@ili-studios.com</td>
									</tr>
									<tr>
										<td class="span2"> Mobile :</td>
										<td> 20666996 </td>
									</tr>
									<tr>
										<td class="span2">Grade :</td>
										<td>ADMIN</td>
									</tr>
								</tbody>
							</table>
							<h4>Compétances</h4>
							<table class="table table-borderless">
								<tbody>
									<tr>
										<td class="span1"><span class="label label-inverse">JQuery</span></td>
										<td><div class="progress progress-danger progress-striped">
												<div style="width: 10%" class="bar"></div>
											</div></td>
									</tr>
									<tr>
										<td class="span1"><span class="label label-inverse">PHP</span></td>
										<td><div class="progress progress-success progress-striped">
												<div style="width: 80%" class="bar"></div>
											</div></td>
									</tr>
									<tr>
										<td class="span1"><span class="label label-inverse">HTML5</span></td>
										<td><div class="progress progress-warning progress-striped">
												<div style="width: 50%" class="bar"></div>
											</div></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="span3">
							<h4>Dérnier diplômes</h4>
							<ul class="icons push">
								<li><i class="icon-hand-right"></i> <strong>Certificat de fin de formation<br>
									Projet : Création d'une boite de développement</strong><br/>
									<em>Mannouba, 2015</em><br/>
									<em><strong>API</strong></em><br>
								</li>
							</ul>
							<h4>Dériniére expérance</h4>
							<ul class="icons push">
								<li><i class="icon-hand-right"></i> <strong>S.I.V (Rades, Tunis)</strong><br/>
									<em>Durée : Jan. - Mars 2013</em><br/>
									<em>&nbsp;&nbsp;&nbsp;Conception, Développement, et integration de système de gestion des serveurs de jeux avec un site de factorisation sur un serveur VPS a base de Linux.<br>
									Administration de serveur Linux, Création de solution de backup automatisé.</em><br>
									<a href="" target="new"></a>
								</li>
							</ul>
						</div>
						<div class="space5"></div>
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