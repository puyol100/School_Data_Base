<?php
   require_once("dbconfig.php");
   $id = $_GET[id];
   $pw = $_GET[pw];
   $birth = $_GET[birth];
   $sql = "insert into Account (ID, PWD, Birth) values ('$id', '$pw','$birth')";
   $result = $db->query($sql);
   if($result){
   ?>   <script>
      alert("가입 되었습니다.");
      location.replace("index.php");
      </script>
<?php }
    else{
?>      <script>
         alert("fail");
      </script>
<?php   }
?>