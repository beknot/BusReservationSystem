<!DOCTYPE html>
<?php 
include 'head.php';
 ?>
<html>
<head>
	<title></title>
	<style type="text/css">
		#register{
			padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;

		}
		#registerform{
			margin-top: 90px;
			margin-left: 400px;
			color: #7cbdfa;
       font-size: 15px;
   }
       #bbox{
   	border: 1px solid #5ecfd9;
   	border-radius: 4px;
   	text-align: center;
   	padding: 3px;
   	color: #397573;
   	margin-left: -20px;

   	width: 332px;
   	height: 30px;
   	background-color:#5ecfd9;
   

	</style>
</head>
<body>
<div id="registerform">
      <form action="coustomerlogin.php" method="POST">
	<div id="bbox"> Register</div><br>
	  Name <br><input type="text" name="cname" id="register" placeholder="Usename"><br>
	   Password<br><input type="password" name="cpassword" id="register" placeholder="password"><br>
	   Adress<br><input type="text" name="caddress" id="register" placeholder="Address"><br>
	   Contact<br><input type="text" name="ccontact" id="register" placeholder="Mobile No"><br><br>
	   <input type="submit" name="submit" value="Register user" id="register">

      </form>  

<?php 
include 'connect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$cname=$_POST['cname'];
	$cpassword=$_POST['cpassword'];
	$caddress=$_POST['caddress'];
	$ccontact=$_POST['ccontact'];
	$sql="INSERT INTO `custmerdetails` (`name`, `password`, `contact`, `address`) VALUES ( '$cname', '$cpassword', '$ccontact', '$caddress');";
	if (mysqli_query($conn, $sql)) {
    echo '<div id="regform">Registration sucessfull</div>';
}
}
 ?><br>
</div>
</body>
</html>