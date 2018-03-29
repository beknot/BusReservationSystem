<!DOCTYPE html>
<?php
include 'adminhead.php'; 
?>
<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
		#failed{
			color: #ed310c;
			
			font-size:15px; 
		}
		#main{
          border: 1px solid #1b645e;
         padding: 20px;
        margin-left: 500px;
        margin-top: 180px;
        width: 300px;
        height: 250px;
          
	}
		#tt{
 padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;
         }
		#ll{
			font-size: 20px;
			color: #69c3f2;
		}
   #btntt{
   padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;
   margin-left: 90px;
    color: #69c3f2;
    background-color: #4e979e;
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
   }
   #invalidd{
   	color: #fb3323;
   	text-align: center;
   	font-size: 20px;
   }
	</style>

</head>
<body>
<div id="main">
	<form method="POST" action="adminlogin.php">
	<div id="bbox"> ADMIN LOGIN </div><br>
		<label id="ll">userName</label><input type="text" id="tt" name="username" placeholder="userName"><br><br>
		<label id="ll">password </label> <input type="password" id="tt" name="password" placeholder="password"><br><br>
		<input type="submit" name="submit" value="LOGIN" id="btntt"><br><br>
       <?php 

include 'connect.php';
 session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
 $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
$sql="SELECT `A_name`, `A_password`, `status` FROM `admin` WHERE A_name= '$myusername' AND A_password='$mypassword'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      if ($count==1) {
      	
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcomeadmin.php");
      }
      else{
      	echo '<div id="invalidd">Invalid Username or Password<div>';
      }
  }

?>		
	</form>
</div>
 
</body>
</html>
