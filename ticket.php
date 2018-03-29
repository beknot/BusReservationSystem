<?php 
include 'head.php';
 ?>
<html>
<head>
	<title></title>
	<style type="text/css">
		#sucess{
			font-size: 20px;
			color: #7cbdfa; 
			text-align: center;
			margin-top: 50px;
		}
	</style>
</head>
<body>

</body>
</html>
<!DOCTYPE html>
<?php 
include 'connect.php';
session_start();

$rand=rand(1000,100000);
$acd=$_SESSION['Price'];

$departdate=$_SESSION['dated'];
 $cbusid=$_SESSION['bus_id'] ;
     $departtime=$_SESSION['departure_time'] ;
     $R_no=$_SESSION['R_no'] ;
     $seat_no=$_SESSION['seat_no'];
     $Total_seat=count($seat_no);
     $Total_cost=$acd*$Total_seat;
     $cname=$_POST['cname'];
$cpnhone=$_POST['cpnhone'];
$sql="INSERT INTO `customer`(`C_name`, `C_phone`, `R_no`, `seat_no`, `Total_seat`, `C_depaturetime`, `Total_cost`, `code`, `C_Date`, `Time`) VALUES ('$cname','$cpnhone','$R_no','$seat_no','$Total_seat','$departtime','$Total_cost','$rand','$departdate','')";
$re=mysqli_query($conn,$sql);
if (!$re) {
	echo "unsucesssful";
}
else{
	echo '<div id="sucess">SUCESSFULLY COMPLETED PROCESS <br> NAME :- '.$cname.'<br>Seat Choosen :-'.$seat_no.'<br>
 <input type="submit" name="" value="Pocess To Payment" style="padding: 4px;border: #a8d4b1 1px solid;border-radius:4px; ">
 </div>';
}
 ?>
 

