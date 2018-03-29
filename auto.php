<?php

include 'autoquery.php';
include 'connect.php';
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM routes WHERE From_address like '" . $_POST["keyword"] . "%' ";
$x=0;
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<table id="route-list">
<?php 
s:
foreach($result as $route) {
	
// 	$a[$x]=$route["From_address"];
// 	$b[$x]=strtolower($a[$x]);

	
// if ($x>1) {
// 	for ($i=0; $i <$x ; $i++) { 
// 	if($b[$x]==$b[$i])
// 	{
// 		goto s;
// 	}}
// }
// $x++;

?>
<tr>
<td onClick="selectCountry('<?php echo $route["From_address"]; ?>');"><?php echo $route["From_address"]; ?></td></tr>
<?php } ?>
</table>
<?php } } ?>