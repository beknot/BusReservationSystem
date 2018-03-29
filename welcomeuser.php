<!DOCTYPE html>
<?php
include 'headin.php';
session_start(); 
$user=$_SESSION['login_user'];
$status=1;

?>
<html>
<head>
	<title></title>
	<style type="text/css">
		#wacaaaa{
			position: absolute;
        font-size: 20px;
       margin-left: 70px;
       margin-top: 70px;
        color: #66c0f3;
		}
	</style>
</head>
<body>
<form>
	<?php
      echo '<label id="wacaaaa">Welcome user '.$user.'</label>';

	?>
	<div>
	<a href="userlogout.php">Logout</a>
	</div>
</form>
</body>
</html>