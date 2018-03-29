<?php
include 'connect.php';
$R_no=$_POST['Route'];


$Bus_no=$_POST['Busid'];
$Bus_Assoc_Name=$_POST['Busassocname'];

$Type=$_POST['type'];
$Price=$_POST['Price'];

// $a="SELECT `No._of_bus`, FROM `routes` WHERE `R_no`=$R_no";
// $result=mysqli_query($conn,$sql);
// if (mysqli_num_rows($result)>0) {
// 	while ($row=mysqli_fetch_assoc($result)) {
		
//        $e=$row["No._of_bus"];  		
			 
// }}


$sql="INSERT INTO `bus` (`R_no`, `Bus_id`, `Bus_accos_name`, `Bus_type`, `Price`) VALUES ('$R_no', '$Bus_no', '$Bus_Assoc_Name', '$Type', '$Price')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>