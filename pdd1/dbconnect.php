<?php 
$mysqli = new mysqli ('pdd1', 'root', '', 'Web'); 
if ($mysqli->connect_error) 
{ 
  die (' Connect Error ('.$mysqli->connect_errno.')'.$mysqli->connect_error); 
}  
?>