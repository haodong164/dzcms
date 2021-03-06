<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:21:"./admintpl/login.html";i:1508737002;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link href="/public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/public/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/public/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />

<title>后台登录 - DZ.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" id="wishform" action="" onsubmit="return sub()" method="post">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="username" name="username" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="password" name="password" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
	        <div class="row cl"> 
       <div class="formControls col-xs-8 col-xs-offset-3"> 
		<input type="text" class="input-text size-L" style="width:200px;" id="inputVerify"  name="captcha" value="" placeholder="验证码"> 		   
          <img class="verifyimg reloadverify" src="<?php echo captcha_src(); ?>" title="看不清，点击再换一张" alt=""> </div>
      </div> 
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input id="subbtn" type="button" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;" />
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 临沂大智软件开发 by DZ.admin v1.1</div>
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>

<script>
	$('#subbtn').click(function (){
		
		var username=$('#username').val();
		var password=$('#password').val(); 
		if(username==''){
			layer.tips('用户名不能为空',$('#username'));
			return false;
		}
		if(password==''){
			layer.tips('密码不能为空',$('#password'));
			return false;
		}
		   $.ajax({
                    url:"<?php echo url('Login/do_login'); ?>", 
                    type:'POST',
                    data:$('#wishform').serialize(),
                    success:function (data) {
		
					if(data.msg=='fail')
					{
						   layer.msg('你输入的密码和账户名不匹配');
					}
	
						    switch (data.status){
                            case 1:
                                layer.msg(data.msg, {
                                       // offset: 't',
                                        anim: 0
                                    });
                                setInterval(function () {
                                    location.href='/admin.php';
                                },1000);

                            break;
						 case 2:
                                layer.msg(data.msg, {
                                       // offset: 't',
                                        anim: 0
                                    });

                            break;
						 case 3:
                                layer.msg(data.msg, {
                                       // offset: 't',
                                        anim: 0
                                    });

                            break;
                        }
                    },
                    error:function (error) {
                        
                    }
                })
	});
</script>
<script type="text/javascript">
        $(function(){
            // 刷新验证码
            var verifyimg = $(".verifyimg").attr("src");
            $(".reloadverify").click(function(){
                if( verifyimg.indexOf('?')>0){
                    $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
                }else{
                    $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
                }
            });
        })
</script>
</body>

</html>