<?php
  include 'connect.php';

  $track=$_POST["track"];
  $query="SELECT * from unapproved where track="."'{$track}'";
  $retval=mysql_query($query,$conn);
  if(! $retval)
  	echo mysql_error();

  $arr=array();
  while($rows=mysql_fetch_assoc($arr))
   {  
       $arr[]=array(
            'title'=>"$rows['name']",
            'url'=>"$rows['url']",
            'email'=>"$rows['email']",
            'name'=>"$rows['username']" 
       	);

   } 	 

  echo json_encode($arr);

?>