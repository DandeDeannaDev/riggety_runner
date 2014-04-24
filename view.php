<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="REGISTER FOR RACE" />

<meta name="keywords" content="RACE REGISTRATION" />

<meta name="author" content="DANDEWEBWONDERS" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Angels 5K &amp; 1 Mile Family Fun Run/Walk </title>


</head>

	<body>

		<div id="wrapper">

<?php include('header.php'); ?>

<?php include('nav.php'); ?>

<?php
include 'connection.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$query4="SELECT * FROM DR_race";
$result =mysql_query($query4);

echo "<p>";
 echo "<table border='1'>
<tr>
<th>ID</th>
<th>Firstname</th>
<th>LastName</th>
<th>Phone</th>
<th>Email</th>
<th>Age</th>
<th>Size</th>
</tr>";
while($person = mysql_fetch_array($result))
{

echo "<tr>";
echo "<td>".$person['ID']."</td>";
echo "<td>".$person['FirstName']."</td>";
echo "<td>".$person['LastName']."</td>";
echo "<td>".$person['Phone']."</td>";
echo "<td>".$person['Email']."</td>";
echo "<td>".$person['Age']."</td>";
echo "<td>".$person['Size']."</td>";
echo "</tr>";
}
echo "</table>";
echo "</p>";

?>







<?php include('footer.php'); ?>
</div>



</body>
</html>











