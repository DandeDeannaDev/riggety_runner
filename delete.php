<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="Angels 5K fun run" />

<meta name="keywords" content="run race 5 k angels baseball" />

<meta name="author" content="DANDEWEBWONDERS" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Angels 5K &amp; 1 Mile Family Fun Run/Walk </title>



</head>
<?php include('header.php'); ?>

<?php include('nav.php'); ?>
<body>
<form method="post" action="">
<fieldset>
<select name="select" id="del">

<option id="0"> --Select your Name--- </option>
<?php
include 'connection.php';

$aaa=mysql_query("select * from DR_race");

while ($view = mysql_fetch_array($aaa))
{
?>
<option id=" <?php echo $view['ID'];?> "> 
<?php echo $view['FirstName'];?> </option>
<?php } ?>
</select>

<input type="submit" value="delete"/>
</form>
</fieldset>


<?php

$d= filter_input(INPUT_POST, "select");
include 'connection.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$query1=("DELETE FROM DR_race WHERE FirstName = '$d' ");

$result =mysql_query($query1);

//********************************************
mysql_close($con);

?> 




</form>
<?php include('footer.php'); ?>
</div>



</body>

</html>
