
<?php
$dbhost = "localhost;

$dbuser = "whatuser";
 
$dbpassword = "whatpassword";
 
$dbdatabase = "whatdatabase"; 

$con=mysql_connect($dbhost,$dbuser,$dbpassword);

mysql_select_db($dbdatabase);
?>
