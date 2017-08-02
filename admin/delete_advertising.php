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

$result=mysqli_query($link,"delete from tb_advertising  where id='".$id."'") or die("error"."delete from tb_info  where id='".$id."'".mysqli_error());
if($result){
	header("Location:find_advertising.php?page=$page&pagecount=$pagecount&tag=$tag&state=$state");
 	
}else{
	header("Location:find_advertising.php?page=$page&pagecount=$pagecount&tag=$tag&state=$state");
 	
}

?>