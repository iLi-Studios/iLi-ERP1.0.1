<?php

include"functions.php";

$query="SELECT * FROM `system_log` ORDER BY `id` DESC;";
if(query_execute('mysqli_num_rows', $query)=='0'){
	$now= date("d/m/y-H:i:s");
	echo'
	<tr class="odd gradeX">
		<td>SYSTEM</td>
		<td class="hidden-phone">PAS DE LOGS</td>
		<td class="center hidden-phone">'.$now.'</td>
	</tr>
	';
}
else{
	$result=query_excute_while($query);
	while ($o=mysqli_fetch_object($result)){
		echo'
		<tr class="odd gradeX">
			<td><a href="ili-users/user_profil?id='.$o->id_user.'">'.$o->id_user.'</a></td>
			<td class="hidden-phone">'.$o->operation.'</td>
			<td class="center hidden-phone">'.$o->date_operation.'</td>
		</tr>
		';
	}
}

?>