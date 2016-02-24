<?php
  
   include 'connect.php';
   $track=$_POST["track"];
   $query="SELECT COUNT(*) from unapproved WHERE track="."'{$track}'";
   $retval=mysql_query($query,$conn);
   if(! $retval) 
   	 echo mysql_error();

   echo $retval;

 
?>