<?php 
include"../ili-functions/functions.php";
autorisation('2');?>
<!DOCTYPE html>
<!--
iLi-ERP
Développer par : SAKLY AYOUB
Société	: iLi-Studios SARL
Site : http://www.ili-studios.com/
-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title><?php echo $sytem_title;?></title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="../ili-style/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="../ili-style/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="../ili-style/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="../ili-style/css/style.css" rel="stylesheet" />
<link href="../ili-style/css/style_responsive.css" rel="stylesheet" />
<link href="../ili-style/css/style_default.css" rel="stylesheet" id="style_color" />
<link href="../ili-style/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../ili-style/assets/uniform/css/uniform.default.css" />
<link href="../ili-style/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
<link href="../ili-style/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<!-- END HEAD -->
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
					<h3 class="page-title"> Conversations <small>Interactive  conversations</small> </h3>
					<ul class="breadcrumb">
						<li> <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="#">Components</a><span class="divider">&nbsp;</span></li>
						<li><a href="#">Conversations</a><span class="divider-last">&nbsp;</span></li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB--> 
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div id="page">
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN  widget-->
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-reorder"></i> Editeur de message</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="javascript:;" class="icon-remove"></a>
							   </span>
							</div>
							<div class="widget-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-vertical">
									<div class="control-group">
										<div class="controls">
											<textarea class="span12 ckeditor" name="editor1" rows="6"></textarea>
										</div>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END EXTRAS widget-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12"> 
						<!-- BEGIN CHAT PORTLET-->
						<div class="widget" id="">
							<div class="widget-title">
								<h4><i class="icon-comments-alt"></i> Message TimeLigne</h4>
								<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
							<div class="widget-body">
								<div class="timeline-messages"> 
									<!-- Comment -->
									<div class="msg-time-chat"> <a href="#" class="message-img"><img class="avatar" src="../img/avatar1.jpg" alt=""></a>
										<div class="message-body msg-in">
											<div class="text">
												<p class="attribution"><a href="#">Mosaddek Hossain</a> at 1:55pm, 13th April 2013</p>
												<p>Hello, How are you brother?</p>
											</div>
										</div>
									</div>
									<!-- /comment --> 
									
									<!-- Comment -->
									<div class="msg-time-chat"> <a href="#" class="message-img"><img class="avatar" src="../img/avatar2.jpg" alt=""></a>
										<div class="message-body msg-out">
											<div class="text">
												<p class="attribution"> <a href="#">Dulal Khan</a> at 2:01pm, 13th April 2013</p>
												<p>I'm Fine, Thank you. What about you? How is going on?</p>
											</div>
										</div>
									</div>
									<!-- /comment --> 
									
									<!-- Comment -->
									<div class="msg-time-chat"> <a href="#" class="message-img"><img class="avatar" src="../img/avatar1.jpg" alt=""></a>
										<div class="message-body msg-in">
											<div class="text">
												<p class="attribution"><a href="#">Mosaddek Hossain</a> at 2:03pm, 13th April 2013</p>
												<p>Yeah I'm fine too. Everything is going fine here.</p>
											</div>
										</div>
									</div>
									<!-- /comment --> 
									
									<!-- Comment -->
									<div class="msg-time-chat"> <a href="#" class="message-img"><img class="avatar" src="../img/avatar2.jpg" alt=""></a>
										<div class="message-body msg-out">
											<div class="text">
												<p class="attribution"><a href="#">Dulal Khan</a> at 2:05pm, 13th April 2013</p>
												<p>well good to know that. anyway how much time you need to done your task?</p>
											</div>
										</div>
									</div>
									<!-- /comment --> 
								</div>
								
								
							</div>
						</div>
						<!-- END CHAT PORTLET--> 
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT--> 
		</div>
		<!-- BEGIN PAGE CONTAINER--> 
	</div>
	<!-- END PAGE --> 
</div>
<!-- END CONTAINER --> 
<!-- BEGIN FOOTER -->
<div id="footer"><?php echo $copy_right;?>
	<div class="span pull-right"> <span class="go-top"><i class="icon-arrow-up"></i></span> </div>
</div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="../ili-style/js/jquery-1.8.2.min.js"></script>    
   <script type="text/javascript" src="../ili-style/assets/ckeditor/ckeditor.js"></script>
   <script src="../ili-style/assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../ili-style/assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="../ili-style/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="../ili-style/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="../ili-style/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="../ili-style/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="../ili-style/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="../ili-style/assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="../ili-style/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="../ili-style/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="../ili-style/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>   
   <script type="text/javascript" src="../ili-style/assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="../ili-style/assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="../ili-style/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="../ili-style/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="../ili-style/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="../ili-style/assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="../ili-style/js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>