<?php
 
  include 'connect.php';  
  $maintopic=$_POST["maintopic"]; 
  $track=$_POST["track"];
 
  $query="SELECT subtopic FROM "."{$track}"." WHERE maintopic="."'{$maintopic}'";
  $retval=mysql_query($query,$conn); 
  if( !$retval)
  	echo mysql_error(); 
  
  $index=0;
  $arr=array();
  while($rows=mysql_fetch_assoc($retval))
  	{
       $arr[$index]=$rows['subtopic'];
       $index++;

  	} 
 
    echo $arr;

?>