<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:23:"./admintpl/welcome.html";i:1508209150;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>我的桌面</title>
</head>
<body>
<nav class="breadcrumb">
			<div class="container">
				<i class="Hui-iconfont">&#xe67f;</i>
				<a href="#" class="c-primary">首页</a>
				<span class="c-gray en">&gt;</span>
				<span class="c-gray">欢迎页</span>
			</div>
		</nav>
			<div class="container ui-sortable">
			<h2 style="color: #59b7ed">欢迎使用DZCMS V1.0后台模版！</h2>
			<div class="panel panel-default">					
					<div class="panel-header clearfix">
					<span class="f-l">后台相关信息</span>
				</div>
				<div class="panel-body" style=" height: 150px;">
				<div style="float: left; width: 41.3%; height: 146px; border: 1px solid #ccc; border-right: none; ">
					    <div style="height: 40;padding-left: 10px;line-height: 40px; font-weight: 700; font-size: 15px;">我的信息</div>
					    <div>
							<div style=" padding-left: 50px; height: 30px; width: 50%; text-align: left;">你好，<?php echo $vo['username']; ?></div>
							<div style=" padding-left: 50px; height: 30px;  width: 50%; text-align: left;">所属角色，<?php echo $vo['title']; ?></div>
							<div style=" padding-left: 50px; height: 30px;  width: 50%; text-align: left;">邮箱，<?php echo $vo['email']; ?></div>
					    </div>
				</div>
					<div class="message" style="float: left; width: 58.5%;">
						<table class="table table-border table-bordered table-hover">
			            <tbody   class="text-c" style="height: 146px">
			               <tr>
			                <th width="20%"><a href="#" style="font-size: 14px">内容数量</a></th>
			                <td><a href="#" style="font-size: 14px"><?php echo $vo['all']; ?></a></td>
			              </tr>
			              <tr>
			                <th width="20%"><a href="#" style="font-size: 14px">栏目数量</a></th>
			                <td><a href="#" style="font-size: 14px">30</a></td>
			              </tr>
			              <tr>
			                <th width="20%"><a href="#" style="font-size: 14px">会员数量</a></th>
			                <td><a href="#" style="font-size: 14px">40</a></td>
			              </tr>
			            </tbody>
    				</table>
					</div>
    				
				</div>
				<div class="panel-body" style=" height: 350px;">
				<div class="table_list" style="float: left; width: 45%;">
				<div class="panel-header clearfix" style="background-color: #f5f5f5">
					<span class="f-l">系统相关信息</span>
				</div>
					<table class="table table-border table-bordered table-hover" style="margin-top: 20px">
					 <thead>
					        <tr><th width="20%">类别</th><th>描述</th></tr>
					      </thead>
			            <tbody>
			              <tr>
			                <th width="20%">DZcms版本</th>
			                <td>1.0.131129</td>
			              </tr>
			               <tr>
			                <th width="20%">服务器操作系统</th>
			                <td>WINNT</td>
			              </tr>
			               <tr>
			                <th width="20%">ThinkPHP版本</th>
			                <td>3.2.0RC1</td>
			              </tr>
			               <tr>
			                <th width="20%">运行环境</th>
			                <td>Apache/2.4.23 (Win32) OpenSSL/1.0.2j PHP/5.4.45</td>
			              </tr>
			               <tr>
			                <th width="20%">上传限制</th>
			                <td>2M</td>
			              </tr>
			               <tr>
			                <th width="20%">MYSQL版本</th>
			                <td>5.5.53</td>
			              </tr>
			            </tbody>
    				</table>

				</div>

					<div class="table_list" style="float: left; width: 51.5%; padding-left: 28px; ">
						<div class="panel-header clearfix" style="background-color: #f5f5f5">
							<span class="f-l">团队相关信息</span>
						</div>
						<table class="table table-border table-bordered table-hover" style="margin-top: 20px">
					      <thead>
					        <tr><th width="20%">Class</th><th>描述</th></tr>
					      </thead>
			            <tbody>
			             <tr>
			                <th width="20%">总策划</th>
			                <td>山哥</td>
			              </tr>
			               <tr>
			                <th width="20%">产品设计及研发团队</th>
			                <td>山哥</td>
			              </tr>
			               <tr>
			                <th width="20%">界面及用户体验团队</th>
			                <td>php班所有成员</td>
			              </tr>
			               <tr>
			                <th width="20%">官方网址</th>
			                <td>www.dacms.com</td>
			              </tr>
			               <tr>
			                <th width="20%">官方QQ群</th>
			                <td>6666666</td>
			              </tr>
			               <tr>
			                <th width="20%">BUG反馈</th>
			                <td>dzcms讨论社</td>
			              </tr>
			            </tbody>
    				</table>
					</div>
    				
				</div>
			</div>
			       
			 
		</div>
<footer class="footer mt-20">
	<div class="container">
		<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>
			Copyright &copy;2015-2017 H-ui.admin v3.1 All Rights Reserved.<br>
			本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
	</div>
</footer>
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.min.js"></script> 

</body>
</html>