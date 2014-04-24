<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Angels 5K &amp; 1 Mile Family Fun Run/Walk </title>





		

<?php include('header.php'); ?>

<?php include('nav.php'); ?>

<?php include 'connection.php';?>

</head>
<body>
<div id="wrapper">
<fieldset>
<form method="post" action="">

<select name="select" id="del">

<option id="0"> --Select your Name--- </option>
<?php


$aaa=mysql_query("select * from DR_race");

while ($view = mysql_fetch_array($aaa))
{
?>
<option id=" <?php echo $view['ID'];?> "> 
<?php echo $view['FirstName'];?> </option>
<?php } ?>
</select>
</fieldset>
<br>
<br>
<br>

<?php
//<input type="submit" /> save it to later use

$D= filter_input(INPUT_POST, "select");
include 'connection.php';
$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbdatabase);

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


<body>
<form method="post" action="">
<fieldset>
Firstname: <input type="text" name="firstname" required/><br><br>
LastName : <input type="text" name="lastname" required/><br><br>
Phone: <input type="text" name="phone" required /><br><br>
E_mail: <input type="text" name="email" required /><br><br>
Age: <input type="text" name="age"/ required ><br><br><br>
T-shirt size: <input type="text" name="size" required />
<input type="submit" value="update" />
</form>
</fieldset>
</body>
</html>
_END;

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
mysqli_query($con,"UPDATE DR_race SET FirstName='$firstname' , LastName='$lastname' , Phone='$Phone', Email='$email' , Age='$age' , Size='$size'
WHERE FirstName='$D' ");
//********************************************

?> 


</form>


<<?php include('footer.php'); ?>




</body>
</html>


