<?php include"../ili-functions/functions.php";?>
<?php
// get user info from id
function get_user_info($id){
	$query="SELECT * FROM users, rank, users_rank WHERE users.id_user=users_rank.id_user AND rank.id_rank=users_rank.id_rank AND users.id_user='$id';";
	if($o=(query_execute("mysqli_fetch_object", $query))){return $o;}
}
$user=get_user_info($_SESSION['user']);

function get_users_expirance($id){
	$query="SELECT * FROM users_expirance WHERE id_user='$id' ORDER BY id DESC;";
	if(query_execute('mysqli_num_rows', $query)=='0'){echo"PAS D'EXPERANCE";}
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
					<h3 class="page-title"> Profile <small> Gestion de Profile</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site ; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="<?php echo $site ; ?>ili-users/profile">Profile</a><span class="divider-last">&nbsp;</span></li>
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
							<h4><i class="icon-user"></i>Profile</h4>
							<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
						<div class="widget-body">
							<div class="span3">
								<div class="text-center profile-pic"> <img src="img/profile-pic.jpg" alt=""> </div>
								<ul class="nav nav-tabs nav-stacked">
									<li><a href="javascript:void(0)"><i class="icon-facebook"></i> Facebook</a></li>
									<li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
									<li><a href="javascript:void(0)"><i class="icon-linkedin"></i> LinkedIn</a></li>
									<li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
									<li><a href="javascript:void(0)"><i class="icon-github"></i> Github</a></li>
								</ul>
							</div>
							<div class="span6">
								<h4><?php echo $user->nom; ?> <?php echo $user->prenom; ?><br/>
									<small><?php echo $user->poste; ?></small></h4>
								<table class="table table-borderless">
									<tbody>
										<tr>
											<td class="span2">Nom :</td>
											<td><?php echo $user->nom; ?></td>
										</tr>
										<tr>
											<td class="span2">Prénom :</td>
											<td><?php echo $user->prenom; ?></td>
										</tr>
										<tr>
											<td class="span2">Naissance :</td>
											<td><?php echo $user->date_naissance; ?></td>
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
											<td> <?php echo $user->tel; ?> </td>
										</tr>
										<tr>
											<td class="span2">Grade :</td>
											<td><?php echo $user->poste; ?></td>
										</tr>
									</tbody>
								</table>
								<h4>About</h4>
								<p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
								<h4>Skills</h4>
								<table class="table table-borderless">
									<tbody>
										<tr>
											<td class="span1"><span class="label label-inverse">HTML</span></td>
											<td><div class="progress progress-success progress-striped">
													<div style="width: 90%" class="bar"></div>
												</div></td>
										</tr>
										<tr>
											<td class="span1"><span class="label label-inverse">CSS</span></td>
											<td><div class="progress progress-warning progress-striped">
													<div style="width: 85%" class="bar"></div>
												</div></td>
										</tr>
										<tr>
											<td class="span1"><span class="label label-inverse">Javascript</span></td>
											<td><div class="progress progress-success progress-striped">
													<div style="width: 60%" class="bar"></div>
												</div></td>
										</tr>
										<tr>
											<td class="span1"><span class="label label-inverse">PHP</span></td>
											<td><div class="progress progress-success progress-striped">
													<div style="width: 40%" class="bar"></div>
												</div></td>
										</tr>
										<tr>
											<td class="span1"><span class="label label-inverse">Photoshop</span></td>
											<td><div class="progress progress-warning progress-striped">
													<div style="width: 80%" class="bar"></div>
												</div></td>
										</tr>
										<tr>
											<td class="span1"><span class="label label-inverse">Node.js</span></td>
											<td><div class="progress progress-danger progress-striped">
													<div style="width: 45%" class="bar"></div>
												</div></td>
										</tr>
										<tr>
											<td class="span1"><span class="label label-inverse">Java</span></td>
											<td><div class="progress progress-danger progress-striped">
													<div style="width: 10%" class="bar"></div>
												</div></td>
										</tr>
									</tbody>
								</table>
								<h4>Addresse</h4>
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
								<h4>Expérance</h4>
								<ul class="icons push"><?php get_users_expirance($_SESSION['user']);?></ul>
								<h4>Current Status</h4>
								<div class="alert alert-success"><i class="icon-ok-sign"></i> Working in ABC Company</div>
								<h4>Some Projects</h4>
								<ul class="unstyled">
									<li> <strong>Project 1</strong>: <a href="javascript:void(0)">exampleproject1.com</a></li>
									<li> <strong>Project 2</strong>: <a href="javascript:void(0)">exampleproject2.com</a></li>
									<li> <strong>Project 3</strong>: <a href="javascript:void(0)">exampleproject3.com</a></li>
									<li> <strong>Project 4</strong>: <a href="javascript:void(0)">exampleproject4.com</a></li>
									<li> <strong>Project 5</strong>: <a href="javascript:void(0)">exampleproject5.com</a></li>
									<li> <strong>Project 6</strong>: <a href="javascript:void(0)">exampleproject6.com</a></li>
									<li> <strong>Project 7</strong>: <a href="javascript:void(0)">exampleproject7.com</a></li>
									<li> <strong>Project 8</strong>: <a href="javascript:void(0)">exampleproject8.com</a></li>
									<li> <strong>Project 9</strong>: <a href="javascript:void(0)">exampleproject9.com</a></li>
									<li> <strong>Project 10</strong>: <a href="javascript:void(0)">exampleproject10.com</a></li>
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
<?php include"../ili-functions/fragments/footer.php";?>
<script>jQuery(document).ready(function() {App.init();});</script>