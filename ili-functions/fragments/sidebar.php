<?php
function user_side_bar(){
	global $site;
	// ADMIN
	if($_SESSION['user_id_rank']==3){
		echo'
		<li><a class="" href="'.$site.'ili-modules/client/liste"><span class="icon-box"><i class="icon-user"></i></span> Clients</a></li>
		<li><a class="" href="'.$site.'ili-modules/fournisseur/liste"><span class="icon-box"><i class="icon-tags"></i></span> Fournisseurs</a></li>
		<li><a class="" href="'.$site.'ili-modules/article/liste?type=';?><?php get_premier_type_art(); ?><?php echo'"><span class="icon-box"><i class="icon-barcode"></i></span> Articles</a></li>
		';
	}	
	if($_SESSION['user_id_rank']==2){
		$up_clt=user_privileges("CLIENTS", $_SESSION['user_id']);$s_clt=$up_clt->s;
		if($s_clt){echo'<li><a class="" href="'.$site.'ili-modules/client/liste"><span class="icon-box"><i class="icon-user"></i></span> Clients</a></li>';}
		$up_frn=user_privileges("FOURNISSEURS", $_SESSION['user_id']);$s_frn=$up_frn->s;
		if($s_frn){echo'<li><a class="" href="'.$site.'ili-modules/fournisseur/liste"><span class="icon-box"><i class="icon-tags"></i></span> Fournisseurs</a></li>';}
		$up_art=user_privileges("ARTICLES", $_SESSION['user_id']);$s_art=$up_art->s;
		if($s_art){echo'<li><a class="" href="'.$site.'ili-modules/article/liste?type=';?><?php get_premier_type_art(); ?><?php echo'"><span class="icon-box"><i class="icon-barcode"></i></span> Articles</a></li>';}
	}
}
?>

<!-- BEGIN SIDEBAR -->
<div id="sidebar" class="nav-collapse collapse"> 
	<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
	<div class="sidebar-toggler hidden-phone"></div>
	<!-- BEGIN SIDEBAR TOGGLER BUTTON --> 
	
	<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
	<div class="navbar-inverse">
		<form class="navbar-search visible-phone">
			<input type="text" class="search-query" placeholder="Search" />
		</form>	</div>
	<!-- END RESPONSIVE QUICK SEARCH FORM --> 
	<!-- BEGIN SIDEBAR MENU -->
	<ul class="sidebar-menu">
		<li class="has-sub active"> <a href="<?php echo $site;?>" class=""> <span class="icon-box"> <i class="icon-dashboard"></i></span> Dashboard </a> </li>
		<?php user_side_bar();?>
		<li><a class="" href="<?php echo $site;?>"><span class="icon-box"><i class="icon-money"></i></span> Caisse</a></li>
        <li><a class="" href="<?php echo $site;?>"><span class="icon-box"><i class="icon-book"></i></span> Aide</a></li>
		<li><a class="" href="<?php echo $site;?>ili-functions/logout"><span class="icon-box"><i class="icon-signout"></i></span> Déconexion</a></li>
	</ul>
	<!-- END SIDEBAR MENU --> 
</div>
<!-- END SIDEBAR --> 

