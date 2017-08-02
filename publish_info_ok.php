<?php
 header("Content-Type:text/html;charset=utf8");
 include("conn/connect.php");
 $type=$_POST['type'];
 $title=$_POST['title'];
 $content=$_POST['content'];
 $linkman=$_POST['linkman'];
 $tel=$_POST['tel'];
 $state=0;
 $date=date("Y-m-d h:i:s");

 $sql="insert into tb_info(type,title,content,linkman,tel,state,date) values('".$type."','".$title."','".$content."','".$linkman."','".$tel."','".$state."','".$date."')";
 
 $result=mysqli_query($link,$sql) or die("error".mysqli_error());

 if($result){
 	echo "<script>alert('发布成功！');window.location.href='publish_info.php';</script>";
 	
 }else{
 	echo "<script>alert('发布失败！');history.back();</script>";
 	
 }
?>