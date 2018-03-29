<!DOCTYPE html>
<html>
<head>
<?php 
session_start();
include 'connect.php';


 $ass=$_SESSION['dated'];
$sqll="SELECT * FROM `customer` WHERE C_Date='2017-04-28'";
    $aa=array();$xx=0;$dd=array();
$resultt=mysqli_query($conn,$sqll);
if (mysqli_num_rows($resultt)>0) {
	while ($row=mysqli_fetch_assoc($resultt)) {
		
		
			 $aa=$row["seat_no"];
       $bb=explode(",",$aa);
       foreach ($bb as $seat) {
         $cc[$xx]=$seat;
          $xx++;   
       }
		
}}
else{
  echo "No Routes TO display";
}
?>
	<title></title>
    <link rel="stylesheet" type="text/css" href="select.css">
    <script type="text/javascript">
      function abc() {
         

          var x = document.getElementById("cc").checked;
          if (i==true) {
            
            document.getElementById("ii").src="seatsel.png";
          }
          else{
                    document.getElementById("ii").src="seatsel.png"
          }
        }
                }
    </script>
<style type="text/css">
  .cc{
    position: absolute;
  }
</style>
	</head>
<body>
<div class="seat">
<form  method="POST" action="payment .php">
  Name<br><input type="text" name="username"><br>
  Mobile<br><input type="number" name="mobile" maxlength="13" minlength="10"><br>
<div class="ch">
SEATS<br>
  <?php 
  
  $key=0;
for ($ii=1; $ii <=32 ; $ii++) { 

      for ($j=0; $j <$xx ; $j++) { 
        if ($cc[$j]==$ii) {
          $key=1;
          // echo $c[$j].'='.$ii;
          break;
        }
        else{
          $key=0;
        }
      }
      if ($ii<10) {
        $ii='0'.$ii;
      }
      if ($i==17) {
        echo'<br><br>';
      }
    if ($key==1) {
    echo '<input type="checkbox" checked="true" disabled="disabled">';

        }
    else{
    
    echo '<input type="checkbox" name="check[]" value="'.$ii.'">';
       }
      } 

?>

</div><br><br>
  <input type="submit" name="submited" value="PROCEED TO PAYMENT">

</form>
</div>

</body>
</html>