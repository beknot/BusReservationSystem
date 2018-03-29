<!DOCTYPE html>
<?php 
include 'head.php';
include 'connect.php';
 ?>
<html>
<head>
	<title></title>
	<style type="text/css">
		.howtoo{
			 padding: 20px;
        margin-left: 200px;
        margin-top: 80px;
        width: 400px;
        height: 250px;
         color: #7cbdfa;
        font-size: 20px;
        border: 1px solid #5ecfd9;
   	border-radius: 4px;
    }
    .packagesdetails{
    	position: absolute;
    	padding: 5px;
    	width: 500px;
    	margin-top: -250px;
    	margin-left: 800px;
    	color: #7cbdfa;
    	border: 1px solid #5ecfd9;
   	border-radius: 4px;
    }
	</style>
</head>
<body>
<div class="howtoo">
	<label style="font-size: 25px;"> Travel all over nepal with Our Online Bus Ticket Booking system</label><br><br>
	<strong>1.Search from where you want to go<br>
	2.Search To which place you want to go (Destination)<br>
	3.Select your Departure Date<br>
	4.Select at whit time you want to travel DAY or NIGHT</strong><br>
</div>
<div class="packagesdetails">
<label style="font-size: 25px;">Tour packages</label><br><br>
	<?php 
      $sql="SELECT `p_id`, `p_name`, `p_price`, `p_time`, `p_type` FROM `packages` WHERE 1";
       $r=mysqli_query($conn,$sql);
if (mysqli_num_rows($r)>0) {
	while ($row=mysqli_fetch_assoc($r)) {
		
       		
			$a=$row["p_name"];
      $b= $row["p_price"];
      $c=$row["p_time"];
      echo $a." is avaliable for just ".$b." the duration of tour will be ".$c.'<br>';
       
}}
else{
  echo "NOTHING TO DISPALY";
}
	 ?>
	 <a href="#"><button style="padding: 10px;border: #a8d4b1 1px solid;border-radius:4px; margin-left: 330px;">VIEW DETAILS</button></a>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
<footer style="height: 20px; font-size: 12px; margin-left: 40px;">TERMS AND CONDITION ABOUT US </footer>
</body>
</html>