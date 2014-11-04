<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <title>EasyCMS内容管理系统</title>
    <link href="/Css/bootstrap.css" rel="stylesheet">
    <link href="/Css/style.css" rel="stylesheet">
    <script src="/Js/jquery-1.7.2.js"></script>
    <script>

function fleshVerify(type){ 
	//重载验证码
	var timenow = new Date().getTime();
	if (type){
		$('#verifyImg').attr("src", '__URL__/verify/adv/1/'+timenow);
	}else{
		$('#verifyImg').attr("src", '__URL__/verify/'+timenow);
	}
}
   </script>

  </head>
<body>
  <div class="container" style="text-align:center;">
    <form class="form-signin" role="form" action="<?php echo U('Login/checkregs');?>" method="post">
        <h4  class="mb20"style="font-family:'微软雅黑';font-size:20px;">账号注册</h4>
          <div class="mb20">账&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号:&nbsp;&nbsp;<input type="text" class="form"  name="username"  ></div>
          <div class="mb20">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;<input type="password" class="form" name="password"></div>
          <div class="mb20">确认密码:&nbsp;&nbsp;<input type="password" class="form" name="repassword"></div>
          <div class="mb20"><input type="text" class="form" name="code" placeholder="验证码(必填)" required width="40"
          style="width:200px;display:inline;valign:center;">
          <img id="verifyImg" SRC="<?php echo U('Login/verify');?>" onClick="fleshVerify(this)" border="0" alt="点击刷新验证码" style="cursor:pointer;width:80px;vertical-align:top;" align="absmiddle">
         </div>
         
 <a href="<?php echo U('Index/Login/index');?>"  style="float:right" title="注册">已有账号</a><a href="<?php echo U('Index/Index/index');?>"style="float:right; margin-right:20px;" title="返回">返回首页</a>
 <div class="clean"></div>


          <div style="text-align:center;margin-top:20px;"><button class="btn" type="submit">注册</button></div>
      </form>
    </div>
  </body>
  </html>