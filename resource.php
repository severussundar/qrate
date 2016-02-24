<?php
   include 'connect.php';
   $track=$_POST["track"];
   $main=$_POST["maintopic"];
   $sub=$_POST["subtopic"];
   
   $query="SELECT * FROM "."{$track}"." WHERE maintopic="."'{$main}'"."AND subtopic="."'{$sub}'";
   $retval=mysql_query($query,$conn);
   if( !$retval)
   	 echo mysql_error();
   
   $arr=array();
   while($rows=mysql_fetch_assoc($retval))
     {
          $arr[]=array(
                        'name'=>"$rows['rname']",  
                        'url'=>"$rows['rurl']",
                        'shorturl'=>"$rows['rsurl']", 
                        'kind'=>"$rows['kind']",
                        'rating'=>"$rows['rating']",
                        'difficulty'=>"$rows['difficulty']"  
          	); 

     } 
  
   echo json_encode($arr);
   
?>