<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:33:"./templates/Sofamall/contact.html";i:1509702218;s:32:"./templates/Sofamall/header.html";i:1509702216;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>dzcms企业模板模型</title>
    ﻿<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate icon" type="image/png" href="images/favicon.png">
<link rel='icon' href='favicon.ico' type='image/x-ico' />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="/templates/Sofamall/css/default.min.css?t=227" />
<!--[if (gte IE 9)|!(IE)]><!-->
<script type="text/javascript" src="/templates/Sofamall/lib/jquery/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="lib/amazeui/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/templates/Sofamall/lib/handlebars/handlebars.min.js"></script>
<script type="text/javascript" src="/templates/Sofamall/lib/iscroll/iscroll-probe.js"></script>
<script type="text/javascript" src="/templates/Sofamall/lib/amazeui/amazeui.min.js"></script>
<script type="text/javascript" src="/templates/Sofamall/lib/raty/jquery.raty.js"></script>
<script type="text/javascript" src="/templates/Sofamall/js/main.min.js?t=1"></script>
</head>
<body>

<header>
    <div class="header-top">
        <div class="width-center">
            <div class="header-logo "><img src="/templates/Sofamall/images/logo.png" alt=""></div>
            <div class="header-title div-inline">
                <strong>大智家具设计公司</strong>
                <span>www.linyiit.cn</span>
            </div>

            <div class="search-box div-inline">
                <div class="input-box"><input type="text" name="" placeholder="             请输入关键字"></div>
                <div class="search-botton"></div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <button class="am-show-sm-only am-collapsed font f-btn" data-am-collapse="{target: '.header-nav'}">Menu <i
                class="am-icon-bars"></i></button>
        <nav>
        <ul class="header-nav-ul am-collapse am-in">
      
        <?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=0")->order('id asc')->limit('7')->select(); foreach($taginfo as $vo):?>
              <li><a href="<?php echo $vo['url']; ?>" name="index"><?php echo $vo['title']; ?></a></li> 
        <?php endforeach; ?>
           <!--  <li>
            <a href="/templates/Sofamall/contact.html" name="message">联系我们</a>
                <div class="secondary-menu">
            <li><a href="/templates/Sofamall/about.html" name="about">关于我们</a></li>
            <li><a href="/templates/Sofamall/productlist.html" name="show">案例展示</a></li>
            <li><a href="/templates/Sofamall/article_list.html" name="new">
                    <ul><li><a href="message.html" class="message"></a></li></ul>
                </div>
            </li> -->
        </ul>




        </nav>
    </div>

</header>
<div class="am-slider am-slider-default" data-am-flexslider="{playAfterPaused: 8000}">
    <ul class="am-slides">
        <li><img src="/templates/Sofamall/images/banner.jpg" alt="" ></li>
        <li><img src="/templates/Sofamall/images/banner.jpg" alt="" ></li>
        <li><img src="/templates/Sofamall/images/banner.jpg" alt="" ></li>
        <li><img src="/templates/Sofamall/images/banner.jpg" alt="" ></li>
    </ul>
</div>
<div>
    <header class="header-article-list">
        <div class="contact-left">联系我们</div>
        <div class="contact-right">
            <a href="index.html">首页 </a>&#62;<a href="#">联系我们</a>
        </div>
    </header>

    <main class="contact">
        <iframe src="/templates/Sofamall/map.html" width="636" height="378" frameborder="0" scrolling="no"></iframe>
        <ul>
            <li>
                <span><img src="/templates/Sofamall/images/contact1.png"/></span>
                <h2>联系我们</h2>
                <p>电话:0714-457878</p>
            </li>
            <li>
                <span><img src="/templates/Sofamall/images/contact2.png"/></span>
                <h2>公司地址</h2>
                <p>地址:湖北省大冶市大冶大道116号金穗小区B栋201号</p>
            </li>
            <li>
                <span><img src="/templates/Sofamall/images/contact3.png"/></span>
                <h2>电子邮箱</h2>
                <p>邮箱:123@dayeyunalading.com</p>
            </li>
        </ul>
    </main>
</div>
﻿<footer>
    <div>
        <div class="footer-info">
            <div class="footer-content">
                <img src="/templates/Sofamall/images/qccode.png" alt="">
               <div>
                <p>招商热线:0714-8868331</p>
                <div class="footer-box">
                    <i class="icon-tel"></i>
                    <span>公司电话:</span>
                    <span>0714-8868331</span>
                </div>
                <div class="footer-box">
                    <i class="icon-email"></i>
                    <span>公司邮箱:</span>
                    <span>123@dayeyunalading.com</span>
                </div>
                <div class="footer-box">
                    <i class="icon-address"></i>
                    <span>公司地址:</span>
                    <span>湖北省XXX市XXX大道小区B栋201</span>
                </div>
               </div>
            </div>
        </div>
        <style>
        .footer-bottom a{color:#F1404B}
        </style>
        <div class="footer-bottom"><div style="text-align:center;color:#fff;line-height:100px;"><span><a href="http://www.haothemes.com/" target="_blank" title="好主题">好主题</a>提供 - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></span></div></div>
    </div>
</footer>
</body>
</html>