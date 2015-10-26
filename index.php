<?php include"ili-functions/functions.php";?>
<?php include"ili-functions/fragments/head.php";?>
<!-- BEGIN BODY -->
<body class="fixed-top">
<?php include"ili-functions/fragments/page_header.php";?>
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
	<?php include"ili-functions/fragments/sidebar.php";?>
	<!-- BEGIN PAGE -->
	<div id="main-content"> 
		<!-- BEGIN PAGE CONTAINER-->
		<div class="container-fluid"> 
			<!-- BEGIN PAGE HEADER-->
			<div class="row-fluid">
				<div class="span12"> 
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title"> Dashboard <small> Informations Générales </small> </h3>
					<ul class="breadcrumb">
						<li> <a href="<?php echo $site ; ?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
						<li><a href="<?php echo $site ; ?>">Dashboard</a><span class="divider-last">&nbsp;</span></li>
						<li class="pull-right search-wrap">
							<form class="hidden-phone">
								<div class="search-input-area">
									<input id=" " class="search-query" type="text" placeholder="Search">
									<i class="icon-search"></i> </div>
							</form>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB--> 
				</div>
			</div>
			<!-- END PAGE HEADER--> 
			<!-- BEGIN PAGE CONTENT-->
			<div id="page" class="dashboard"> 
				<!-- BEGIN OVERVIEW STATISTIC BLOCKS-->
				<div class="row-fluid circle-state-overview">
					<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
						<div class="circle-stat block">
							<div class="visual">
								<div class="circle-state-icon"> <i class="icon-user turquoise-color"></i> </div>
								<input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="35" data-fgColor="#4CC5CD" data-bgColor="#ddd">
							</div>
							<div class="details">
								<div class="number">+33</div>
								<div class="title">New Users</div>
							</div>
						</div>
					</div>
					<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
						<div class="circle-stat block">
							<div class="visual">
								<div class="circle-state-icon"> <i class="icon-tags red-color"></i> </div>
								<input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="65" data-fgColor="#e17f90" data-bgColor="#ddd"/>
							</div>
							<div class="details">
								<div class="number">987$</div>
								<div class="title">Sales</div>
							</div>
						</div>
					</div>
					<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
						<div class="circle-stat block">
							<div class="visual">
								<div class="circle-state-icon"> <i class="icon-shopping-cart green-color"></i> </div>
								<input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="30" data-fgColor="#a8c77b" data-bgColor="#ddd"/>
							</div>
							<div class="details">
								<div class="number">+320</div>
								<div class="title">New Orders</div>
							</div>
						</div>
					</div>
					<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
						<div class="circle-stat block">
							<div class="visual">
								<div class="circle-state-icon"> <i class="icon-comments-alt gray-color"></i> </div>
								<input class="knob"  data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="15"  data-fgColor="#b9baba" data-bgColor="#ddd"/>
							</div>
							<div class="details">
								<div class="number">387</div>
								<div class="title">Comments</div>
							</div>
						</div>
					</div>
					<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
						<div class="circle-stat block">
							<div class="visual">
								<div class="circle-state-icon"> <i class="icon-eye-open purple-color"></i> </div>
								<input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="45" data-fgColor="#c8abdb" data-bgColor="#ddd"/>
							</div>
							<div class="details">
								<div class="number">+987</div>
								<div class="title">Unique Visitor</div>
							</div>
						</div>
					</div>
					<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
						<div class="circle-stat block">
							<div class="visual">
								<div class="circle-state-icon"> <i class="icon-bar-chart blue-color"></i> </div>
								<input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="25" data-fgColor="#93c4e4" data-bgColor="#ddd"/>
							</div>
							<div class="details">
								<div class="number">478</div>
								<div class="title">Updates</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END OVERVIEW STATISTIC BLOCKS-->
				
				<div class="row-fluid">
					<div class="span8"> 
						<!-- BEGIN SITE VISITS PORTLET-->
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-bar-chart"></i> Line Chart</h4>
								<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
							<div class="widget-body">
								<div id="site_statistics_loading"> <img src="ili-style-src/img/loading.gif" alt="loading" /> </div>
								<div id="site_statistics_content" class="hide">
									<div id="site_statistics" class="chart"></div>
								</div>
							</div>
						</div>
						<!-- END SITE VISITS PORTLET--> 
					</div>
					<div class="span4"> 
						<!-- BEGIN SERVER LOAD PORTLET-->
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-umbrella"></i> Live Chart</h4>
								<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
							<div class="widget-body">
								<div id="load_statistics_loading"> <img src="ili-style-src/img/loading.gif" alt="loading" /> </div>
								<div id="load_statistics_content" class="hide" style="margin: 0px 0 20px 0">
									<div id="load_statistics" class="chart" style="height: 280px"></div>
								</div>
							</div>
						</div>
						<!-- END SERVER LOAD PORTLET--> 
					</div>
				</div>
				<!-- BEGIN SQUARE STATISTIC BLOCKS-->
				<div class="square-state">
					<div class="row-fluid"> <a class="icon-btn span2" href="#"> <i class="icon-group"></i>
						<div>Users</div>
						<span class="badge badge-important">2</span> </a> <a class="icon-btn span2" href="#"> <i class="icon-barcode"></i>
						<div>Products</div>
						<span class="badge badge-success">4</span> </a> <a class="icon-btn span2" href="#"> <i class="icon-bar-chart"></i>
						<div>Reports</div>
						</a> <a class="icon-btn span2" href="#"> <i class="icon-calendar"></i>
						<div>Calendar</div>
						</a> <a class="icon-btn span2" href="#"> <i class="icon-sitemap"></i>
						<div>Categories</div>
						</a> <a class="icon-btn span2" href="#"> <i class="icon-tasks"></i>
						<div>Task</div>
						<span class="badge badge-important">3</span> </a> </div>
					<div class="row-fluid"> <a class="icon-btn span2" href="#"> <i class="icon-envelope"></i>
						<div>Inbox</div>
						<span class="badge badge-info">12</span> </a> <a class="icon-btn span2" href="#"> <i class="icon-bullhorn"></i>
						<div>Notification</div>
						<span class="badge badge-warning">3</span> </a> <a class="icon-btn span2" href="#"> <i class="icon-plane"></i>
						<div>Projects</div>
						<span class="badge badge-info">21</span> </a> <a class="icon-btn span2" href="#"> <i class="icon-money"></i>
						<div>Finance</div>
						</a> <a class="icon-btn span2" href="#"> <i class="icon-thumbs-up"></i>
						<div>Feedback</div>
						<span class="badge badge-info">2</span> </a> <a class="icon-btn span2" href="#"> <i class="icon-wrench"></i>
						<div>Settings</div>
						</a> </div>
				</div>
				<!-- END SQUARE STATISTIC BLOCKS-->
				<div class="row-fluid">
					<div class="span12"> 
						<!-- BEGIN RECENT ORDERS PORTLET-->
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-tags"></i> Recent Order List</h4>
								<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
							<div class="widget-body">
								<table class="table table-striped table-bordered table-advance table-hover">
									<thead>
										<tr>
											<th><i class="icon-leaf"></i> <span class="hidden-phone">From</span></th>
											<th><i class="icon-user"></i> <span class="hidden-phone ">Contact</span></th>
											<th><i class="icon-tags"> </i><span class="hidden-phone">Amount</span></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="highlight"><div class="info"></div>
												<a href="#">ABC</a></td>
											<td>Mosaddek Hossain</td>
											<td>120.00$ <span class="label label-success label-mini">Paid</span> <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
											<td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
										</tr>
										<tr>
											<td class="highlight"><div class="warning"></div>
												<a href="#">Lorem</a></td>
											<td>Dulal khan</td>
											<td>2000.50$ <span class="label label-success label-mini">Paid</span> <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
											<td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
										</tr>
										<tr>
											<td class="highlight"><div class="success"></div>
												<a href="#">Dolor imit</a></td>
											<td>Rafiqul Ismal</td>
											<td>490.50$ <span class="label label-warning label-mini">Pending</span> <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
											<td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
										</tr>
										<tr>
											<td class="highlight"><div class="important"></div>
												<a href="#">ABC</a></td>
											<td>Sumon Ahmed</td>
											<td>1000.00$ <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
											<td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
										</tr>
										<tr>
											<td class="highlight"><div class="success"></div>
												<a href="#">Vector lab</a></td>
											<td>Mosaddek</td>
											<td>4890.60$ <span class="label label-warning label-mini">Paid</span> <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
											<td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
										</tr>
										<tr>
											<td class="highlight"><div class="warning"></div>
												<a href="#">Ipsum</a></td>
											<td>Rafiqul Islam</td>
											<td>3201.60$ <span class="label label-success label-mini">Pending</span> <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
											<td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
										</tr>
										<tr>
											<td class="highlight"><div class="important"></div>
												<a href="#">ABC</a></td>
											<td>Dulal Khan</td>
											<td>500.00$ <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
											<td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
										</tr>
										<tr>
											<td class="highlight"><div class="warning"></div>
												<a href="#">Vector lab</a></td>
											<td>Mosaddek Hossain</td>
											<td>5501.00$ <span class="label label-success label-mini">Paid</span> <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
											<td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
										</tr>
									</tbody>
								</table>
								<div class="space7"></div>
								<div class="clearfix"> <a href="#" class="btn btn-mini pull-right">All Orders</a> </div>
							</div>
						</div>
						<!-- END RECENT ORDERS PORTLET--> 
					</div>
				</div>
				<div class="row-fluid">
					<div class="span7"> 
						<!-- BEGIN CHAT PORTLET-->
						<div class="widget" id="chats">
							<div class="widget-title">
								<h4><i class="icon-comments-alt"></i> Chats</h4>
								<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
							<div class="widget-body">
								<div class="timeline-messages"> 
									<!-- Comment -->
									<div class="msg-time-chat"> <a class="message-img" href="#"><img alt="" src="ili-style-src/img/avatar1.jpg" class="avatar"></a>
										<div class="message-body msg-in">
											<div class="text">
												<p class="attribution"><a href="#">Mosaddek Hossain</a> at 1:55pm, 13th April 2013</p>
												<p>Hello, How are you brother?</p>
											</div>
										</div>
									</div>
									<!-- /comment --> 
									
									<!-- Comment -->
									<div class="msg-time-chat"> <a class="message-img" href="#"><img alt="" src="ili-style-src/img/avatar2.jpg" class="avatar"></a>
										<div class="message-body msg-out">
											<div class="text">
												<p class="attribution"> <a href="#">Dulal Khan</a> at 2:01pm, 13th April 2013</p>
												<p>I'm Fine, Thank you. What about you? How is going on?</p>
											</div>
										</div>
									</div>
									<!-- /comment --> 
									
									<!-- Comment -->
									<div class="msg-time-chat"> <a class="message-img" href="#"><img alt="" src="ili-style-src/img/avatar1.jpg" class="avatar"></a>
										<div class="message-body msg-in">
											<div class="text">
												<p class="attribution"><a href="#">Mosaddek Hossain</a> at 2:03pm, 13th April 2013</p>
												<p>Yeah I'm fine too. Everything is going fine here.</p>
											</div>
										</div>
									</div>
									<!-- /comment --> 
									
									<!-- Comment -->
									<div class="msg-time-chat"> <a class="message-img" href="#"><img alt="" src="ili-style-src/img/avatar2.jpg" class="avatar"></a>
										<div class="message-body msg-out">
											<div class="text">
												<p class="attribution"><a href="#">Dulal Khan</a> at 2:05pm, 13th April 2013</p>
												<p>well good to know that. anyway how much time you need to done your task?</p>
											</div>
										</div>
									</div>
									<!-- /comment --> 
								</div>
								<div class="chat-form">
									<div class="input-cont">
										<input type="text" placeholder="Type a message here..." />
									</div>
									<div class="btn-cont"> <a href="javascript:;" class="btn btn-primary">Send</a> </div>
								</div>
							</div>
						</div>
						<!-- END CHAT PORTLET--> 
					</div>
					<div class="span5"> 
						<!-- BEGIN NOTIFICATIONS PORTLET-->
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-bell"></i> Notifications</h4>
								<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
							<div class="widget-body">
								<ul class="item-list scroller padding" data-height="365" data-always-visible="1">
									<li> <span class="label label-success"><i class="icon-bell"></i></span> <span>New user registered.</span> <span class="small italic">Just now</span> </li>
									<li> <span class="label label-success"><i class="icon-bell"></i></span> <span>New order received.</span> <span class="small italic">15 mins ago</span> </li>
									<li> <span class="label label-warning"><i class="icon-bullhorn"></i></span> <span>Alerting a user account balance.</span> <span class="small italic">2 hrs ago</span> </li>
									<li> <span class="label label-important"><i class="icon-bolt"></i></span> <span>Alerting administrators staff.</span> <span class="small italic">11 hrs ago</span> </li>
									<li> <span class="label label-important"><i class="icon-bolt"></i></span> <span>Messages are not sent to users.</span> <span class="small italic">14 hrs ago</span> </li>
									<li> <span class="label label-warning"><i class="icon-bullhorn"></i></span> <span>Web server #12 failed to relosd.</span> <span class="small italic">2 days ago</span> </li>
									<li> <span class="label label-success"><i class="icon-bell"></i></span> <span>New order received.</span> <span class="small italic">15 mins ago</span> </li>
									<li> <span class="label label-warning"><i class="icon-bullhorn"></i></span> <span>Alerting a user account balance.</span> <span class="small italic">2 hrs ago</span> </li>
									<li> <span class="label label-important"><i class="icon-bolt"></i></span> <span>Alerting administrators staff.</span> <span class="small italic">11 hrs ago</span> </li>
									<li> <span class="label label-important"><i class="icon-bolt"></i></span> <span>Messages are not sent to users.</span> <span class="small italic">14 hrs ago</span> </li>
									<li> <span class="label label-warning"><i class="icon-bullhorn"></i></span> <span>Web server #12 failed to relosd.</span> <span class="small italic">2 days ago</span> </li>
									<li> <span class="label label-success"><i class="icon-bell"></i></span> <span>New order received.</span> <span class="small italic">15 mins ago</span> </li>
									<li> <span class="label label-warning"><i class="icon-bullhorn"></i></span> <span>Alerting a user account balance.</span> <span class="small italic">2 hrs ago</span> </li>
									<li> <span class="label label-important"><i class="icon-bolt"></i></span> <span>Alerting administrators support staff.</span> <span class="small italic">11 hrs ago</span> </li>
									<li> <span class="label label-important"><i class="icon-bolt"></i></span> <span>Messages are not sent to users.</span> <span class="small italic">14 hrs ago</span> </li>
									<li> <span class="label label-warning"><i class="icon-bullhorn"></i></span> <span>Web server #12 failed to relosd.</span> <span class="small italic">2 days ago</span> </li>
								</ul>
								<div class="space5"></div>
								<a href="#" class="pull-right">View all notifications</a>
								<div class="clearfix no-top-space no-bottom-space"></div>
							</div>
						</div>
						<!-- END NOTIFICATIONS PORTLET--> 
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6"> 
						<!-- BEGIN PROGRESS BARS PORTLET-->
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-reorder"></i> Progress Bars</h4>
								<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
							<div class="widget-body">
								<div class="progress">
									<div style="width: 40%;" class="bar"></div>
								</div>
								<div class="progress progress-success">
									<div style="width: 60%;" class="bar"></div>
								</div>
								<div class="progress progress-warning">
									<div style="width: 80%;" class="bar"></div>
								</div>
								<div class="progress progress-danger">
									<div style="width: 45%;" class="bar"></div>
								</div>
								<div class="progress">
									<div style="width: 15%;" class="bar bar-success"></div>
									<div style="width: 40%;" class="bar bar-warning"></div>
									<div style="width: 27%;" class="bar bar-danger"></div>
								</div>
								<div class="progress progress-striped">
									<div style="width: 25%;" class="bar"></div>
								</div>
								<div class="progress progress-striped progress-success active">
									<div style="width: 40%;" class="bar"></div>
								</div>
								<div class="progress progress-striped">
									<div style="width: 15%;" class="bar bar-success"></div>
									<div style="width: 40%;" class="bar bar-warning"></div>
									<div style="width: 27%;" class="bar bar-danger"></div>
								</div>
							</div>
						</div>
						<!-- END PROGRESS BARS PORTLET--> 
					</div>
					<div class="span6"> 
						<!-- BEGIN ALERTS PORTLET-->
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-bell-alt"></i> Alerts</h4>
								<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
							<div class="widget-body">
								<div class="alert">
									<button class="close" data-dismiss="alert">×</button>
									<strong>Warning!</strong> Your monthly traffic is reaching limit. </div>
								<div class="alert alert-success">
									<button class="close" data-dismiss="alert">×</button>
									<strong>Success!</strong> The page has been added. </div>
								<div class="alert alert-info">
									<button class="close" data-dismiss="alert">×</button>
									<strong>Info!</strong> You have 198 unread messages. </div>
								<div class="alert alert-error">
									<button class="close" data-dismiss="alert">×</button>
									<strong>Error!</strong> The daily cronjob has failed. </div>
								<span class="space5"></span> </div>
						</div>
						<!-- END ALERTS PORTLET--> 
					</div>
				</div>
				<div class="row-fluid">
					<div class="span8 responsive" data-tablet="span8 fix-margin" data-desktop="span8"> 
						<!-- BEGIN CALENDAR PORTLET-->
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-calendar"></i> Calendar</h4>
								<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
							<div class="widget-body">
								<div id="calendar" class="has-toolbar"></div>
							</div>
						</div>
						<!-- END CALENDAR PORTLET--> 
					</div>
					<div class="span4 responsive" data-tablet="span4 fix-margin" data-desktop="span4"> 
						<!-- BEGIN TODO_LIST PORTLET-->
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-check"></i> To Do List</h4>
								<span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
							<div class="widget-body">
								<ul class="todo-list">
									<li>
										<div class="col1">
											<div class="cont"> <a href=""> Weekly Meeting.</a> </div>
										</div>
										<div class="col2"> <span class="label label-success"><i class="icon-bell"></i>Today</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href="">Monthly Status Update.</a> </div>
										</div>
										<div class="col2"> <span class="label label-default"><i class="icon-bell"></i>12.00PM</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href="">Upgrage server OS.</a> </div>
										</div>
										<div class="col2"> <span class="label label-success"><i class="icon-bell"></i>4 March</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href="">Weekly technical support report.</a> </div>
										</div>
										<div class="col2"> <span class="label label-success"><i class="icon-bell"></i>2 Jan</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href=""> Project materials.</a> </div>
										</div>
										<div class="col2"> <span class="label label-warning"><i class="icon-bell"></i>09 Feb</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href="">Project Status Update.</a> </div>
										</div>
										<div class="col2"> <span class="label label-important"><i class="icon-bell"></i>4.30PM</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href=""> Anual Project Meeting.</a> </div>
										</div>
										<div class="col2"> <span class="label label-important"><i class="icon-bell"></i>Today</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href="">Prepare project materials.</a> </div>
										</div>
										<div class="col2"> <span class="label label-warning"><i class="icon-bell"></i>3 May</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href="">Update salary status.</a> </div>
										</div>
										<div class="col2"> <span class="label label-reverse"><i class="icon-bell"></i>1 June</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href="">Update Task Status.</a> </div>
										</div>
										<div class="col2"> <span class="label label-reverse"><i class="icon-bell"></i>3 April</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href="">Project Status Report.</a> </div>
										</div>
										<div class="col2"> <span class="label label-important"><i class="icon-bell"></i>10.00PM</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
									<li>
										<div class="col1">
											<div class="cont"> <a href="">Update project rates.</a> </div>
										</div>
										<div class="col2"> <span class="label label-reverse"><i class="icon-bell"></i>28 April</span> <span class="actions"> <a href="#" class="icon"><i class="icon-ok"></i></a> <a href="#" class="icon"><i class="icon-remove"></i></a> </span> </div>
									</li>
								</ul>
								<a href="#" class="pull-right">View all todo list</a>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- END TODO_LIST PORTLET--> 
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
<?php include"ili-functions/fragments/footer.php";?>
<script>jQuery(document).ready(function() {App.setMainPage(true);App.init();});</script>