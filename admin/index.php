<?php
  session_start();
  if(!isset($_SESSION['login'])){
     echo "<div style='color: red; margin-left: auto; margin-right: auto; width: 300px; font-size: 20px; margin-top: 300px;'>访问方式!三秒后返回.......<div>";
    header("refresh:3;http://localhost/pursey/index.php");
  }
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf8">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<frameset cols="12%,76%,12%" rows="2000" class="framesetOne" frameborder="0" noresize>
	<frame style="background-color: #F5F5F5;"></frame>
	<frameset rows="15%,85%">
		<frame name="topFrame" src="top.php" scrolling="no" marginheight="0"></frame>
		<frameset cols="25%,74%">
			<frame name="leftFrame" src="left.php" scrolling="no" marginheight="0"></frame>
			<frame name="mainFrame" src="publish_fufei_info.php" ></frame>
		</frameset>
	</frameset>
	<frame style="background-color: #F5F5F5;"></frame>
</frameset>
</html>