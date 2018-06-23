<html>

<head>
</head>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
<body>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
 # Init the MySQL Connection
if($_POST['year']=="2017"){
  $db = mysqli_connect('localhost','root','','2017');
    if(!$db){
	die("Connection FAiled".mysqli_connect_error());
	}
# Prepare the SELECT Query
	$prepare="131231";
//$selectSQL = "SELECT * FROM list_2017 where P_ID=$prepare";
$selectSQL = "SELECT * FROM list_2017";
 # Execute the SELECT Query
  $selectRes = mysqli_query($db,$selectSQL);
}


if($_POST['year']=="2016"){
  $db = mysqli_connect('localhost','root','','2016');
    if(!$db){
	die("Connection FAiled".mysqli_connect_error());
	}
# Prepare the SELECT Query
	$prepare="131231";
//$selectSQL = "SELECT * FROM list_2017 where P_ID=$prepare";
$selectSQL = "SELECT * FROM list_2016";
 # Execute the SELECT Query
  $selectRes = mysqli_query($db,$selectSQL);
 }

if($_POST['year']=="2015"){
  $db = mysqli_connect('localhost','root','','2015');
    if(!$db){
	die("Connection FAiled".mysqli_connect_error());
	}
# Prepare the SELECT Query
	$prepare="131231";
//$selectSQL = "SELECT * FROM list_2017 where P_ID=$prepare";
$selectSQL = "SELECT * FROM list_2015";
 # Execute the SELECT Query
  $selectRes = mysqli_query($db,$selectSQL);
 }

if($_POST['year']=="2014"){
  $db = mysqli_connect('localhost','root','','2014');
    if(!$db){
	die("Connection FAiled".mysqli_connect_error());
	}
# Prepare the SELECT Query
	$prepare="131231";
//$selectSQL = "SELECT * FROM list_2017 where P_ID=$prepare";
$selectSQL = "SELECT * FROM list_2014";
 # Execute the SELECT Query
  $selectRes = mysqli_query($db,$selectSQL);
}
if($_POST['year']=="2013"){
  $db = mysqli_connect('localhost','root','','2013');
    if(!$db){
	die("Connection FAiled".mysqli_connect_error());
	}
# Prepare the SELECT Query
	$prepare="131231";
//$selectSQL = "SELECT * FROM list_2017 where P_ID=$prepare";
$selectSQL = "SELECT * FROM list_2013";
 # Execute the SELECT Query
  $selectRes = mysqli_query($db,$selectSQL);
 }
}?>

<table class="centered highlight">
  <thead>
    <tr>
      <th>&nbsp;&nbsp;PID&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;NAME&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;DOB&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;START_YO&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;SEX&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;POSITION&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;DISTRICT&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;CITY&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;AWARDS&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;LANGUAGES_KNOWN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;PROM0TION&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;AADHAR NO&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;RETIREMENT_YEAR&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;UNDERTRAINING&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;ON_SERVICE&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;COMMENTS&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if(mysqli_num_rows($selectRes)==0 ){
	echo "<br>";
        echo '<tr><td colspan="16">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row["P_ID"]}</td><td>{$row['NAME']}</td><td>{$row['DOB']}</td><td>{$row['EMAIL']}</td><td>{$row['START_YOS']}</td><td>{$row['SEX']}</td><td>{$row['POSITION']}</td><td>{$row['AREA']}</td><td>{$row['DISTRICT']}</td><td>{$row['CITY']}</td><td>{$row['AWARDS']}</td><td>{$row['LANGUAGES_KNOWN']}</td><td>{$row['PROMOTION']}</td><td>{$row['AADHAR_NO']}</td><td>{$row['RETIREMENT_YEAR']}</td><td>{$row['UNDERTRAINING']}</td><td>{$row['ON_SERVICE']}</td><td>{$row['COMMENTS']}</td></tr>\n";
        }
}
    ?>
  </tbody>
</table>
</body>

</html>
