
<!DOCTYPE html>
<html>
<head>
<?php 

include 'adminhead.php';

?>
<link rel="stylesheet" type="text/css" href="admin.css">

</head>
  <div class="bus">
     <form action="adminmain.php" method="POST">
     <div id="txtt">
     	FROM<br><input type="text" id="txttt"  name="from" size="30">
     	Bus Park Name<input type="text" id="txttt" name="frompark"><br>
     	DESTINATION<br><input type="text" id="txttt" name="to" size="30">
     	Bus Park Name<input type="text" id="txttt" name="topark"><br>

     	Route No.<br><input type="number" id="txttt" name="rid" max="56" ><br>
     	ROUTE length(In KM)<br><input type="number" id="txttt" name="length" max="500"><br>
      MAX_Time(In hours)<br><input type="number" id="txttt" name="hours"> <br>
        Deparature<br><input type="radio" name="d"  value="DAY">DAY<input type="radio" name="d" value="NIGHT">NIGHT<br>
     	Route average Amount<br><input type="number" id="txttt" name="money" min="200" size="30"><br>
     	<br>
     	<input type="submit" id="txttt" name="submit" value="ADD ROUTE">
     </form>
     <!-- <a href="bus.php"><button>Add Bus</button></a> -->
     </div>
    </div>
</body>
</html>
