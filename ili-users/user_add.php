<?php include"../ili-functions/functions.php";?>
<?php 
autorisation('5'); 
function grade_list(){
	//$query="SELECT * FROM `rank` WHERE `id_rank`>'1' AND `id_rank`<'6' ORDER BY id_rank ASC";
	$query="SELECT * FROM `rank` ORDER BY id_rank ASC";
	//if($_SESSION['id_rank']=6){$query==$query6;}else{$query==$query5;}
	$result=query_excute_while($query);
	while ($o=mysqli_fetch_object($result)){echo'<option value="'.$o->id_rank.'">'.$o->rank.'</option>';}
}
function create_user(){
	$query="";
	if(query_execute("mysqli_fetch_object", $query)){
	}
	else{redirect('ili-users/user_add?message=5');}
}

if((isset($_POST['cin']))&&(isset($_POST['nom']))&&(isset($_POST['prenom']))&&(isset($_POST['email']))&&(isset($_POST['tel']))&&(isset($_POST['mdp']))&&(isset($_POST['poste']))&&(isset($_POST['rank']))){
	$cin		=addslashes($_POST['cin']);
	$nom		=addslashes($_POST['nom']);
	$prenom		=addslashes($_POST['prenom']);
	$email		=addslashes($_POST['email']);
	$tel		=addslashes($_POST['tel']);
	$mdp		=addslashes($_POST['mdp']);
	$poste		=addslashes($_POST['poste']);
	$rank		=addslashes($_POST['rank']);
	if(isset($_POST['img_url'])){$img_url=$_POST['img_url'];}else{$img_url='';}
	if(isset($_POST['fb'])){$fb=$_POST['fb'];}else{$fb='';}
	if(isset($_POST['linkedin'])){$linkedin=$_POST['linkedin'];}else{$linkedin='';}
	if(isset($_POST['github'])){$github=$_POST['github'];}else{$github='';}
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
			<div class="span12"><?php get_message('message'); ?>
				<div class="widget">
					<div class="widget-title">
                        <h4><i class="icon-reorder"></i> Informations globales</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                     </div>
					<div class="widget-body form">
						<form action="#" class="form-horizontal" method="post">							
							<div class="control-group">
								<label class="control-label">N° CIN</label>
								<div class="controls">
									<input type="text" required name="cin" class="span6  popovers" data-trigger="hover" data-content="Numéro de Carte Identité Nationnale" data-original-title="8 Chiffres" />
									<span class="help-inline"> Champ obligatoire</span>
								</div>
							</div><!--N° CIN*-->
							<div class="control-group">
								<label class="control-label">Nom</label>
								<div class="controls">
									<input type="text" required name="nom" class="span6  popovers" />
									<span class="help-inline"> Champ obligatoire</span>
								</div>
							</div><!--Nom*-->
							<div class="control-group">
								<label class="control-label">Prénom</label>
								<div class="controls">
									<input type="text" required name="prenom" class="span6  popovers" />
									<span class="help-inline"> Champ obligatoire</span>
								</div>
							</div><!--Prénom*-->			   
							<div class="control-group">
								<label class="control-label">Email</label>
								<div class="controls">
									<input type="email" required name="email" class="span6  popovers" />
									<span class="help-inline"> Champ obligatoire</span>
								</div>
							</div><!--Email*-->
							<div class="control-group">
								<label class="control-label">Tel</label>
								<div class="controls">
									<input type="text" required name="tel" class="span6  popovers" />
									<span class="help-inline"> Champ obligatoire</span>
								</div>
							</div><!--Tel*-->
							<div class="control-group">
								<label class="control-label">Image URL</label>
								<div class="controls">
									<input type="text" name="img_url" class="span6  popovers" data-trigger="hover" data-content="Laisser vide, si vous avez pas un lien" data-original-title="Un lien direct avec extention" />
								</div>
							</div><!--Image URL-->
							<div class="control-group">
								<label class="control-label">Mot de passe</label>
								<div class="controls">
									<input type="text" required name="mdp" class="span6  popovers" data-trigger="hover" data-content="Essayé une mot de passe complex de 5 caractéres au minimume, genre X2€n!" data-original-title="Mot de passe par defaut" />
									<span class="help-inline"> Champ obligatoire</span>
								</div>
							</div><!--Mot de passe*-->
							<div class="control-group">
								<label class="control-label">Facebook URL</label>
								<div class="controls">
									<input type="text" name="fb" class="span6  popovers" />
									</div>
							</div><!--Facebook URL-->
							<div class="control-group">
								<label class="control-label">LinkedIN URL</label>
								<div class="controls">
									<input type="text" name="linkedin" class="span6  popovers" />
								</div>
							</div><!--LinkedIN URL-->
							<div class="control-group">
								<label class="control-label">Github URL</label>
								<div class="controls">
									<input type="text" name="github" class="span6  popovers" />
								</div>
							</div><!--Github URL-->	
							<div class="control-group">
								<label class="control-label">Poste</label>
								<div class="controls">
									<input type="text" required name="poste" class="span6  popovers" />
									<span class="help-inline"> Champ obligatoire</span>
								</div>
							</div><!--Poste*-->	
							<div class="control-group">
								<label class="control-label">Grade</label>
								<div class="controls">
									<select name="rank" required class="span6 chosen" data-placeholder="Choose a Category" tabindex="1">
										<?php grade_list(); ?>
									</select>	
								</div>
                           </div><!--rank*-->
							<br>
							<center>
								<button type="reset" class="btn btn-info"><i class="icon-ban-circle icon-white"></i> Cancel</button>							
								<button type="submit" class="btn btn-warning"><i class="icon-plus icon-white"></i> Create</button>
							</center>			
						</form>
					</div>
				</div> <!-- Informations globales -->				
			</div>
			<!-- END PAGE CONTENT--> 
		</div>
		<!-- END PAGE CONTAINER--> 
	</div>
	<!-- END PAGE --> 
</div>
</div>
<!-- END CONTAINER -->
<?php include"../ili-functions/fragments/footer.php";?>
<script>jQuery(document).ready(function() {App.init();});</script>