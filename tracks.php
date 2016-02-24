<?php
  
  include 'connect.php';
  $track=$_POST["track"];
  
  $query="SELECT * FROM "."{$track}";
  echo $query;
  $retval=mysql_query($query,$conn);
  if(! $retval)
  	echo mysql_error(); 
  
  $arr=array();
  while($rows=mysql_fetch_assoc($retval))
    {  
       if(! in_array($rows['maintopic'], $arr))
         {
         	$arr[]=array(
                'maintopic'=>"$rows['maintopic']",
                'url'=>"$rows['imageurl']"  
         		);
         	
         }  
    }

   echo json_encode($arr);
  
 ?>