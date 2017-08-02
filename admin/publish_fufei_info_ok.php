<?php
 header("Content-Type:text/html;charset=utf8");
 header("refresh:3;publish_fufei_info.php");
 include("../conn/connect.php");
 $type=$_POST['type'];
 $title=$_POST['title'];
 $content=$_POST['content'];
 $linkman=$_POST['linkman'];
 $tel=$_POST['tel'];
 $state=0;
 $day=$_POST['day'];
 $startdate=date("Y-m-d h:i:s");
 $enddate=date("Y-m-d h:i:s",(time()+3600*24*$day));
 $sql="insert into tb_leaguerinfo(type,title,content,linkman,tel,state,startdate,enddate) values('".$type."','".$title."','".$content."','".$linkman."','".$tel."','".$state."','".$startdate."','".$enddate."')";
 
 $result=mysqli_query($link,$sql) or die("error".mysqli_error());

 if($result){
 	echo "<div style='color: red; margin-left: auto; margin-right: auto; width: 300px; font-size: 20px; margin-top: 300px;'>发布成功!三秒后返回.......<div>";
 	
 }else{
 	echo "<div style='color: red; margin-left: auto; margin-right: auto; width: 300px; font-size: 20px; margin-top: 300px;'>发布失败!三秒后返回.......<div>";
 }
?>