<?php
   require_once("dbconfig.php");
   $id=$_GET['id'];
   $pw=$_GET['pw'];
   $sql = 'select * from account where ID = "'.$id.'"';
   $result = $db->query($sql); 
   $row = $result->fetch_assoc();
   if($row['ID'])
   {
      if($row['PWD'] != $pw)
      {
         $msg = '비밀번호가 맞지 않습니다.';
      }
      else
      {
         $msg = '로그인 되었습니다.';	
		 
		 //make session
		 session_start();
		 $_SESSION["user_ID"] = $id;
		 //make session
		 
		 echo "<script>alert(\"$msg\"); location.replace('../index.php');</script>"; 
      }
   }
   else
   {
      $msg = '등록되지 않은 계정입니다.';
   }
   /*
   <?php
    echo "<script>alert(\"이렇게 띄우면 되자나\");</script>";
?>*/
   echo "<script>alert(\"$msg\"); location.replace('index.php');</script>";
?>