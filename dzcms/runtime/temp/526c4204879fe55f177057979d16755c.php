<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:30:"./admintpl/admin_rule_add.html";i:1508376505;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/public/lib/html5shiv.js"></script>
<script type="text/javascript" src="/public/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>资讯列表</title>
</head>
<body>
<!--_header 作为公共模版分离出去-->

		<div class="container ui-sortable">
			<div class="panel">

				<div class="panel-body">
					<form method="post"   class="form form-horizontal" id="form-admin-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"   >
				 <span class="c-red">*</span>权限中文名称：</label>

			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text zhongwen"  value="" placeholder="" id="name" name="name">
                <small id="nameext"></small>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3" id=""><span class="c-red">*</span>权限英文名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text yingwen" value="" placeholder="" id="title" name="title">
				<small id="nameext2"></small>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>状态：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input  type="radio" value="1" id="on" name="status" checked>
					<label for="on">启用</label>
				</div>
				<div class="radio-box">
					<input type="radio" value="0" id="off" name="status">
					<label for="off">禁用</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>级别：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input checked="checked" class="levels" name="level" type="radio" value="1" id="mokuai" >
					<label for="mokuai">模块</label>
				</div>
				<div class="radio-box">
					<input type="radio" class="levels" name="level" value="2" id="kongzhiqi" >
					<label for="kongzhiqi">控制器</label>
				</div>
				<div class="radio-box">
					<input type="radio" class="levels" name="level" value="3" id="caozuo" >
					<label for="caozuo">操作方法</label>
				</div>
			</div>
		</div>
			<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">上一级：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select id="select" class="select" name="parentid" size="1">
				<?php if(is_array($rulelist) || $rulelist instanceof \think\Collection || $rulelist instanceof \think\Paginator): $i = 0; $__LIST__ = $rulelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>

			</select>
			</span> </div>
	</div>


		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" id="sub" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
				</div>
			</div>
			       
			 
		</div>
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.form.min.js"></script>

<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%',
	});
	
	$("#form-admin-add").validate({
		rules:{
			name:{
				required:true,
			},
			title:{
				required:true,
			},
		},

	});
});
</script>
<script type="text/javascript">
	$(function () {
        $('.zhongwen').blur(function(){
            var rulename = $(this).val();
            var patrn= /[\u4E00-\u9FA5]/;
            if (patrn.exec(rulename))
            {
                $.ajax({
                    url: "ruleverify",
                    type: "POST",
                    dataType: "json",
                    data:{
                        name:$(this).val(),
                        nametype:'cn',
                    },
                    success:function (data) {
                        if(data==true){
                            $('#nameext').html('名称不可用');
                            $('#nameext').css('color','red');
                            $('#sub').attr('disabled',true);
                        }else{
                            $('#nameext').html('名称可用');
                            $('#nameext').css('color','green');
                            $('#sub').attr('disabled',false);

                        }
                    }
                })
            }else{
                $('#nameext').html('请输入中文');
                $('#nameext').css('color','red');
                $('#sub').attr('disabled',true);
            }
        });
        $('.yingwen').blur(function(){
            var rulename = $(this).val();
            var patrn = /^([a-zA-Z]|[_]){0,20}$/;
            if (patrn.exec(rulename)&&rulename!='')
            {
                $.ajax({
                    url: "ruleverify",
                    type: "POST",
                    dataType: "json",
                    data:{
                        name:$(this).val(),
                        nametype:'en',
                    },
                    success:function (data) {
                        if(data==true){
                            $('#nameext2').html('名称不可用');
                            $('#nameext2').css('color','red');
                            $('#sub').attr('disabled',true);
                        }else{
                            $('#nameext2').html('名称可用');
                            $('#nameext2').css('color','green');
                            $('#sub').attr('disabled',false);
                        }
                    }
                })
            }else{
                $('#nameext2').html('英文名称必须为字母、下划线');
                $('#nameext2').css('color','red');
                $('#sub').attr('disabled',true);

            }
        });
        $("#sub").click(function () {
            $(this).attr('disabled',true);
            var flag = $("#form-admin-add").valid();   //是否通过验证
            var form = new FormData(document.getElementById("form-admin-add"));	//获取form
            if((!flag)){
                $(this).attr('disabled',false);	//不通过验证按钮重新启用
                return;
            }
            $.ajax({
                type:'POST',
                url:'do_addrule',
                dataType:'JSON',
                data:form,
                processData:false,
                contentType:false,
                success:function (data) {
                    if(data == 'succ'){
                        layer.msg('添加权限成功', {icon: 1,time:1000},function () {
                            parent.location.reload();		//刷新父页面
                        });

                    }
                    if(data == 'fail'){
                        layer.msg('添加失败 请稍后重试', {icon: 2});
                        $('#sub').attr('disabled',false);	//提交不通按钮重新启用
                    }
                },
                error:function (error) {
                    layer.msg('未知错误 请稍后重试', {icon: 5});
                    $('#sub').attr('disabled',false);	//发生错误按钮重新启用
                },
            })
        });

        $(".iCheck-helper").click(function () {
            var id=$('input:radio[name="level"]:checked').val();
			var opt='';
            $.ajax({
                type:'POST',
                url:'rule_parent',
                dataType:'JSON',
                data:{
                    id:id,
				},
                success:function (data) {
                    $('#select').html('');
					for(var i=0;i<data.length;i++){
                    	opt+="<option value='"+data[i]['id']+"'>"+data[i]['name']+"</option>";
					}
					$('#select').html(opt);

                },
                error:function (error) {
                    layer.msg('未知错误 请稍后重试', {icon: 5});
                },
            })
        });
    })

</script>

</body>
</html>
<!--H-ui前端框架提供前端