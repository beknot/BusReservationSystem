<?php
include 'connect.php';
$R_no=$_POST['rid'];


$From_address=$_POST['from'];
$From_park=$_POST['frompark'];
$R_length=$_POST['length'];
$To_address=$_POST['to'];
$To_park=$_POST['topark'];
$Route_name=$From_address.'-'.$To_address;
$Deparature=$_POST['d'];
$Amount=$_POST['money'];
$Max_time=$_POST['hours'];


$sql="INSERT INTO `routes` ( `R_no`, `R_name`, `R_length`,`From_address`, `From_park`, `To_address`, `To_park`, `Max_time`, `Rs_per`, `Time_allocated`) VALUES ( '$R_no', '$Route_name', '$R_length','$From_address', '$From_park', '$To_address', '$To_park', '$Max_time', '$Amount', '$Deparature')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>