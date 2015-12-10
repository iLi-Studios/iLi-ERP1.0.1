<?php 
include"../../../ili-functions/functions.php"; 
autorisation('2');
autorisation_double_check_privilege('ARTICLES', 'U');
function fam_remove($id){
	$query="DELETE FROM article_famille WHERE id_famille_art='$id';";
	query_execute_insert($query);
}
$id=$_GET['id'];
$fam=get_unit_info($id);
if($fam==''){redirect('index?message=24');}
fam_remove($id);
redirect('ili-modules/article/conf/conf');
?>