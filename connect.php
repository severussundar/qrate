<?php
  
  $host="localhost"; 
  $user="root";
  $pass="orionspider2015";

  $conn=mysql_connect($host,$user,$pass);
  if(! $conn)
  	die("Could not create connection with server ".mysql_error()); 
  
  mysql_select_db("sangam") or die(mysql_error()." Could not select database");
  


?>