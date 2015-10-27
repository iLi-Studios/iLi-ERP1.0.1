<?php include"../ili-functions/functions.php";?>
<?php 
autorisation('2', 'ili-users/users'); 
//$query2 = "SELECT * FROM users, users_diploma, users_expirance, users_rank, users_skills WHERE users.id_user=users_diploma.id_user AND users.id_user=users_expirance.id_user AND users.id_user=users_rank.id_user AND users.id_user=users_skills.id_user AND users.id_user='$id';";

function get_user_rank($id){
	$query="SELECT * FROM users, rank, users_rank WHERE users.id_user=users_rank.id_user AND rank.id_rank=users_rank.id_rank AND users.id_user='$id';";
	if($o=query_execute("mysqli_fetch_object", $query)){
	return $o->rank;
	}
}

function get_users_last_diploma($id){
	$query="SELECT * FROM users_diploma WHERE id_user='$id' ORDER BY id DESC LIMIT 1;";
	if(query_execute('mysqli_num_rows', $query)=='0'){echo"<strong>PAS DE DIPLOME!</strong>";}
	else{
		$result=query_excute_while($query);
		while ($o=mysqli_fetch_object($result)){
			echo'	<li><i class="icon-hand-right"></i>
						<strong>'.$o->diplome.'</strong><br/>
						<em>'.$o->lieux.', '.$o->annee.'</em><br/>
						<em><strong>'.$o->etablissement.'</strong></em><br>
					</li><br>';
		}
	}
}	

function get_users_last_expirance($id){
	$query="SELECT * FROM users_expirance WHERE id_user='$id' ORDER BY id DESC LIMIT 1;";
	if(query_execute('mysqli_num_rows', $query)=='0'){echo"<strong>PAS D'EXPERANCE!</strong>";}
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

function get_users_skills($id){
	$query="SELECT * FROM users_skills WHERE id_user='$id' ORDER BY id DESC;";
	if(query_execute('mysqli_num_rows', $query)=='0'){echo"<strong>PAS DE COMPETANCE!</strong>";}
	else{
		$result=query_excute_while($query);
		while ($o=mysqli_fetch_object($result)){
			if($o->pourcentage >= '0' && $o->pourcentage <= '33'){$color='danger';}
			if($o->pourcentage >'33' && $o->pourcentage <= '66'){$color='warning';}
			if($o->pourcentage >'66' && $o->pourcentage <= '100'){$color='success';}
			echo'
				<tr>
					<td class="span1"><span class="label label-inverse">'.$o->skills.'</span></td>
					<td>
						<div class="progress progress-'.$color.' progress-striped">
							<div style="width: '.$o->pourcentage.'%" class="bar"></div>
						</div>
					</td>
				</tr>';
		}
	}
}

function get_users_list(){
	$query="SELECT * FROM users";
	$result=query_excute_while($query);
	while ($o=mysqli_fetch_object($result)){echo'
				<div class="widget">
					<div class="widget-title">
						<h4><i class="icon-user"></i>'.$o->nom.' '.$o->prenom.' ('.get_user_rank($o->id_user).')</h4>
						<span class="tools"> 
							<a href="user_add" class="icon-plus-sign"></a>
							<a href="user_remove" class=" icon-remove-sign"></a>
							<a href="user_edit" class="icon-edit"></a> | 
							<a href="javascript:;" class="icon-chevron-down"></a>
						</span>
					</div>
					<div class="widget-body">
						<div class="span3">
							<div class="text-center profile-pic"> <img src="img/profile-pic.jpg" alt=""> </div>
							<ul class="nav nav-tabs nav-stacked">
								<img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAXRAAAAJDhjOGZiMzFkLWQzODItNGMzZC1hZDMzLWVhYWNhODk3YjZhNA.jpg"><br>
								<br>';
									if($o->fb){echo'<li><a href="'.$o->fb.'" target="new"><i class="icon-facebook"></i> Facebook</a></li>';}else{echo'<li><i class="icon-facebook"></i> Facebook (Non enregistrer)</a></li>';}
									if($o->linkedin){echo'<li><a href="'.$o->linkedin.'" target="new"><i class="icon-linkedin"></i> LinkedIn</a></li>';}else{echo'<li><i class="icon-linkedin"></i> LinkedIn (Non enregistrer)</a></li>';}
									if($o->github){echo'<li><a href="'.$o->github.'" target="new"><i class="icon-github"></i> Github</a></li>';}else{echo'<li><i class="icon-github"></i> Github (Non enregistrer)</a></li>';}						
					echo'	</ul>
						</div>
						<div class="span6">
							<h4>'.$o->poste.'<br/></h4>
							<table class="table table-borderless">
								<tbody>
									<tr>
										<td class="span2">Naissance :</td>
										<td>'.$o->date_naissance.'</td>
									</tr>
									<tr>
										<td class="span2"> Email :</td>
										<td>'.$o->email.'</td>
									</tr>
									<tr>
										<td class="span2"> Mobile :</td>
										<td> '.$o->tel.' </td>
									</tr>
									<tr>
										<td class="span2">Grade :</td>
										<td>'.get_user_rank($o->id_user).'</td>
									</tr>
								</tbody>
							</table>
							<h4>Compétances</h4>
							<table class="table table-borderless">
								<tbody>';get_users_skills($o->id_user); echo'</tbody>
							</table>
						</div>
						<div class="span3">
							<h4>Dérnier diplômes</h4>
							<ul class="icons push">';get_users_last_diploma($o->id_user); echo'</ul>
							<h4>Dériniére expérance</h4>
							<ul class="icons push">';get_users_last_expirance($o->id_user);echo'</ul>
						</div>
						<div class="space5"></div>
					</div>
				</div>
	';}
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
		<?php get_message('message'); ?>
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
			<div class="span12"><?php get_users_list(); ?></div>
			<!-- END PAGE CONTENT--> 
		</div>
		<!-- END PAGE CONTAINER--> 
	</div>
	<!-- END PAGE --> 
</div>
<!-- END CONTAINER -->
<?php include"../ili-functions/fragments/footer.php";?>
<script>jQuery(document).ready(function() {App.init();});</script>