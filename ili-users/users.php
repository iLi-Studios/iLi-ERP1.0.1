<?php include"../ili-functions/functions.php";?>
<?php 
autorisation('2');
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
function age($date){return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);}	

function get_users_list(){
	$query="SELECT * FROM users, users_rank WHERE users.id_rank=users_rank.id_rank";
	$result=query_excute_while($query);
	while ($o=mysqli_fetch_object($result)){
		echo'
				<div class="widget">
					<div class="widget-title">
						<h4><i class="icon-user"></i> '.$o->nom.' '.$o->prenom.' ('.$o->rank.')</h4>
						<span class="tools" style="margin-top:-2px;">';
							// Ajouter autorisation DEV & ADMIN
							if( ($_SESSION['user_id_rank']==6) || ($_SESSION['user_id_rank']==5) ){echo'<a href="user_add" class="icon-plus tooltips" data-original-title="Ajouter"></a>';}
							// Modifier autorisation DEV & ADMIN & l'utilisateur a son compte uniquement
							if( ($_SESSION['user_id_rank']==6) || ($_SESSION['user_id_rank']==5) || ($_SESSION['user_id']==$o->id_user) ){echo'<a href="user_edit?id='.$o->id_user.'" class="icon-edit tooltips" data-original-title="Modifier"></a>';}
							// Supprimer ( DEV || ((ADMIN) && (un ADMIN ne peut pas supprimer un DEV)) && (l'utilisateur ne peut pas se supprimer luis même) )
							if( ($_SESSION['user_id_rank']==6) || (($_SESSION['user_id_rank']==5) && ($o->id_rank!=6)) && ($_SESSION['user_id']!=$o->id_user) ){echo'<a href="#myModal_del'.$o->id_user.'" class="icon-trash tooltips" data-toggle="modal" data-original-title="Supprimer"></a>';}
							// Bannir 
							// ( (ADMIN || Developpeur) && (On peut pas se bannir nous même) && (On peut pas bannir un utilisateur déja banni) && (on peut pas bannir un developpeur) )
							if( (($_SESSION['user_id_rank']==6) || ($_SESSION['user_id_rank']==5)) && ($_SESSION['user_id']!=$o->id_user) && ($o->id_rank!=1) && ($o->id_rank!=6) ){echo'<a href="user_ban?id='.$o->id_user.'" class="icon-ban-circle tooltips" data-original-title="Suspendre"></a>';}
							echo'
							<a href="user_profile?id='.$o->id_user.'" class="icon-eye-open tooltips" data-original-title="Voire plus"></a>
							<!-- Modale de confirmation de suppression -->
							<div id="myModal_del'.$o->id_user.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_del'.$o->id_user.'" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h3 id="myModalLabel_del'.$o->id_user.'">Confirmation de suppression</h3>
								</div>
								<div class="modal-body">
									<p>Vous êtes sur de vouloire supprimer le compte du <strong>'.$o->nom.' '.$o->prenom.'</strong>? <br> Cette action est <strong>irréversible!</strong></p>
								</div>
								<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
									<button onClick=\'document.location.href="user_remove?id='.$o->id_user.'";\' data-dismiss="modal" class="btn btn-primary">Confirm</button>
								</div>
							</div>
							<!-- Modale de confirmation de suppression -->
							<a href="javascript:;" class="icon-chevron-down"></a>
						</span>
					</div>
					<div class="widget-body">
						<div class="span3">
							<div class="text-center profile-pic"> <img src="'.$o->img_link.'" width="100%" height="226px;"> </div>
							<ul class="nav nav-tabs nav-stacked">';
									if($o->fb){echo'<li><a href="'.$o->fb.'" target="new"><i class="icon-facebook"></i> Facebook</a></li>';}else{echo'<li><i class="icon-facebook"></i> Facebook (Non enregistrer)</a></li>';}
									if($o->linkedin){echo'<li><a href="'.$o->linkedin.'" target="new"><i class="icon-linkedin"></i> LinkedIn</a></li>';}else{echo'<li><i class="icon-linkedin"></i> LinkedIn (Non enregistrer)</a></li>';}
									if($o->github){echo'<li><a href="'.$o->github.'" target="new"><i class="icon-github"></i> Github</a></li>';}else{echo'<li><i class="icon-github"></i> Github (Non enregistrer)</a></li>';}						
					echo'	
							</ul>
						</div>
						<div class="span6">
							<h4>'.$o->poste.'<br/></h4>
							<table class="table table-borderless">
								<tbody>
									<tr>
										<td class="span2">Grade :</td>
										<td>'.$o->rank.'</td>
									</tr>
									<tr>
										<td class="span2">Age :</td>
										<td>'.age($o->date_naissance).' ans</td>
									</tr>
									<tr>
										<td class="span2"> Email :</td>
										<td>'.$o->email.'</td>
									</tr>
									<tr>
										<td class="span2"> Mobile :</td>
										<td> '.$o->tel.' </td>
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
		<!-- BEGIN PAGE HEADER-->
		<div class="row-fluid">
			<div class="span12"> 
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title"> Utilisateurs <small> Infos globales</small> </h3>
				<ul class="breadcrumb">
					<li> <a href="<?php echo $site ;?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
					<li> <a href="<?php echo $site ;?>ili-users/users">Utilisateurs du système</a><span class="divider-last">&nbsp;</span></li>
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
				<?php get_message('message'); ?>
				<?php get_users_list(); ?>
			</div>
			<!-- END PAGE CONTENT--> 
		</div>
		<!-- END PAGE CONTAINER--> 
	</div>
	<!-- END PAGE --> 
</div>
<!-- END CONTAINER -->
</div>

<?php include"../ili-functions/fragments/footer.php";?>
<script>jQuery(document).ready(function() {App.init();});</script>