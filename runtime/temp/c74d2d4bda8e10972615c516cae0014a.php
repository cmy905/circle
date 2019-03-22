<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"/home/wwwroot/default/application/home/view/upload/add_pic.html";i:1491923689;s:62:"/home/wwwroot/default/application/home/view/public/header.html";i:1491839131;s:62:"/home/wwwroot/default/application/home/view/public/footer.html";i:1491837922;}*/ ?>
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
            <h5>漫画页面上传</h5>
        </div>
        <div class="ibox-content">
            <!--搜索框开始-->           
            <div class="row">
                
            </div>
            <!--搜索框结束-->
            <div class="hr-line-dashed"></div>
            <div class="example-wrap">
                <!--头部，相册选择和格式选择-->

                <div id="uploader">
                    <div class="queueList">
                        <div id="dndArea" class="placeholder">
                            <div id="filePicker"></div>
                            <p>或将漫画拖到这里，单次最多可选300张（批量上传请将页面名称已数字递增形式预先命名，例：001.jpg,002.jpg,...,199.jpg）</p>
                        </div>
                    </div>
                    <div class="statusBar" style="display:none;">
                        <div class="progress">
                            <span class="text">0%</span>
                            <span class="percentage"></span>
                        </div><div class="info"></div>
                        <div class="btns">
                            <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>    
        </div>
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
    var upload_url = "<?php echo url('page_upload'); ?>";
    var book = "<?php echo $book; ?>";
    var chapter = "<?php echo $chapter; ?>";
</script>
<script type="text/javascript" src="__COMMON__/webuploader/dist/webuploader.js"></script>
<script type="text/javascript" src="__COMMON__/webuploader/upload.js"></script>
</body>
</html>