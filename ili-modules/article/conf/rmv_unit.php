<?php 
include"../../../ili-functions/functions.php"; 
autorisation('2');
autorisation_double_check_privilege('ARTICLES', 'U');
function unit_remove($id){
	$query="DELETE FROM article_unitee WHERE id_unit_art='$id';";
	query_execute_insert($query);
}
$id=$_GET['id'];
$unit=get_unit_info($id);
if($unit==''){redirect('index?message=23');}
unit_remove($id);
redirect('ili-modules/article/conf/conf');
?>