<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<base href="__ROOT__/" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<title>第一步</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link href="/Css/style.css" rel="stylesheet" media="screen">
<script src="/Js/jquery.js"></script>
<script src="/Js/bootstrap.min.js"></script>
</head><body id="body" >
<header> 
  <!-- 导航开始 -->
 	<div class="headwrap">
<div class="headin">
<div class="sojump_logo">
                    <div class="sojump_image">
                        <h1>问答社交服务</h1>
                    </div>
</div>
<div id="NMenu">
                        <ul>
                            <li ><a href="/" class="indexnav">首&nbsp;&nbsp;&nbsp;&nbsp;页&nbsp;</a></li>
                            <li ><a href="/index.php/index/wj" class="indexnav">所有问卷</a></li>
						    <?php if($_SESSION[C('USER_AUTH_KEY_F')] == ''): ?><li><a href="/index.php/index/login"  class="indexnav">登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;</a></li>
							<li  style="border: 0; padding-right: 0;"><a href="/index.php/index/login/checkreg.html" class="indexnav">注&nbsp;&nbsp;&nbsp;&nbsp;册&nbsp;</a></li>
							<?php else: ?>
						    <li ><a href="/index.php/member/fabu"  class="indexnav">发&nbsp;&nbsp;&nbsp;&nbsp;布&nbsp;</a></li>
							<li ><a href="/index.php/member" class="indexnav2 "><span class="login">hi,<?php echo $_SESSION[C('USER_AUTH_KEY_F')];?></span></a></li>
							<li  style="border: 0; padding-right: 0;"><a href="/index.php/index/login/doLogout">退出登录</a></li><?php endif; ?>
                        </ul>
                    </div>

</div>
</div>
  <!-- 导航结束 --> 
</header>
<div class="container">


 <form class="form-signin" name="fbr" action="<?php echo U('member/fabu/add');?>" method="post" style="max-width: 450px;">
        <h4  class="mb20"style="font-family:'微软雅黑';font-size:20px;">第一步，添加基本信息</h4>
		<div class="mb20">问卷名称:&nbsp;&nbsp;<input type="text" class="form"  name="name"  ></div>
		<div class="mb20">发&nbsp;&nbsp;布&nbsp;&nbsp;人:&nbsp;&nbsp;<input type="text" class="form"  name="fbr" value="<?php echo $_SESSION[C('USER_AUTH_KEY_F')]?>" ></div>
        

        <div style="text-align:center;margin-top:20px;"><button class="btn" type="submit">GO</button></div>
</form>



</div>

<!-- footer start -->
<!--include file="Index@Public:footer" />
<!-- footer end -->
<!-- 去顶部 --> 
</body>
</html>