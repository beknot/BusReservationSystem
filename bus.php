<!DOCTYPE html>
<html>
<head>
	<title></title>
   <link rel="stylesheet" type="text/css" href="admin.css">
<style type="text/css">
  #abcde
    {border: #a8d4b1 1px solid;border-radius:4px;
    padding: 10px;
    }
  #acc
    {}
  
</style>
</head>
<body>
<?php 
include 'adminhead.php';
include 'connect.php';
$sql="SELECT  R_no FROM `routes`";
$a=array();$x=0;$i=0;
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
	
			 $a[$x]=$row["R_no"];
       $x++;
}}
?>
<div id="acc">
   <form action="busmain.php" class="bus" method="POST">
   
   Route No.	<select name="Route" id="abcde">
   	<?php while($x>0) {?>
   		<option><?php echo $a[$i];$x--;$i++ ?></option>
   		<?php 
      }
   	 ?>

   	</select>
   	<br>
<!--    	<?php 
include 'connect.php';
$sql="SELECT  Bus_id FROM `bus`";
$a=array();$x=0;$i=0;
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		
		
			 $a[$x]=$row["Bus_id"];
       

		$x++;
}}
   	 ?> -->
   	Bus No.<br><input type="text" name="Busid" id="abcde"><br>
   	
   	Bus Assoc Name<br><input type="text" name="Busassocname" id="abcde"><br>
   	Bus Type<br>
      <select name="type"id="abcde">
         
         <option>DELUXE</option>
         <option>AC condition</option>

      </select>
      <br>
   	<caption>All the Bus have same no. of seat<br></caption>
   	Price<br><input type="number" name="Price" id="abcde"><br>
        <input type="submit" value="ADD BUS" id="abcde">
           </div>
           </form>
</body>
</html>