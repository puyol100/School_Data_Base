<?php
	require_once("dbconfig.php");
	//echo "yeah";
	session_start();
	session_destroy();
	$msg = '로그아웃 되었습니다.';	
	echo "<script>alert(\"$msg\"); location.replace('../index.php');</script>";
?>