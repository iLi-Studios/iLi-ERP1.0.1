<?php
$id_user=$_SESSION['user_id'];
function num_message(){
	$id_user=$_SESSION['user_id'];
	$query="SELECT * FROM `system_msg` WHERE `user_reception`='$id_user' AND `vu`='0' ORDER BY `id` DESC";
	$o=query_execute("mysqli_num_rows", $query);
	if($o=='0'){echo '';}
	else{echo '<span class="badge badge-warning">'.$o.'</span>';}
}

?>
<!-- BEGIN INBOX DROPDOWN -->
<li class="dropdown" id="header_inbox_bar"> 
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
		<i class="icon-envelope-alt"></i> <?php num_message(); ?> 
	</a>
	<ul class="dropdown-menu extended inbox">
		<li>
			<p><a href="<?php echo $site;?>ili-messages/start">Ecrire un nouveau message</a></p>
		</li>
		<li> 
			<a href="#"> 
				<span class="photo">
					<img src="<?php echo $site;?>ili-style/img/avatar-mini.png" alt="avatar" />
				</span> 
				<span class="subject"> 
					<span class="from">Dulal Khan</span> 
					<span class="time">Just now</span> 
				</span> 
				<span class="message"> Hello, this is an example messages please check </span> 
			</a> 
		</li>
		<li> <a href="#">Voire tous les messages</a> </li>
	</ul>
</li>
<!-- END INBOX DROPDOWN --> 




		<!--<li> 
			<a href="#"> 
				<span class="photo">
					<img src="<?php echo $site; ?>ili-style/img/avatar-mini.png" alt="avatar" />
				</span> 
				<span class="subject"> 
					<span class="from">Dulal Khan</span> 
					<span class="time">Just now</span> 
				</span> 
				<span class="message"> Hello, this is an example messages please check </span> 
			</a> 
		</li>-->






