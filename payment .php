<?php 
include 'head.php';
include 'connect.php';
$aeawe=implode(",",$_POST['check']);

session_start();


$_SESSION['seat_no']=$aeawe;
 $d=$_SESSION['R_no'] ;
    $c= $_SESSION['Price'];


    $sql="SELECT * FROM `routes` WHERE R_no='$d'";
    $r=mysqli_query($conn,$sql);
if (mysqli_num_rows($r)>0) {
  while ($row=mysqli_fetch_assoc($r)) {
    
          
      $a=$row["From_address"];
      $b= $row["To_address"];
      $f=$row["From_park"];
      
}}
else{
  echo "NOTHING TO DISPALY";
}

  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<style type="text/css">
		.booking1{
       padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;
        margin-left: 150px;
        margin-top: 100px;
        font-size: 20px;
        color: #7cbdfa;
        width: 300px;
        float: left;
      		}
		.bookk{
			 padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;
		}
		.bookbtn{
			 padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;
              background-color:  #7cbdfa;
		}
	</style>
</head>
<body>
<form action="ticket.php" method="POST">
   <div class="booking1">
      Name<br><input  class="bookk" type="text" name="cname"><br>
      Mobile No<br><input  class="bookk" type="number" name="cpnhone" minlength="10"><br>
     Boarding Point<br> <select class="bookk">
       <option></option>
       <option><?php echo $f; ?></option>
     </select><br><br>
    <input  class="bookbtn" type="submit" name="" value="Confirm Booking">
    </div>
        </form>
        <div style="border: 1px solid; margin-top: 50px; position: absolute; margin-left: 900px; width: 300px;font-size: 20px;
height: 100px; color: #7cbdfa; padding: 30px;">
          <?php 
          echo "Selected Route<br>";
            echo "FROM :- ".$a.'<br>';
            echo "TO:- ".$b.'<br>';
            echo " Price :- ".$c.'&nbsp PER TICKET<br>';
           ?>
        </div>
</body>
</html>
