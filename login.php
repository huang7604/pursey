<!DOCTYPE html>
<html>
<head>
  <title>供求信息网</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf8">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/top.css">
  <link rel="stylesheet" type="text/css" href="css/left.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <script type="text/javascript" src="js/jquery-3.1.0.js"></script>
  <script type="text/javascript" src="js/top.js"></script>
</head>
<body>
<!--网站顶部-->
<div class="top">
  <?php include('top.php');?>
</div>
<!--网站内容区-->
<div class="main">

  <div class="left">  
     <?php include("left.php");?> 
  </div>
   <div class="right">
       <form action="login_ok.php" method="post">
          <div><label>账户(account)：</label><input type="text" name="name"></div>
          <div><label>密码(password):</label><input type="password" name="password"></div>
          <div><input type="submit" value="登录" id="login"></div>
          <div id="error">
          <span>
            <?php
              if(isset($_COOKIE['error'])) {
                echo $_COOKIE['error'];
                setcookie("error","",time()-3600);
               }
            ?>
          </span></div>
       </form>
   </div>
  
</div>
<!--网站底部-->
<div class="buttom">
  
</div>
</body>
</html>