<?php
 
 include 'connect.php';
  
 $email=$_POST["email"];
 $query="SELECT topics FROM admins WHERE email="."'{$email}'";
 $retval=mysql_query($query,$conn);
 $status=0;
 $topic=array();

 if(! $retval)
 {
    $status="0";
 }

 else
  $status="1";

  //echo $status;  //test
  $index=0;

  $obj=new stdClass();
  $obj->status=$status;
  while($rows=mysql_fetch_assoc($retval))
    {
        $topic[$index]=$rows['topics'];
        $index++;
    } 
  $obj->topics=$topic;
  
  
  echo json_encode($obj);
  //echo $obj->topics[1];
  
?>