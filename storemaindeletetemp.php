<?php
  include 'connect.php';
  $track=$_POST["track"];
  $maintopic=$_POST["maintopic"];  
  $subtopic=$_POST["subtopic"];
  $rating=$_POST["rating"];
  $title=$_POST["title"];
  $url=$_POST["url"];
  $kind=$_POST["kind"];
  $difficulty=$_POST["difficulty"];
  $query="INSERT INTO "."{$track}"."(maintopic,subtopic,rname,rurl,rsurl,kind,rating,difficulty) VALUES (".
    "'{$maintopic}'".","."'{$subtopic}'".","."'{$rname}'".",".
    "'{$url}'".","."'{$surl}'".","."'{$kind}'".","."{$rating}".","."'{$difficulty}'".
    ")";
  $retval=mysql_query($query,$conn);
  if(! $retval)
    echo mysql_error();         	

  echo "Successfully inserted into table ."; 

  $query="DELETE FROM unapproved WHERE track="."'{$track}'"." AND url="."'{$url}'";
  $retval=mysql_query($query,$conn);
  if( !$retval)
  	echo mysql_error(); 
   
   echo "Successfully deleted from unapproved.";

?>