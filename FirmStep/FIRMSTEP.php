<!DOCTYPE html>
<html >
<head>
<title>FIRMSTEP Test</title>

<script>

	function showDivOrg() {
   document.getElementById('anOrg').style.display = "block";
   document.getElementById('notAnon').style.display = "block";
   document.getElementById('submit').style.display = "block";

}
	function showDiv() {
   document.getElementById('notAnon').style.display = "block";
   document.getElementById('anOrg').style.display = "none";
   document.getElementById('submit').style.display = "block";
  
}
function hide() {
   document.getElementById('notAnon').style.display = "none";
   document.getElementById('anOrg').style.display = "none";
   document.getElementById('submit').style.display = "\n\n";

}

</script>
</head>
<body>

<form method = "post" action="addFirmstep.php">	
	Service: <br>
	<input type="radio" value="housing" name="service" checked />Housing <br> 
	<input type="radio" value="benefits" name="service" />Benefits <br />
	<input type="radio" value="tax" name="service" />Council Tax <br />
	<input type="radio" value="flytip" name="service" />Fly-Tipping <br />
	<input type="radio" value="bin" name="service" />Missed Bin <br /><br />
	
	<button onclick="showDiv()" name="cit">Citizen</button>
	<button onclick="showDivOrg()" name="orgn">Organisation</button>	
	<button onclick="hide()" name="anon">Anonymous</button>
	
	<div id="notAnon" style="display:block;">
	Title: <br>	
	<select name="title">
		<option value="1" selected="selected"> Mr. </option>
		<option value="2"> Mrs. </option>
		<option value="3"> Ms. </option>
		<option value="4"> Dr. </option>
		<option value="5"> Miss </option>
		<option value="6"> Master </option>
	</select><br/> <br/>
	First Name: <input type="text" name="firstname" /><br /><br />
	Last Name: <input type="text" name="surname" /><br /><br />
	</div>
	<div id="anOrg" style="display:none;">
	Organisation: <input type="text" name="org" /><br /><br />
	</div>

	<div id="submit">
	<input  type="submit" name="submit" value="Submit" />
	</div>
</form>




</body>
</html>