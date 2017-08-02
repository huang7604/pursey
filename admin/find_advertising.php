<link rel="stylesheet" type="text/css" href="css/find_advertising.css">

<?php
 include("../conn/connect.php");
 include("class/CreateTable.php");


function printTable($link,$sql_number,$sql,$tag){
    $pagesize=10;
	$state=$_POST['state'];
    $result=mysqli_query($link,$sql_number) or die("error".mysqli_error());
    $info=mysqli_fetch_array($result);
    
    if($info){
        $total=$info['total'];
        if($pagesize<$total){
           	$pagecount=1;
        }else{
           	$pagecount=intval($total/$pagesize)+1;
        }

        $result=mysqli_query($link,$sql) or die("error".mysqli_error()); 
        
        # 输出表格
        CreateTable::printAdvertising($result,$pagecount,1,$tag,$state);
    }
}
 
$pagesize=10;
if($_SERVER['REQUEST_METHOD']=="POST"){
  
	$state=$_POST['state'];

    if($state=="all"){
	    $sql_number="select count(*) as total from tb_advertising";
	    $sql="select * from tb_advertising order by id desc limit 0,10";
	    printTable($link,$sql_number,$sql,1);

	}elseif ($state=="1") {
		$sql_number="select count(*) as total from tb_advertising where state='1'";
	    $sql="select * from tb_advertising where state='1' order by id desc limit 0,10";
	    printTable($link,$sql_number,$sql,2);

	}elseif ($state=="0") {
		$sql_number="select count(*) as total from tb_advertising where state='0'";
	    $sql="select * from tb_advertising where state='0' order by id desc limit 0,10";
		printTable($link,$sql_number,$sql,3);

	}
} else if($_SERVER['REQUEST_METHOD']=="GET"){
	$page=$_GET['page'];
	$pagecount=$_GET['pagecount'];
	$tag=$_GET['tag'];
	$state=$_GET['state'];
	switch ($tag) {
		case '1':{
			if($page>=$pagecount){
              $result=mysqli_query($link,"select * from tb_advertising order by id desc limit ".(($pagecount-1)*$pagesize).",10") or die("error".mysqli_error());
              # 输出表格
               CreateTable::printAdvertising($result,$pagecount,$pagecount,1,$state);
	        }elseif ($page==0){
               $result=mysqli_query($link,"select * from tb_advertising order by id desc limit 0,10") or die("error".mysqli_error());
              # 输出表格
              CreateTable::printAdvertising($result,$pagecount,1,1,$state);
	        }elseif ($page<$pagecount) {
	        	 $result=mysqli_query($link,"select * from tb_advertising order by id desc limit ".(($page-1)*$pagesize).",10") or die("error".mysqli_error());
              # 输出表格
               CreateTable::printAdvertising($result,$pagecount,$page,1,$state);
	        }
			break;
		}
		case '2':{
			if($page>=$pagecount){
              $result=mysqli_query($link,"select * from tb_advertising where state='1' order by id desc limit ".(($pagecount-1)*$pagesize).",10") or die("error".mysqli_error());
               # 输出表格
              CreateTable::printAdvertising($result,$pagecount,$pagecount,2,$state);
	        }elseif ($page==0){
               $result=mysqli_query($link,"select * from tb_advertising where state='1' order by id desc limit 0,10") or die("error".mysqli_error());
              # 输出表格
              CreateTable::printAdvertising($result,$pagecount,1,2,$state);
	        }elseif ($page<$pagecount) {
	        	 $result=mysqli_query($link,"select * from tb_advertising where state='1' order by id desc limit ".(($page-1)*$pagesize).",10") or die("error".mysqli_error());
              # 输出表格
               CreateTable::printAdvertising($result,$pagecount,$page,2,$state);
	        }

			break;
		}
		case '3':{
			if($page>=$pagecount){
              $result=mysqli_query($link,"select * from tb_advertising where state='0' order by id desc limit ".(($pagecount-1)*$pagesize).",10") or die("error".mysqli_error());
               # 输出表格
              CreateTable::printAdvertising($result,$pagecount,$pagecount,3,$state);
	        }elseif ($page==0){
               $result=mysqli_query($link,"select * from tb_advertising where state='0' order by id desc limit 0,10") or die("error".mysqli_error());
              # 输出表格
              CreateTable::printAdvertising($result,$pagecount,1,3,$state);
	        }elseif ($page<$pagecount) {
	        	 $result=mysqli_query($link,"select * from tb_advertising where state='0' order by id desc limit ".(($page-1)*$pagesize).",10") or die("error".mysqli_error());
              # 输出表格
               CreateTable::printAdvertising($result,$pagecount,$page,3,$state);
	        }
			break;
		}
		
		
	}
}

?>
