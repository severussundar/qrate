<?php
  
  include 'connect.php';
  $url=$_POST["url"];
  $query="DELETE FROM unapproved WHERE url="."'{$url}'";
  $retval=mysql_query($query,$conn); 
  if(! $retval)
    echo mysql_error();
  
  

?>