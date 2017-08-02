<?php

include("../conn/connect.php");
header("Content-Type:text/html;charset=utf8");
header("refresh:3;publish_advertising.php");
$title=$_POST['title'];
$content=$_POST['content'];
$date=date("Y-m-d h:i:s");


$sql="insert into tb_advertising(title,content,date,state) values('".$title."','".$content."','".$date."','0')";


$result=mysqli_query($link,$sql) or die("error".mysqli_error());

if($result){
	echo "<div style='color: red; margin-left: auto; margin-right: auto; width: 300px; font-size: 20px; margin-top: 300px;'>发布成功!三秒后返回.......<div>";
}else{
	echo "<div style='color: red; margin-left: auto; margin-right: auto; width: 300px; font-size: 20px; margin-top: 300px;'>发布失败!三秒后返回.......<div>";
}

?>