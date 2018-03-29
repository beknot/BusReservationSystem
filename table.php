<!DOCTYPE html>
<?php
include 'head.php';
include 'connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
$from=$_POST['from'];
$to=$_POST['to'];
$ddate=$_POST['ddate'];
session_start(); 
$_SESSION['dated']=$ddate;



$choose=$_POST['choose'];

$sql="SELECT * FROM `routes` WHERE `From_address`='$from' AND `To_address`='$to' OR `Time_allocated`='$choose'";


$e=array();$x=1;
$_SESSION["route"]=array();
$result=mysqli_query($conn,$sql);
if ($result) {
if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		
       $e[$x]=$row["R_no"];  		
			 $a[$x]=$row["From_address"];
       $b[$x]=$row["To_address"];
       $c[$x]=$row["Rs_per"];
       $d[$x]=$row['Time_allocated'];
       
 		$x++;

}
echo '<div style="margin-top:15px; margin-left:200px;color: #7cbdfa ">FROM :- ' .$a[1].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp To :- '.$b[1].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Departure date :-'.$ddate.'</div>';}

}
else {
  echo '<div style="margin-top: 15px;text-align: center;color: #7cbdfa;font-size: 20px;">NO routes to display<br></div>';
  
  $sql="SELECT * FROM `routes` WHERE `From_address` LIKE '".$from."%' OR `To_address` LIKE '".$to."%' AND `Time_allocated` LIKE '$choose'";
  $e=array();$x=1;
$_SESSION["route"]=array();
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
   echo '<div class="message1">Displaying similar routes </div>';
  while ($row=mysqli_fetch_assoc($result)) {
    
       $e[$x]=$row["R_no"];     
       $a[$x]=$row["From_address"];
       $b[$x]=$row["To_address"];
       $c[$x]=$row["Rs_per"];
      
       
  
    $x++;

}
echo '<div style="margin-top:15px; margin-left:200px;color: #7cbdfa ">FROM :- ' .$a[1].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp To :- '.$b[1].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Departure date :-'.$ddate.'</div>';;
}
else {
echo '<div style="margin-top: 15px;text-align: center;color: #7cbdfa;font-size: 20px;">Searched  routes is no aviliable </div>';
exit();
}
}

}
$x--;
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
<style type="text/css">
.ch{
  width: 500px;
  
padding: 10px;
float: left; 

}
  .cc{position: absolute;
    float: left;
    opacity: 0;
    width: 34px;
    height: 34px;
  }
  #btnview{
    padding: 10px;border: #a8d4b1 1px solid;border-radius:4px ;
              background-color:  #7cbdfa;
              color: red;
  }

</style>

<script type="text/javascript" src="raj.js"></script>
<script type="text/javascript">
    //   $(document).ready(function() {

    //      $("input[type=checkbox]").change( function() {
    //               var values = [];
    //             $.each($('input:checked'),function(index,input){
    //                 values.push(input.value);
    //              });
    //          var x=values.join(',');

    //         document.getElementById('srr').innerHTML=x;
    //       });
    // });
       function check(chk) {
    for (i = 0; i < chk.length; i++)
    chk[i].checked = true ;
}

function uncheck(chk) {
    for (i = 0; i < chk.length; i++)
    chk[i].checked = false ;
}

var itemsAdded = Array();

function movetext(text) { 
    var i = itemsAdded.indexOf(text)
    if ( i >= 0) { 
        itemsAdded.splice(i,1); 
    }
    else {
        itemsAdded.push(text);
    }
    document.getElementById("result").value=itemsAdded.join(","); 
}
function movetex(text) { 
    var i = itemsAdded.indexOf(text)
    if ( i >= 0) { 
        itemsAdded.splice(i,1); 
    }
    else {
        itemsAdded.push(text);
    }
    document.getElementById("resul").value=itemsAdded.join(","); 
}
function movete(text) { 
    var i = itemsAdded.indexOf(text)
    if ( i >= 0) { 
        itemsAdded.splice(i,1); 
    }
    else {
        itemsAdded.push(text);
    }
    document.getElementById("resu").value=itemsAdded.join(","); 
}
    

  function showit() {
    var x=document.getElementById('showit');
    if (x.style.display==='none') {
       x.style.display='block';
    }
    else{
      x.style.display='none';
    }
  }
