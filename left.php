<div class="left_title">
	<span>推荐企业广告信息</span>
</div>
<div class="advertising">
  <ul>
  <?php
    include("conn/connect.php");
    $result=mysqli_query($link,"select * from tb_advertising") or die("error:".mysqli_error());
    if($result){
        while($info=mysqli_fetch_array($result)){
           echo "<li><a href=''>$info[title]</a></li>";
        }
    }
  ?>
  </ul>
</div>
<div class="left_title">
	<span>信息快速检索</span>
</div>
<div class="search">
    <form action="search.php" method="post">
    	<div>
    	<span>关键字:</span> <input type="text" name="info" class="info">
    	</div>
    	<div><span>条件:</span> 
    	<select name="type">
    		<option>招聘信息</option>
    		<option>培训信息</option>
    		<option>房屋信息</option>
    		<option>求购信息</option>
    		<option>招商引资</option>
    		<option>公寓信息</option>
    		<option>求职信息</option>
    		<option>家教信息</option>
    		<option>车辆信息</option>
    		<option>出售信息</option>
    		<option>寻人/物启事</option>
    	</select>
    	</div>
    	<div><input type="submit" value="开始搜索" class="submit"></div>
    </form>
</div>
<div class="left_title">
	<span>联系我们</span>
</div>
<div class="tel">
	<ul>
      <li>联系地址：天津商业大学</li>
      <li>联系人：黄俊杰</li>
      <li>学号：20141369</li>
      <li>班级：信息1403</li>  
      <li>联系电话：12345678</li>
      <li>邮政编码：535000</li>
    </ul>
</div>