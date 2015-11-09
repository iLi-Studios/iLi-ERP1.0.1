<!-- BEGIN HEADER -->

<div id="header" class="navbar navbar-inverse navbar-fixed-top"> 
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="navbar-inner">
		<div class="container-fluid"> 
			<!-- BEGIN LOGO --> 
			<a class="brand" href="<?php echo $site;?>"> <img src="" alt="<?php echo $sytem_title;?>" /> </a> 
			<!-- END LOGO --> 
			<!-- BEGIN RESPONSIVE MENU TOGGLER --> 
			<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="arrow"></span> </a> 
			<!-- END RESPONSIVE MENU TOGGLER -->
			<div id="top_menu" class="nav notify-row"> 
				<!-- BEGIN NOTIFICATION -->
				<ul class="nav top-menu">
					<!-- BEGIN SETTINGS -->
					<li class="dropdown"> <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings"> <i class="icon-cog"></i> </a> </li>
					<!-- END SETTINGS --> 
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown" id="header_inbox_bar"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-envelope-alt"></i> <span class="badge badge-important">5</span> </a>
						<ul class="dropdown-menu extended inbox">
							<li>
								<p>You have 5 new messages</p>
							</li>
							<li> <a href="#"> <span class="photo"><img src="<?php echo $site; ?>ili-style/img/avatar-mini.png" alt="avatar" /></span> <span class="subject"> <span class="from">Dulal Khan</span> <span class="time">Just now</span> </span> <span class="message"> Hello, this is an example messages please check </span> </a> </li>
							<li> <a href="#"> <span class="photo"><img src="<?php echo $site; ?>ili-style/img/avatar-mini.png" alt="avatar" /></span> <span class="subject"> <span class="from">Rafiqul Islam</span> <span class="time">10 mins</span> </span> <span class="message"> Hi, Mosaddek Bhai how are you ? </span> </a> </li>
							<li> <a href="#"> <span class="photo"><img src="<?php echo $site; ?>ili-style/img/avatar-mini.png" alt="avatar" /></span> <span class="subject"> <span class="from">Sumon Ahmed</span> <span class="time">3 hrs</span> </span> <span class="message"> This is awesome dashboard templates </span> </a> </li>
							<li> <a href="#"> <span class="photo"><img src="<?php echo $site; ?>ili-style/img/avatar-mini.png" alt="avatar" /></span> <span class="subject"> <span class="from">Dulal Khan</span> <span class="time">Just now</span> </span> <span class="message"> Hello, this is an example messages please check </span> </a> </li>
							<li> <a href="#">See all messages</a> </li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN --> 
					<?php include"notification.php";?>
					
				</ul>
			</div>
			<!-- END  NOTIFICATION -->
			<div class="top-nav ">
				<ul class="nav pull-right top-menu" >
					
					<!-- BEGIN SUPPORT -->
					<?php if($_SESSION['user_id_rank']==3){echo'<li class="dropdown mtop5"> <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="'.$site.'log" data-original-title="Journal Systéme"> <i class="icon-tasks"></i> </a> </li>';}?>
					<li class="dropdown mtop5"> <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="<?php echo $site; ?>ili-users/users" data-original-title="Utilisateurs"> <i class="icon-group"></i> </a> </li>
					<!-- END SUPPORT --> 
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php if( $_SESSION['user_img']!=''){echo'<img src="'.$_SESSION['user_img'].'" width="29px" height="29px">';}?> <span class="username"><?php echo $_SESSION['user_nom'].' '.$_SESSION['user_prenom'] ; ?></span> <b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $site; ?>ili-users/user_profil?id=<?php echo $_SESSION['user_id'];?>"><i class="icon-user"></i> Mon Profil</a></li>
							<li><a href="#"><i class="icon-tasks"></i> Mes Taches</a></li>
							<li><a href="#"><i class="icon-calendar"></i> Calendrier</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $site; ?>ili-functions/logout"><i class="icon-key"></i> Déconexion</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
	</div>
	<!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER -->