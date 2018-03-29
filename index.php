<!DOCTYPE html>
<html>
<head>
<?php 
include 'connect.php';
include 'head.php';
 ?>
 <link rel="stylesheet" type="text/css" href="index.css">
 <style type="text/css">
 	* 

.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #fff;
  font-size: 18px;
 
  position: relative;
  margin-top: -50px;
  margin-left: -10px;
 border: #a8d4b1 1px solid;border-radius:4px;
   background-color: #7cbdfa;
  text-align: center;

}


/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 4px;
position: relative;

  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

 </style>
  <script src="javscript.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "auto.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 225px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});
$(document).ready(function(){
	$("#search-boxe").keyup(function(){

		$.ajax({
		type: "POST",
		url: "auto2.php",
		data:'keyworde='+$(this).val(),
		beforeSend: function(){
			$("#search-boxe").css("background","#FFF url(LoaderIcon.gif) no-repeat 225px");
		},
		success: function(data){
			$("#suggesstion-boxe").show();
			$("#suggesstion-boxe").html(data);
			$("#search-boxe").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();

}
function select(val) {
	

$("#search-boxe").val(val);
$("#suggesstion-boxe").hide();
}
function checking(){
	var a=document.getElementById('search-box').value;
	// var b=document.getElementById('search-boxe').value;
	// var c=document.getElementByName('ddate').value;
	// if (a==""&&b==NULL) {
	// 	alert("Enter the required field");
	// 	return false;
	// }
	 if (a==""||a==NULL) {
		alert("Enter The required field");
		return false;
	}


}
</script>

</head>

<div class="boxed">

<form action="table.php" method="POST" onsubmit="return checking()">
<div class="frmSearch">
	From Address<br><input type="text" id="search-box" size="30" name="from" placeholder="FROM"><br><br>
	<div id="suggesstion-box"></div>
	<br>
 </div>

<div id="tobox">
	To Address<br><input type="text" id="search-boxe" name="to" size="30" name="to" placeholder="DESTINATION"><br><br>
</div><div id="suggesstion-boxe"></div>

	Select Deperature Date<br><input type="date" id="search-box" name="ddate" size="40"><br>


	<br>
	<input type="radio" name="choose">Both <input type="radio" name="choose" >Day <input type="radio" name="choose">Night<br><br>
  <div id="par"></div>
	<input type="submit" name="button" value="Search Buses" id="btnsearch"  style="background-color: #8ab4db; font-size: 15px; "><br>
	
</form>
</div>
<div  class="boxedslide">

<div class="slide">
    
     
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images\bg6.jpg" style=" width: 550px; height: 388px; margin-left: -25px; margin-top: -25px;">
  <div class="text">Travel different place at cheapest price</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images\bg3.jpeg" style=" width: 550px; height: 388px; margin-left: -25px; margin-top: -25px;">
  <div class="text">Remember us for safe journey</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images\bg1.jpg" style=" width: 550px; height: 388px; margin-left: -25px; margin-top: -25px;">
  <div class="text">Travel with different agency busses</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images\bg5.jpg" style=" width: 550px; height: 388px; margin-left: -25px; margin-top: -25px;">
  
  <div class="text">Explore Nepal With bus facilities all over nepal</div>
  
</div>
</div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
 
   
  </div> 

  </div>
  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

  <div class="rbox">
  <div class="newsupdate">
  	NEWS AND UPDATE
  	</div>

  	<div class="nline"></div>
  	<div class="realsnews">
  	<?php
    $sql="SELECT * FROM `routes` order by R_id DESC LIMIT 0 , 9";
    $r=mysqli_query($conn,$sql);
if (mysqli_num_rows($r)>0) {
	while ($row=mysqli_fetch_assoc($r)) {
		
       		
			$a=$row["From_address"];
      $b= $row["To_address"];
      echo $a." to ".$b." is "."<br> ADDED ".'<br>';
       echo '<div class="uline"></div>';
}}
else{
  echo "NOTHING TO DISPALY";
}

  ?>

  </div>
  </div>
  <div class="placebox"> 
  <label style="font-size: 23px;">TOP DESTINATION</label><br><br>

  Kathmandu  Taplejung  Dharan<br><br>
  Biratnagar Surkhet  Chitwan<br><br>
  Taplejung Pokhara  Lumbini<br><br>
  Kathmandu  Pokhara  Dharan<br><br>
  Kathmandu  Pokhara  Dharan<br><br>
  Kathmandu  Pokhara  Dharan<br><br>
  Biratnagar  Dharan<br><br>
  Mahendranagar  Dhankuta<br>
  
  </div>
  <div class="details">
  <label style=" color: #7cbdfa; font-size: 20px; padding: -10px;">Explore Nepal With Our Tour Packages</label><br>
  <div class="detailscontain">
  <div class="imgborder">
  <img src="images/bus_044-9dc693a89a4c42ffbf54775eb10a0fd9.jpg" style="height: 140px; width: 160px; border-radius: 4px">

  </div>

<div class="detailsbox">
	<strong>Manakamana darshan</strong><br>
	Manakamana one of the visited place of nepali people especially hindus
</div>
  </div>
  <div class="detailscontain1">
       <div class="imgborder">
  	 <img src="images/bus_044-9dc693a89a4c42ffbf54775eb10a0fd9.jpg" style="height: 140px; width: 160px; border-radius: 4px">
  </div>
<div class="detailsbox">
	<strong>Manakamana darshan</strong>
</div>

  </div>
  <div class="detailscontain2">
  <div class="imgborder">
  	 <img src="images/bus_044-9dc693a89a4c42ffbf54775eb10a0fd9.jpg" style="height: 140px; width: 160px; border-radius: 4px">
  	 </div>
  	 <div class="detailsbox">
	<strong>Manakamana darshan</strong>
</div>

  </div>
  <div class="detailscontain3">
  <div class="imgborder">
  	 <img src="images/bookbus.gif" style="height: 140px; width: 160px; border-radius: 4px">
  	 </div>
  	 <div class="detailsbox">
	<strong>Manakamana darshan</strong>
</div>


  </div>
  
  </div>
  <div class="bottom">
  	<label class="bottomcontain"> <a href="#"> Terms and conditions</a></label><a href="#"> Policies</a> <label class="bottomcontain"><a href="#"> About developer</a></label><a href="#"> FAQ</a> <label class="bottomcontain"><a href="#"> ABOUT COMPANY </a></label><a href="#"> Press Release</a>  <label class="bottomcontain"> Social media</label>
  	<a href="#"><img src="images/social-img.png" style="height: 20px;">
  </div>
</body>
</html>