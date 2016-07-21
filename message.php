


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>滴滴留言板-王梓鉴</title>
</head>

<script type ="text/javascript">
function formSubmit()
{

		

}
function formDelete( a )
{

}
</script>

<body>
	<h1 align ="center">滴滴留言板-王梓鉴的第一个作业</h1>
	
	<form method ="post" action ="<?php echo $_SERVER['PHP_SELF'];?> "> 
	<div> 发表留言：</div>
	<textarea rows="5" cols="90" name ="content" id="content"  method ="post" action ="<?php echo $_SERVER['PHP_SELF'];?> "></textarea>
	<br />
<!-- 	id: <input type ="text" name ="id"  id="id"> -->
	姓名：<input type ="text" name ="fname" id=“fname" >
	<input type="submit" name ="submit" value ="提交" onclick ="formSubmit()"> 
	<br />
	</form>
	<br />
	<br />
	<table  width ="650"  border="2">
	<tr>
		<th width="40"> id</th>
		<th width="60"> 姓名</th>
		<th width= "250"> 内容</th>
		<th width= "150"> 时间</th>
		<th width= "50"> 删除</th>		
	</tr>
	</table>
	
     <?php
     function imshow()
     {
         $result = mysql_query("select * from message1");
     
         //   $sql = "select * from message1";
         //   $count = mysql_query($sql , $con);
         //   $num = mysql_num_rows($num);
     
         echo "	<table   width =650  border=2 >	";
         while($row = mysql_fetch_array($result))
         {
             
             
             echo "<tr>";
             echo "<td width=40  align=center>" .$row[id]. "</td>";
             echo "<td width=60 align=center>" .$row[name]."</td>";
             echo "<td width=250>" .$row[content]. "</td>";
             echo "<td width=150 align=center>" .$row[time]. "</td>";
             echo '<td width=50 > <a href="index.php?id= '.$row[id].' " > 删除</a> </td>';
//             
//              echo "<td width=50><a href=".'"message.php?id='.$row["id"].'&op=del">删除</a> </td>';
         }
         echo "</table>";
 //        echo '<a href="index.php?id=500">ssss </a>';
	  }
     
     
// 	  if( isset( $_GET['op'] ) && $_GET['op'] == 'del' )
// 	  {
// 	      $id = $_GET['id'];
// 	      if( !$id )
// 	      {
// 	          echo '<script>alert("操作失败")</script>';
// 	      }
// 	      else 
// 	      {
// 	          $id = intval( $id );
// 	          $sql = 'delete from message1 where id = '.$id;
// 	          $re = mysql_query( $sql );
// 	          if( $re )
// 	          {
// 	              echo '<script>alert("操作成功")</script>';
// 	              header( 'Location:message.php' );
// 	          }
// 	          else 
// 	          {
// 	              echo '<script>alert("操作失败")</script>';
// 	          }
// 	      }
// 	  }
     
     $id = $name =$content = "";
//      $id = $_POST["id"];
     $name = $_POST["fname"];
     $content =$_POST["content"];
     
     // var_dump($name);
//      exit;

//      echo $id;
//      echo "<br>";
//      echo $name;
//      echo "<br>";
//      echo $content;
     $mysql_server_name = "127.0.0.1";
     $mysql_uersname = "root";
     $mysql_password = "1234567";
     $mysql_database = "wangzijian";
     $con = mysql_connect($mysql_server_name,$mysql_uersname,$mysql_password);
     if(!$con)
     {
         echo mysql_errno();
         die('Could not connect:' .mysql_errno());
     }
     
     mysql_select_db("wangzijian",$con);
     if($name == NULL && $content==NULL)
     {
         
     }
     else
     {
         $sql = "insert into message1(name, content, time)  values('{$name}','{$content}',Now() )";
         $result1 = mysql_query($sql , $con);
     }
     imshow();
     
//      $result = mysql_query("select * from message1");

//       echo "	<table   width =650  border=2 >	";
//       while($row = mysql_fetch_array($result))
//       {
          
//           echo "<tr>";
//           echo "<td width=40  align=center>" .$row[id]. "</td>";
//           echo "<td width=60 align=center>" .$row[name]."</td>";
//           echo "<td width=250>" .$row[content]. "</td>";
//           echo "<td width=150 align=center>" .$row['time']. "</td>";
//           echo "<td width=50> <input type=submit name=delete value=删除 onclick=formDelete($row[id])></td>";
//       }
//       echo "</table>"

      ?>
<!--     <form action=""></form> -->
<!-- 	<table   width ="600"  border="2">	 -->
<!--     <tr> -->
		<td> <?php echo $result[id]?> </td>
		<td> <?php echo $result['name']; ?></td>
		<td> <?php echo $result['content'];?></td>
		<td> <?php echo $result['time'];?></td>	

</body>
</html>