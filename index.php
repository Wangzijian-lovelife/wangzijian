<?php
<<<<<<< HEAD
  $postid = $_GET[id];
//   echo $postid;
  
  $mysql_server_name = "127.0.0.1";
  $mysql_uersname = "root";
  $mysql_password = "1234567";
  $mysql_database = "wangzijian";
  $con = mysql_connect($mysql_server_name,$mysql_uersname,$mysql_password);
  if(!$con)
  {
      echo mysql_errno();
//       die('Could not connect:' .mysql_errno());
  }
  mysql_select_db("wangzijian",$con);
  
  $sql =" delete from message1 where  id='{$postid}' ";
//   var_dump($sql);
  $re = mysql_query( $sql );
//   var_dump($re);
  
  $sql2 = "select * from message1";
  $re2 = mysql_query($sql2);
//   var_dump($re2);
//   if($re == true)
//   {
//       echo "success"; 
//   }
//   else 
//   {
//       echo  "fail";
//   }
header("Location:message.php");

  echo ' <a href="message.php" > Delete successful, Please click return back!</a>';
  //echo '<a href="message.php">';
  
=======
 echo "hello git!"; 
>>>>>>> d61d58f3c93e8bcee1cf26936cbabc822b52eb91
 ?>