<div class="right_title">
	<?php
      echo "首页>搜素信息";
	?>
</div>
<div class="free_info">
<?php

      include("conn/connect.php");
	    include("function/function.php"); 
      $date=date("Y-m-d h:i:s");
      $type=$_POST['type'];
      $info=$_POST['info'];
	    $sql="select * from tb_leaguerinfo where (unix_timestamp(enddate)>= unix_timestamp('".$date."') and content like '%".$info."%')  and (state='1' and type='".$type."') order by id desc";
      $result=mysqli_query($link,$sql) or die("error:".$sql);
      
      if($result){
        printCursor($result);
      }

      $sql="select * from tb_info where (state=1 and type='".$type."') and content like '%".$info."%' order by id desc";
      $result=mysqli_query($link,$sql) or die("error:".$sql);
      if($result){
        printCursor($result);
      }
?>
</div>