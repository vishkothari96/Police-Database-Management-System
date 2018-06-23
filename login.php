<html>
	<head>
	<style>
	h3{color:red;}
	.error{color:#FF0000;}
	</style>
	</head>
<link rel="stylesheet" href="./w3.css">
<link rel="stylesheet" href="./material.css">
<script src="./material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</script>
	<body>
<?php
ob_start();
	$username="";$password;$con=0;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username=$_POST["username"];
		$password=$_POST["password"];		
		if($username=="karkare2008"&&$password=="19962017")
			header('Location:./gateway.php');
		else
		{
			header('Location:./hacker.html');
	       }	
	}
?>

	<div class="w3-container w3-black" style="height:70px"></div>
	<marquee behavior="alternate" scrollamount="15"><img src="./new.png"><h3>Welcome!!Last Date To Update The Datebase is 25th Dec,2017!!</h3></marquee><br><br>
<div align="center">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<p style="margin-left:-225px"><span class="error">* required field.</span></p>		
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    	<input class="mdl-textfield__input" type="text" id="sample3" name="username" autocomplete="off">
    	<label class="mdl-textfield__label" for="sample3">Username</label></div>	
	<br>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    	<input class="mdl-textfield__input" type="password" id="sample3" name="password" autocomplete="off">
    	<label class="mdl-textfield__label" for="sample3">Password</label></div>
	<br>
	<input type="submit" name="submit" value="Submit"> 
	</form></div>
	</body>

</html>
