<?php
function printCursor($result){
	while ($info=mysqli_fetch_array($result)) {
		echo "<div>";
		echo "<p><span id='type'>【$info[type]】</span><span>$info[title]<span></p>";
		echo "<p class='content'>$info[content]<p>";
		echo "<p><span>联系人：$info[linkman]</span><span>联系电话：$info[tel]<span></p>";
		echo "</div>";
	}
}
?>