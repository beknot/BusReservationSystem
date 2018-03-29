
<?php
include 'connect.php';
$a= array( 1,2);
print_r($a);
echo ("<br></br>");
$b=serialize($a);
print_r($b);

$sql="INSERT INTO `customers` (`Seat_no`) VALUES ('$b')";
mysqli_query($conn,$sql);
$a=unserialize($b);
?>