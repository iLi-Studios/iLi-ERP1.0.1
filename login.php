<?php include"ili-functions/functions.php"; ?>
<?php include"ili-functions/fragments/head.php";?>
<?php


function connexion($email, $mdp){
	$query="SELECT * FROM users, rank, users_rank WHERE users.id_user=users_rank.id_user AND rank.id_rank=users_rank.id_rank AND users.email='$email' AND users.mdp='$mdp'";
	if( ($o=query_execute("mysqli_fetch_object", $query)) == true){
		if($o->id_rank=='1'){redirect("login?message=3");}
		else{
			$_SESSION['user']=$o->id_user;
			$_SESSION['id_rank']=$o->id_rank;
			redirect("index");
		}
	}
	else{redirect("login?message=2");}
}

// forum login
if( (isset($_POST['email'])) && (isset($_POST['mdp'])) ){connexion($_POST['email'], md5($_POST['mdp']));}
?>
<!-- BEGIN BODY -->
<body id="login-body">
<div class="login-header"> 
	<!-- BEGIN LOGO -->
	<div id="logo" class="center"> <img src="ili-style/img/logo.png" alt="logo" class="center" /> </div>
	<!-- END LOGO --> 
</div>

<!-- BEGIN LOGIN -->
<div id="login"> 
	<!-- BEGIN LOGIN FORM -->
	<form id="loginform" class="form-vertical no-padding no-margin" action="" method="post">
		<div class="lock"> <i class="icon-lock"></i> </div>
		<div class="control-wrap">
			<h4>Authentification</h4>
			<div class="control-group">
				<div class="controls">
					<div class="input-prepend"> <span class="add-on"><i class="icon-user"></i></span>
						<input id="input-username" name="email" type="email" placeholder="email" required autofocus/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="input-prepend"> <span class="add-on"><i class="icon-key"></i></span>
						<input id="input-password" name="mdp" type="password" placeholder="Mot de passe" required />
					</div>
					<!--<div class="mtop10">
						<div class="block-hint pull-left small">
							<input type="checkbox" id="">
							Remember Me </div>
						<div class="block-hint pull-right"> <a href="javascript:;" class="" id="forget-password">Forgot Password?</a> </div>
					</div>-->
					<?php get_message('message'); ?>
					<div class="clearfix space5"></div>
				</div>
			</div>
		</div>
		<input type="submit" id="login-btn" class="btn btn-block login-btn" value="Connexion" />
	</form>
	<!-- END LOGIN FORM --> 
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form id="forgotform" class="form-vertical no-padding no-margin hide" action="index.html">
		<p class="center">Enter your e-mail address below to reset your password.</p>
		<div class="control-group">
			<div class="controls">
				<div class="input-prepend"> <span class="add-on"><i class="icon-envelope"></i></span>
					<input id="input-email" type="text" placeholder="Email"  />
				</div>
			</div>
			<div class="space20"></div>
		</div>
		<input type="button" id="forget-btn" class="btn btn-block login-btn" value="Submit" />
	</form>
	<!-- END FORGOT PASSWORD FORM --> 
</div>
<!-- END LOGIN --> 
<!-- BEGIN COPYRIGHT -->
<div id="login-copyright"> 2016 &copy; iLi-ERP BETA </div>
<!-- END COPYRIGHT --> 
<!-- BEGIN JAVASCRIPTS --> 
<script src="ili-style/js/jquery-1.8.3.min.js"></script> 
<script src="ili-style/assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="ili-style/js/jquery.blockui.js"></script> 
<script src="ili-style/js/scripts.js"></script> 
<script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script> 
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>