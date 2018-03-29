<html>
<script>
function dated(){
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
var hrs=today.get();
document.write(mm);
if(dd<10) {
    dd='0'+dd
} 

if(mm<10) {
    mm='0'+mm
} 

today = mm+'/'+dd+'/'+yyyy;
document.getElementById('de').value='dsad';
}
</script>
<body onload="dated()">
	<p id="de"></p>
</body>
</html>