</script>
	</head>
       
      <table  class="table" cellpadding="10px;">
      <tr>
      	  <th>R NO</th>
      	  <th>Travels</th>
          <th>Bus</th>
          <th>Depature</th>
          <th>Amount</th>
          <th>VIEW SEATS</th>
      </tr>
    
      <tr>
      <?php $i=1;if($x>=1){ 


  

$sqlll="SELECT * FROM `bus` WHERE  R_no='$e[$i]' AND ststus='1'";
$aaa=array();$x=1;$ddd=array();
$resulttt=mysqli_query($conn,$sqlll);
if (mysqli_num_rows($resulttt)>0) {
  while ($row=mysqli_fetch_assoc($resulttt)) {

       $e[$x]=$row["R_no"];     
       $a[$x]=$row["Bus_accos_name"];
       $b[$x]=$row["Departure_time"];
       $d[$x]=$row["Bus_type"];
       $c[$x]=$row["Price"];
       $bus_id[$x]=$row["Bus_id"];
      
       $x++;
                  
        }}
        $x--;
          $sqll="SELECT * FROM `customer` WHERE C_Date='$ddate' AND R_no='$e[$i]' ";
    $aa=array();$xx=1;$dd=array();
$resultt=mysqli_query($conn,$sqll);
if (mysqli_num_rows($resultt)>0) {
  while ($row=mysqli_fetch_assoc($resultt)) {
    
    
       $aa=$row["seat_no"];
       $bb=explode(",",$aa);
       foreach ($bb as $seat) {
         $cc[$xx]=$seat;
          $xx++;   
       }

    
}
$jaj=1;
}
    
     $_SESSION['departure_time'] = $b[$i];
     $_SESSION['R_no'] = $e[$i];
     $_SESSION['Price']=$c[$i];
        ?>
          <th><?php  echo $e[$i]; ?></th>
          <th><?php  echo $a[$i]; ?></th>
          <th><?php  echo $d[$i]; ?></th>
          <th><?php  echo $b[$i]; ?></th>
          <th><?php  echo $c[$i]; ?></th>
          <th>
           <button onclick="showit()" id="btnview">View seat</button></th>
      </tr>
      <?php } ?>
      <tr>
      <td colspan="6">
                <div id="showit" style="width:800px; height: 250px; display: none; border: 1px solid; padding: 10px;"> 

<?php 


?>
  <script type="text/javascript">
    function checking() {
      var a=document.getElementById('srr').value;
      if (a==""||a==NULL) {
    alert("Enter The required field");
    return false;
  }

    }
  </script>

<div class="seat">
<form  method="POST" action="payment .php">
  
<div class="ch">

SEATS<br>
  <?php 
  $ac="A";
  $key=0;
  $jaj=1;
for ($ii=1; $ii <=33 ; $ii++) { 

      for ($j=1; $j <$xx ; $j++) { 

        if ($cc[$j]==$ii||$ii==1) {
          $key=1;
          // echo $c[$j].'='.$ii;
          break;
        }
        else{
          $key=0;
        }
        
      }
      // $sear=27;
      // $y=33-27;
      // for ($jk=1; $jk <$y ; $jk++) { 
      //   if ($ii==1) {
      //    $key=1;
        
      //    break;
      //   }
      //   else{
      //     $key=0;
      //   }
      // }
      if ($ii<10) {
        $ii='0'.$ii;
      }
      
      if ($ii==18) {
        echo'<br><br>';
        
      }
     
        $ac="S";
     
      if ($ii==19) {
        echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
        
      }
     
      if ($ii==10) {
        echo'<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
      }
      if ($ii==26) {
        echo'<br>';
      }
       if ($ii==27) {
        echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
      }
    if ($key==1||$ii==1) {
    echo '<img src="booked.png" >';

        }
    else{
    // if ($ii==1) {
    //   $key==1;
    // }
    echo '<label for="cc" style="position:absolute; margin-top:11px;margin-left:6px; font-size:13px; color:red;">'.$ac.$ii.'</label><input type="checkbox" name="check[]" class="cc" value="'.$ii.'" id="abcd" onclick="movetext(this.value)"><img src="seatava.png" id=imagg >';
       }
       if ($ii==1) {
        echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
               }
      
      } 

