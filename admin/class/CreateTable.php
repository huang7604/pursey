<?php
class CreateTable{

	public function _construct(){

	}


	public static function printFufei($result,$pagecount,$page,$tag,$type,$state){
        echo "<div class=tishi>付费信息管理</div>";
        echo "<table cellspacing='1'>";
        echo '<tr id=title><td class=ti>信息标题</td><td class=content>信息内容</td><td>联系人</td><td>联系电话</td><td>发布时间</td><td>审核状态</td><td>操作</td></tr>';
        $info=mysqli_fetch_array($result);
        if($info){
        	do{
        	   $state_info="";
        	   if($info['state']==1){
        	   	$state_info="已付费";
        	   }else{
        	   	$state_info="未付费";
        	   }
               echo "<tr><td>$info[title]</td><td>$info[content]</td><td>$info[linkman]</td><td>$info[tel]</td><td>$info[startdate]</td><td>$state_info</td><td><a <a href=state_fufei.php?id=$info[id]&page=$page&pagecount=$pagecount&tag=$tag&type=$type&state=$state>审核</a>/<a href=delete_fufei.php?id=$info[id]&page=$page&pagecount=$pagecount&tag=$tag&type=$type&state=$state>删除</a></td></tr>";
        	}while($info=mysqli_fetch_array($result));
        }
        

        if($page==1){
             echo "<tr id=bottom><td colspan='7'><span>共".$pagecount."页，第".$page."页</span><a href=find_fufei.php?page=".($page+1)."&pagecount=".$pagecount."&tag=".$tag."&type=".$type."&state=".$state." target='mainFrame'>下一页</a></td></tr>";
        }else if($page==$pagecount){
             echo "<tr id=bottom><td colspan='7'><span>共".$pagecount."&tag=".$tag."页，第".$page."页</span><a href='find_fufei.php?page=".($page-1)."&pagecount=".$pagecount."&tag=".$tag."&type=".$type."&state=".$state."' target='mainFrame'>上一页</a></td></tr>";
        }else{
             echo "<tr id=bottom><td colspan='7'><span>共".$pagecount."页，第".$page."页</span><a href=find_fufei.php?page=".($page-1)."&pagecount=".$pagecount."&tag=".$tag."&type=".$type."&state=".$state." target='mainFrame'>上一页</a><a href=find_fufei.php?page=".($page+1)."&pagecount=".$pagecount."&tag=".$tag."&type=".$type."&state=".$state." target='mainFrame'>下一页</a></td></tr>";
        }
        
      
        echo '</table>';
	}



    public static function printInfo($result,$pagecount,$page,$tag,$type,$state){
        echo "<div class=tishi>免费信息管理</div>";
        echo "<table cellspacing='1'>";
        echo '<tr id=title><td class=ti>信息标题</td><td class=content>信息内容</td><td>联系人</td><td>联系电话</td><td>发布时间</td><td>审核状态</td><td>操作</td></tr>';
        $info=mysqli_fetch_array($result);
        if($info){
            do{
               $state_info="";
               if($info['state']){
                $state_info="已审核";
               }else{
                $state_info="未审核";
               }
               echo "<tr><td>$info[title]</td><td>$info[content]</td><td>$info[linkman]</td><td>$info[tel]</td><td>$info[date]</td><td>$state_info</td><td><a href=state_info.php?id=$info[id]&page=$page&pagecount=$pagecount&tag=$tag&type=$type&state=$state>审核</a>/<a href=delete_info.php?id=$info[id]&page=$page&pagecount=$pagecount&tag=$tag&type=$type&state=$state>删除</a></td></tr>";
            }while($info=mysqli_fetch_array($result));
        }
        

        if($page==1){
             echo "<tr id=bottom><td colspan='7'><span>共".$pagecount."页，第".$page."页</span><a href=find_info.php?page=".($page+1)."&pagecount=".$pagecount."&tag=".$tag."&type=".$type."&state=".$state." target='mainFrame'>下一页</a></td></tr>";
        }else if($page==$pagecount){
             echo "<tr id=bottom><td colspan='7'><span>共".$pagecount."&tag=".$tag."页，第".$page."页</span><a href='find_info.php?page=".($page-1)."&pagecount=".$pagecount."&tag=".$tag."&type=".$type."&state=".$state."' target='mainFrame'>上一页</a></td></tr>";
        }else{
             echo "<tr id=bottom><td colspan='7'><span>共".$pagecount."页，第".$page."页</span><a href=find_info.php?page=".($page-1)."&pagecount=".$pagecount."&tag=".$tag."&type=".$type."&state=".$state." target='mainFrame'>上一页</a><a href=find_fufei.php?page=".($page+1)."&pagecount=".$pagecount."&tag=".$tag."&type=".$type."&state=".$state." target='mainFrame'>下一页</a></td></tr>";
        }
        
      
        echo '</table>';
    }

    public static function printAdvertising($result,$pagecount,$page,$tag,$state){
        echo "<div class=tishi>广告信息信息管理</div>";
        echo "<table cellspacing='1'>";
        echo '<tr id=title><td class=ti>信息标题</td><td class=content>信息内容</td><td>发布时间</td><td>审核状态</td><td>操作</td></tr>';
        $info=mysqli_fetch_array($result);
        if($info){
            do{
               $state_info="";
               if($info['state']==1){
                $state_info="已推荐";
               }else{
                $state_info="未推荐";
               }
               echo "<tr><td>$info[title]</td><td>$info[content]</td><td>$info[date]</td><td>$state_info</td><td><a href=state_advertising.php?id=$info[id]&page=$page&pagecount=$pagecount&tag=$tag&state=$state>审核</a>/<a href=delete_advertising.php?id=$info[id]&page=$page&pagecount=$pagecount&tag=$tag&state=$state>删除</a></td></tr>";
            }while($info=mysqli_fetch_array($result));
        }
        

        if($page==1){
             echo "<tr id=bottom><td colspan='7'><span>共".$pagecount."页，第".$page."页</span><a href=find_advertising.php?page=".($page+1)."&pagecount=".$pagecount."&tag=".$tag."&state=".$state." target='mainFrame'>下一页</a></td></tr>";
        }else if($page==$pagecount){
             echo "<tr id=bottom><td colspan='7'><span>共".$pagecount."&tag=".$tag."页，第".$page."页</span><a href='find_advertising.php?page=".($page-1)."&pagecount=".$pagecount."&tag=".$tag."&state=".$state."' target='mainFrame'>上一页</a></td></tr>";
        }else{
             echo "<tr id=bottom><td colspan='7'><span>共".$pagecount."页，第".$page."页</span><a href=find_advertising.php?page=".($page-1)."&pagecount=".$pagecount."&tag=".$tag."&state=".$state." target='mainFrame'>上一页</a><a href=find_fufei.php?page=".($page+1)."&pagecount=".$pagecount."&tag=".$tag."&state=".$state." target='mainFrame'>下一页</a></td></tr>";
        }
        
      
        echo '</table>';
    }



	
}


?>
