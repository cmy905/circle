<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"C:\wamp64\www/application/home\view\upload\new_chapter.html";i:1492156219;s:54:"C:\wamp64\www/application/home\view\public\header.html";i:1492156220;s:54:"C:\wamp64\www/application/home\view\public\footer.html";i:1492156220;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查收查引</title>
    
    <link rel="stylesheet" type="text/css" href="__COMMON__/webuploader/css/webuploader.css" />
    <link rel="stylesheet" type="text/css" href="__COMMON__/webuploader/style.css" />

    <link href="/public/static/admin/checkbox/bootstrap.css" rel="stylesheet">
    <!-- <link href="/public/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet"> -->
    <!-- <link href="/public/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet"> -->
    <link href="/public/static/admin/css/font-awesome.css?v=4.7.0" rel="stylesheet">
    <link href="/public/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/public/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/public/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="/public/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/public/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/public/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="/public/static/admin/checkbox/build.css" rel="stylesheet">
    <style type="text/css">
    .long-tr th{
        text-align: center
    }
    .long-td td{
        text-align: center
    }
    </style>
    
    
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>新增章节</h5>
        </div>
        <div class="ibox-content">
            <!--搜索框开始-->           
            
            <!--搜索框结束-->
            <div class="example-wrap">
                <div class="example">
                    <div class="ibox-content">
                        <form class="form-horizontal" name="comics" id="comics" method="post" action="<?php echo url('comics'); ?>">
                            <div class="form-group">
                            <label class="col-sm-3 control-label">章节名：</label>
                            <div class="input-group col-sm-4" style="float: left;">
                                <input id="chaptername" type="text" class="form-control" name="chaptername" placeholder="请输入章节名" value="">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">章节简介：</label>
                            <div class="input-group col-sm-4" style="float: left;">
                                <input id="intro" type="text" class="form-control" name="intro" placeholder="请输入章节简介" value="">
                            </div>
                            </div>

                           
                            
                        </form>
                    </div>
                    

                </div>
            </div>
            <!-- End Example Pagination -->
        </div>
    </div>
</div>
<!-- End Panel Other -->
</div>

<!-- 加载动画 -->
<div class="spiner-example">
    <div class="sk-spinner sk-spinner-three-bounce">
        <div class="sk-bounce1"></div>
        <div class="sk-bounce2"></div>
        <div class="sk-bounce3"></div>
    </div>
</div>

<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/content.min.js?v=1.0.0"></script>
<script src="__JS__/plugins/chosen/chosen.jquery.js"></script>
<script src="__JS__/plugins/iCheck/icheck.min.js"></script>
<script src="__JS__/plugins/layer/laydate/laydate.js"></script>
<script src="__JS__/plugins/switchery/switchery.js"></script><!--IOS开关样式-->
<script src="__JS__/jquery.form.js"></script>
<script src="__JS__/layer/layer.js"></script>
<script src="__JS__/laypage/laypage.js"></script>
<script src="__JS__/laytpl/laytpl.js"></script>
<script src="__JS__/lunhui.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>


<script type="text/javascript">
   $(".spiner-example").css('display','none'); //数据加载完关闭动画

   function formDataget(){
        var data = [];
        data.chaptername = $("#chaptername").val();
        data.intro = $("#intro").val();
        return data;
   }
</script>
</body>
</html>