?> 

</div><br><br>
<div style="float: left; padding: 30px;">

        T<br>
        Selected Seat<br>
        <div id="seatsel">
      <textarea id="result" rows="2" cols="20" readonly></textarea>
      </div>
  <input type="submit" name="" value="Continue"">
  
</div>
</form>
</div>


                
               </div>
               </td>
      </tr>
      <script type="text/javascript">
        function showit1() {
    var x=document.getElementById('showit1');
    if (x.style.display==='none') {
       x.style.display='block';
    }
    else{
      x.style.display='none';
    }
  }
      </script>
      <?php if($x>=2){ $i++; 
$sqlll="SELECT * FROM `bus` WHERE  R_no='$e[$i]' AND ststus='1'";
$aaa=array();$x=1;$ddd=array();
$resulttt=mysqli_query($conn,$sqlll);
if (mysqli_num_rows($resulttt)>0) {
  while ($row=mysqli_fetch_assoc($resulttt)) {

       $e[$x]=$row["R_no"];     
       $a[$x]=$row["Bus_accos_name"];
       $b[$x]=$row["Departure_time"];
       $d[$x]=$row["Bus_type"];
       $c[$x]=$row["Price"];
       $bus_id[$x]=$row["Bus_id"];
      
       $x++;
                  
        }}
        $x--;
          $sqll="SELECT * FROM `customer` WHERE C_Date='$ddate' AND R_no='$e[$i]' AND CBus_id='$bus_id[$i]'";
    $aa=array();$xx=1;$dd=array();
$resultt=mysqli_query($conn,$sqll);
if (mysqli_num_rows($resultt)>0) {
  while ($row=mysqli_fetch_assoc($resultt)) {
    
    
       $aaa=$row["seat_no"];
       $bbb=explode(",",$aaa);
       foreach ($bbb as $seat) {
         $ccc[$xx]=$seat;
          $xx++;   
       }

    
}
$jaj=1;
}
         $_SESSION['bus_id'] = $bus_id[$i];
     $_SESSION['departure_time'] = $b[$i];
     $_SESSION['Price']=$c[$i];
       ?>

      <tr>
      
          <th><?php  echo $e[$i]; ?></th>
          <th><?php  echo $a[$i]; ?></th>
          <th><?php  echo $d[$i]; ?></th>
          <th><?php  echo $b[$i]; ?></th>
          
          <th><?php  echo $c[$i]; ?></th>
          <th><button id="btnview" onclick="showit1()" >View seats</button></th>
      </tr>
       <tr>

      <td colspan="6">
                <div id="showit1" style="width:800px; height: 250px; display: none; border: 1px solid; padding: 10px;"> 

  

<div class="seat">
<form  method="POST" action="payment .php">
  
<div class="ch">

SEATS<br>
  <?php 
  
  $key=0;
for ($ii=1; $ii <=33 ; $ii++) { 

      for ($j=1; $j <$xx ; $j++) { 
        if ($ccc[$j]==$ii||$ii==1) {
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
      
      if ($ii==18) {
        echo'<br><br>';
        
      }
      
        $ac="S";
      
      if ($ii==19) {
        echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
        
      }
      if ($ii==10) {
        echo'<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
      }
      if ($ii==26) {
        echo'<br>';
      }
       if ($ii==27) {
        echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
      }
    if ($key==1||$ii==1) {
    echo '<input type="checkbox" checked="true" disabled="disabled" class="cc"><img src="booked.png" >';

        }
    else{
    
    echo '<label for="cc" style="position:absolute; margin-top:11px;margin-left:6px; font-size:13px; color:red;">'.$ac.$ii.'</label><input type="checkbox" name="check[]" class="cc" value="'.$ii.'" onclick="movetex(this.value)"><img src="seatava.png" id=imagg >';
       }
       if ($ii==1) {
        echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
               }
      
      } 

?>

</div><br><br>
<div style="float: left; padding: 30px;">

        <br>
        Selected Seat<br><br><br>
      <textarea id="resul" rows="2" cols="20" readonly></textarea><br>
  <input type="submit" name="" value="Continue">
</div>
</form>
</div>


                
               </div>
               </td>
      </tr>
<script type="text/javascript">
  function showit2() {
    var x=document.getElementById('showit2');
    if (x.style.display==='none') {
       x.style.display='block';
    }
    else{
      x.style.display='none';
    }
    
  }
</script>     
      <?php } ?>
      <?php $i++; if($x>=3){
      $sqlll="SELECT * FROM `bus` WHERE  R_no='$e[$i]' AND ststus='1'";
$aaa=array();$x=1;$ddd=array();
$resulttt=mysqli_query($conn,$sqlll);
if (mysqli_num_rows($resulttt)>0) {
  while ($row=mysqli_fetch_assoc($resulttt)) {

       $e[$x]=$row["R_no"];     
       $a[$x]=$row["Bus_accos_name"];
       $b[$x]=$row["Departure_time"];
       $d[$x]=$row["Bus_type"];
       $c[$x]=$row["Price"];
       $bus_id[$x]=$row["Bus_id"];
      
       $x++;
                  
        }}
        $x--;
          $sqll="SELECT * FROM `customer` WHERE C_Date='$ddate' AND R_no='$e[$i]' ";
    $aa=array();$xx=1;$dd=array();
$resultt=mysqli_query($conn,$sqll);
if (mysqli_num_rows($resultt)>0) {
  while ($row=mysqli_fetch_assoc($resultt)) {
    
    
       $aa=$row["seat_no"];
       $bb=explode(",",$aa);
       foreach ($bb as $seat) {
         $cc[$xx]=$seat;
          $xx++;   
       }

    
}
$jaj=1;
} 
     $_SESSION['bus_id']= $bus_id[$i];
     $_SESSION['departure_time'] = $b[$i];
     $_SESSION['Price']=$c[$i];
?>
      <tr>
      
          <th><?php  echo $e[$i]; ?></th>
          <th><?php  echo $a[$i]; ?></th>
          <th><?php  echo $d[$i]; ?></th>
          <th><?php  echo $b[$i]; ?></th>
          
          <th><?php  echo $c[$i]; ?></th>
          <th><button id="btnview" onclick="showit2()">View seats</button></th>
      </tr>
       <tr>
      <td colspan="6">
                <div id="showit2" style="width:800px; height: 250px; display: none; border: 1px solid; padding: 10px;"> 

 

<div class="seat">
<form  method="POST" action="payment .php">
  
<div class="ch">

SEATS<br>
  <?php 
  $ac="S";
  $key=0;
for ($ii=1; $ii <=33 ; $ii++) { 

      for ($j=1; $j <$xx ; $j++) { 
        if ($cc[$j]==$ii||$ii==1) {
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
      
      if ($ii==18) {
        echo'<br><br>';
        
      }
          
      if ($ii==19) {
        echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
        
      }
      if ($ii==10) {
        echo'<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
      }
      if ($ii==26) {
        echo'<br>';
      }
       if ($ii==27) {
        echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
      }
    if ($key==1) {
    echo '<input type="checkbox" checked="true" disabled="disabled" class="cc"><img src="booked.png" >';

        }
    else{
    
    echo '<label for="cc" style="position:absolute; margin-top:11px;margin-left:6px; font-size:13px; color:red;">'.$ac.$ii.'</label><input type="checkbox" name="check[]" class="cc" value="'.$ii.'"onclick="movete(this.value)"><img src="seatava.png" id=imagg >';
       }
       if ($ii==1) {
        echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
               }
      
      } 

?>

</div><br><br>
<div style="float: left; padding: 30px;">

        
        Selected Seat<br><br><br>
      <textarea id="resu" cols="20" rows="2" readonly></textarea><br>
  <input type="submit" name="" value="Continue"">
</div>
</form>
</div>


                
               </div>
               </td>
      </tr>
     
      <?php } ?>
      

</table>

</html>
