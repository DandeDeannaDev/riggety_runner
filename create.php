<?php
include 'connection.php';
$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbdatabase);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  
// Create table
$sql="CREATE TABLE DR_race
(
ID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
FirstName CHAR(15),
LastName CHAR(15),
Phone CHAR(30),
Email CHAR(15),
Age INT,
Size CHAR(15)
)";


// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table Race created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?>
