
<div class="right_title">
	付费专区
</div>
<div class="leaguer_info">
	<?php
	  include("conn/connect.php");
	  include("function/function.php"); 
      $date=date("Y-m-d h:i:s");
	  $sql="select * from tb_leaguerinfo where unix_timestamp(enddate)<= unix_timestamp('".$date."') and state='1' order by id desc";
      $result=mysqli_query($link,$sql) or die("error:".mysqli_error());
      if($result){
        printCursor($result);
      }
    ?>

</div>

<div class="right_title">
	免费专区
</div>
<div class="free_info">
	<?php
      $sql="select * from tb_info where state=1 order by id desc";
      $result=mysqli_query($link,$sql) or die("error:".mysqli_error());
      if($result){
        printCursor($result);
      }
	?>
</div>