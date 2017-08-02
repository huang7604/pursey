<link rel="stylesheet" type="text/css" href="css/left.css">
<div class="left">
    <div class="title"></div>
	<div class="one">
		<div>
		   <img src="image/head.svg">
		   <span>免费信息显示方式</span>
		</div>
		<form action="find_info.php" method="post" target="mainFrame">
		   <div>
			<input type="radio" name="state" value="1">已审核
			<input type="radio" name="state" value="0">未审核
			<input type="radio" name="state" checked="true" value="all">全部
		   </div>
		   <div>
		     <label>信息类型:</label>
    	     <select name="type">
    	       <option>全部</option>
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
    	     <input type="submit" value="检索" class="submit">
    	    </div>
		</form>
	</div>
	<div class="two">
		<div>
		   <img src="image/head.svg">
		   <span>付费信息显示方式</span>
		</div>
		<form action="find_fufei.php" method="post" target="mainFrame">
		   <div>
			<input type="radio" name="state" value="1">已付费
			<input type="radio" name="state" value="0">未付费
			<input type="radio" name="state" checked="true" value="all">全部
		   </div>
		   <div>
		     <label>信息类型:</label>
    	     <select name="type">
    	       <option>全部</option>
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
    	     <input type="submit" value="检索" class="submit">
    	    </div>
		</form>
	</div>
	<div class="three">
		<div>
		   <img src="image/head.svg">
		   <span>企业广告显示方式</span>
		</div>
		<form action="find_advertising.php" method="post" target="mainFrame">
		   <div>
			<input type="radio" name="state" value="1">已推荐
			<input type="radio" name="state" value="0">未推荐
			<input type="radio" name="state" checked="true" value="all">全部
		   </div>
		   <div>
    	     <input type="submit" value="检索" class="search">
    	    </div>
		</form>
	</div>
	<div class="four">
		<div>
		  <a href="publish_fufei_info.php" target="mainFrame">付费信息发布</a>
		</div>
		<div>
		  <a href="publish_advertising.php" target="mainFrame">企业广告发布</a>
		</div>
	</div>
</div>
