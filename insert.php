<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="Race Registration Website" />

<meta name="keywords" content="Race Register Angels" />

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

if (isset($_POST['firstname'])&& isset($_POST['lastname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['size']))
{
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $Phone = $_POST['phone'];
 $email = $_POST['email'];
 $age = $_POST['age'];
 $size= $_POST['size'];

}
else
{
 $firstname = "(Not entered)";
 $lastname = "(Not entered)";
 $Phone = "(Not entered)";
 $email = "(Not entered)";
 $age  = "(Not entered)";
 $size = "(Not entered)";
}


echo <<<_END
<html>
<head>
<title>Angels Fun Run</title>
</head>
<body>


<p>
<form method="post" action="">
<fieldset>
Firstname: <input type="text" name="firstname" required/></br> </br> 
Lastname: <input type="text" name="lastname" required/></br> </br> 
Phone: <input type="text" name="phone" required /></br> </br> 
E_mail: <input type="text" name="email" required /></br> </br> 
Age: <input type="text" name="age"/ required ><br></br> </br> 
T-shirt size: <input type="text" name="size" required />
<input type="submit" name="insert" value="Register"/>
</fieldset>
</form>
</p>
</body>
</html>
_END;

if (isset($_POST['insert'])){
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query1="INSERT INTO DR_race (ID, FirstName, LastName, Phone, Email, Age, Size)
VALUES (Null,'$firstname', '$lastname', '$Phone', '$email', '$age', '$size') ";
$result =mysql_query($query1);



//********************************************
mysql_close($con);
}
?> 


<?php include('footer.php'); ?>










