<!DOCTYPE html>
<?php
include 'adminhead.php';
include 'connect.php';
session_start(); 
$admin=$_SESSION['login_user'];

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
		#Logout{
			position: absolute;
			margin-top: 550px;
			margin-left: 1100px;

		}
		#detailsss{
			position: absolute;
			margin-top: 110px;
			font-size: 20px;
			color: #66c0f3;
			margin-left: 100px;

		}
	</style>
</head>
<body>
<form>
	<?php
      echo '<label id="wacaaaa">Welcome admin '.$admin.'</label>';

	?>
	<div id="Logout">
	<a href="adminlogout.php">Logout</a>
	</div><div id="detailsss">
	<table border="1px;" cellpadding="3px;">
	<tr>
		<td>Route No</td>
		<td>Name</td>
		<td>seat no</td>
		<td>Departure Date</td>
	</tr>
	  	<?php
    $sql="SELECT * FROM `customer` order by C_id DESC LIMIT 0 , 9";
    $r=mysqli_query($conn,$sql);

if (mysqli_num_rows($r)>0) {
	while ($row=mysqli_fetch_assoc($r)) {
		
       		echo '<tr>';
			$a=$row["C_name"];
      $b= $row["seat_no"];
      $c=$row["R_no"];
      $d=$row["C_Date"];
      
      echo '<td>'.$c.'</td><td>' .$a. '</td><td>' .$b. '</td><td>' .$d.'</td>';
       echo '</tr>';
}}
else{
  echo "NOTHING TO DISPALY";
}

  ?>
  </table>
  </div>
</form>
</body>
</html>