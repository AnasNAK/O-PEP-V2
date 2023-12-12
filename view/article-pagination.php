<?php 
include '../model/config.php';


$record_page = 10 ;
$page = '';
$output = '';

if (isset($_POST['page'])){
    $page = $_POST['page'];
}else{
    $page = 1;
}
$start_form = ($page - 1) * $record_page ;
$query = 'select * from article order by idArticle DESC LIMIT $start_form,$record_page ';
$result = mysqli_query($mysqli, $query);
$output .= "

"

?>