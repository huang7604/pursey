<?php
include("../conn/connect.php");
$id=$_GET['id'];
$page=$_GET['page'];
$pagecount=$_GET['pagecount'];
$tag=$_GET['tag'];
$state=$_GET['state'];
if($pagecount==$page){
	$page=$page+1;
}

$result=mysqli_query($link,"update tb_advertising set state='1' where id='".$id."'") or die("error"."update tb_info set state='1' where id='".$id."'".mysqli_error());
if($result){
	header("Location:find_advertising.php?page=$page&pagecount=$pagecount&tag=$tag&state=$state");
 	
}else{
	header("Location:find_advertising.php?page=$page&pagecount=$pagecount&tag=$tag&state=$state");
 	
}

?>