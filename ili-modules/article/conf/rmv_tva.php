<?php 
include"../../../ili-functions/functions.php"; 
autorisation('2');
autorisation_double_check_privilege('ARTICLES', 'U');
function tva_remove($id){
	$query="DELETE FROM article_tva WHERE id_tva_art='$id';";
	query_execute_insert($query);
}
$id=$_GET['id'];
$tva=get_tva_info($id);
if($tva==''){redirect('index?message=25');}
tva_remove($id);
redirect('ili-modules/article/conf/conf');
?>