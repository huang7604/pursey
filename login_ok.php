<?php
session_start();
include("conn/connect.php");

$name=$_POST['name'];
$password=$_POST['password'];


$result=mysqli_query($link,"select id from  tb_admin where name='".$name."' and password='".$password."'") or die("error".mysqli_error());

$test=mysqli_fetch_array($result);
echo $test;
if(!$test){
	setcookie("error","用户名或者密码错误！",time()+3600);
	header("Location:login.php");
    
}else{
	$_SESSION['login']=1;
	header("Location:admin/index.php");
}

?>