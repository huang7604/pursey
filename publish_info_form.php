<form action="publish_info_ok.php" method="post">
	<div>
		<label>信息类型：</label>
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
	<div><label>标题：</label><input type="text" name="title"></div>
	<div  id="content"><label>内容</label><textarea name="content"></textarea></div>
	<div><label>联系人：</label><input type="text" name="linkman"></div>
	<div><label>联系人电话：</label><input type="text" name="tel"></div>
	<div><input type="submit" value="发布信息" class="publish"></div>
</form>