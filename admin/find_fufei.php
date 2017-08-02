<link rel="stylesheet" type="text/css" href="css/find_fufei.css">
<?php
 include("../conn/connect.php");
 include("class/CreateTable.php");


function printTable($link,$sql_number,$sql,$tag){
    $pagesize=10;
	$type=$_POST['type'];
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
        CreateTable::printFufei($result,$pagecount,1,$tag,$type,$state);
    }
}
 
$pagesize=10;
if($_SERVER['REQUEST_METHOD']=="POST"){
    $type=$_POST['type'];
	$state=$_POST['state'];

    if($type=="全部"&&$state=="all"){
	    $sql_number="select count(*) as total from tb_leaguerinfo";
	    $sql="select * from tb_leaguerinfo order by id desc limit 0,10";
	    printTable($link,$sql_number,$sql,1);

	}elseif ($type=="全部"&&$state=="1") {
		$sql_number="select count(*) as total from tb_leaguerinfo where state='1'";
	    $sql="select * from tb_leaguerinfo where state='1' order by id desc limit 0,10";
	    printTable($link,$sql_number,$sql,2);

	}elseif ($type=="全部"&&$state=="0") {
		$sql_number="select count(*) as total from tb_leaguerinfo where state='0'";
	    $sql="select * from tb_leaguerinfo where state='0' order by id desc limit 0,10";
		printTable($link,$sql_number,$sql,3);

	}else{
		if($state=="all"){
            $sql_number="select count(*) as total from tb_leaguerinfo where type='".$type."'";
	        $sql="select * from tb_leaguerinfo where type='".$type."' order by id desc limit 0,10";
		    printTable($link,$sql_number,$sql,4);

         }else{
		    $sql_number="select count(*) as total from tb_leaguerinfo where type='".$type."' and state='".$state."''";
	        $sql="select * from tb_leaguerinfo where type='".$type."' and state='".$state."' order by id desc limit 0,10";
		    printTable($link,$sql_number,$sql,5);
		}
	}
} else if($_SERVER['REQUEST_METHOD']=="GET"){
	$page=$_GET['page'];
	$pagecount=$_GET['pagecount'];
	$tag=$_GET['tag'];
	$stype=$_GET['type'];
	$state=$_GET['state'];
	switch ($tag) {
		case '1':{
			if($page>=$pagecount){
              $result=mysqli_query($link,"select * from tb_leaguerinfo order by id desc limit ".(($pagecount-1)*$pagesize).",10") or die("error".mysqli_error());
              # 输出表格
               CreateTable::printFufei($result,$pagecount,$pagecount,1,$type,$state);
	        }elseif ($page==0){
               $result=mysqli_query($link,"select * from tb_leaguerinfo order by id desc limit 0,10") or die("error".mysqli_error());
              # 输出表格
              CreateTable::printFufei($result,$pagecount,1,1,$type,$state);
	        }elseif ($page<$pagecount) {
	        	 $result=mysqli_query($link,"select * from tb_leaguerinfo order by id desc limit ".(($page-1)*$pagesize).",10") or die("error".mysqli_error());
              # 输出表格
               CreateTable::printFufei($result,$pagecount,$page,1,$type,$state);
	        }
			break;
		}
		case '2':{
			if($page>=$pagecount){
              $result=mysqli_query($link,"select * from tb_leaguerinfo where state='1' order by id desc limit ".(($pagecount-1)*$pagesize).",10") or die("error".mysqli_error());
               # 输出表格
              CreateTable::printFufei($result,$pagecount,$pagecount,2,$type,$state);
	        }elseif ($page==0){
               $result=mysqli_query($link,"select * from tb_leaguerinfo where state='1' order by id desc limit 0,10") or die("error".mysqli_error());
              # 输出表格
              CreateTable::printFufei($result,$pagecount,1,2,$type,$state);
	        }elseif ($page<$pagecount) {
	        	 $result=mysqli_query($link,"select * from tb_leaguerinfo where state='1' order by id desc limit ".(($page-1)*$pagesize).",10") or die("error".mysqli_error());
              # 输出表格
               CreateTable::printFufei($result,$pagecount,$page,2,$type,$state);
	        }

			break;
		}
		case '3':{
			if($page>=$pagecount){
              $result=mysqli_query($link,"select * from tb_leaguerinfo where state='0' order by id desc limit ".(($pagecount-1)*$pagesize).",10") or die("error".mysqli_error());
               # 输出表格
              CreateTable::printFufei($result,$pagecount,$pagecount,3,$type,$state);
	        }elseif ($page==0){
               $result=mysqli_query($link,"select * from tb_leaguerinfo where state='0' order by id desc limit 0,10") or die("error".mysqli_error());
              # 输出表格
              CreateTable::printFufei($result,$pagecount,1,3,$type,$state);
	        }elseif ($page<$pagecount) {
	        	 $result=mysqli_query($link,"select * from tb_leaguerinfo where state='0' order by id desc limit ".(($page-1)*$pagesize).",10") or die("error".mysqli_error());
              # 输出表格
               CreateTable::printFufei($result,$pagecount,$page,3,$type,$state);
	        }
			break;
		}
		case '4':{
			if($page>=$pagecount){
              $result=mysqli_query($link,"select * from tb_leaguerinfo where type='".$type."' order by id desc limit ".(($pagecount-1)*$pagesize).",10") or die("error".mysqli_error());
               # 输出表格
              CreateTable::printFufei($result,$pagecount,$pagecount,4,$type,$state);
	        }elseif ($page==0){
               $result=mysqli_query($link,"select * from tb_leaguerinfo where type='".$type."' order by id desc limit 0,10") or die("error".mysqli_error());
              # 输出表格
              CreateTable::printFufei($result,$pagecount,1,4,$type,$state);
	        }elseif ($page<$pagecount) {
	        	 $result=mysqli_query($link,"select * from tb_leaguerinfo where type='".$type."' order by id desc limit ".(($page-1)*$pagesize).",10") or die("error".mysqli_error());
              # 输出表格
               CreateTable::printFufei($result,$pagecount,$page,4,$type,$state);
	        }
			break;
		}
		case '5':{
			if($page>=$pagecount){
              $result=mysqli_query($link,"select * from tb_leaguerinfo where type='".$type."' and state='".$state."' order by id desc limit ".(($pagecount-1)*$pagesize).",10") or die("error".mysqli_error());
               # 输出表格
              CreateTable::printFufei($result,$pagecount,$pagecount,5,$type,$state);
	        }elseif ($page==0){
               $result=mysqli_query($link,"select * from tb_leaguerinfo where type='".$type."' and state='".$state."'' order by id desc limit 0,10") or die("error".mysqli_error());
              # 输出表格
              CreateTable::printFufei($result,$pagecount,1,5,$type,$state);
	        }elseif ($page<$pagecount) {
	        	 $result=mysqli_query($link,"select * from tb_leaguerinfo where type='".$type."' and state='".$state."' order by id desc limit ".(($page-1)*$pagesize).",10") or die("error".mysqli_error());
              # 输出表格
               CreateTable::printFufei($result,$pagecount,$page,5,$type,$state);
	        }
			break;
		}						
		
	}
}

?>
