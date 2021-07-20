<?php 

$server="localhost";
$username="id17281750_root";
$password="Sudipbanik1@";
$db="id17281750_basic_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
