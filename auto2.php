<?php

include 'autoquery.php';
$db_handle = new DBController();
if(!empty($_POST["keyworde"])) {
	
$query ="SELECT * FROM routes WHERE To_address like '" . $_POST["keyworde"] ."%'";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<table id="route-list">
<?php
foreach($result as $route) {
	
?>
<tr>
<td onClick="select('<?php echo $route["To_address"]; ?>');"><?php echo $route["To_address"]; ?></td></tr>
<?php } ?>
</table>
<?php } } ?>