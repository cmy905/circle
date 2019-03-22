<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:47:"./template/admin/default\ad\index_position.html";i:1486603816;s:43:"./template/admin/default\public\header.html";i:1486630701;s:43:"./template/admin/default\public\footer.html";i:1486630208;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Language" content="zh-cn" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="author" content="Fhua" />
    <meta name="Copyright" content="BLIT" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0,initial-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>FhAdmin后台管理</title>
    <link href="__lay__/css/layui.css" rel="stylesheet" />
    <link href="__css__/style.css" rel="stylesheet" />
    <link href="__font__/font-awesome.css" rel="stylesheet" />

    <script src="__lay__/layui.js"></script>

</head>
<body>
<style>
    .layui-form-switch {
        padding-left: 0px;
        transition: .1s linear;
    }

</style>
<div class="main-wrap">
    <blockquote class="layui-elem-quote fhui-admin-main_hd">
        <h2>广告位列表</h2>
    </blockquote>

    <div class="y-role">
        <!--工具栏-->
        <div id="floatHead" class="toolbar-wrap">
            <div class="toolbar">
                <div class="box-wrap">
                    <a class="menu-btn"></a>
                    <div class="l-list">
                        <a class="layui-btn layui-btn-small do-action" data-type="doAdd" data-href="<?php echo url('add_position'); ?>"><i class="fa fa-plus"></i>添加广告位</a>

                        <a class="layui-btn layui-btn-small do-action" data-type="doRefresh" data-href=""><i class="fa fa-refresh fa-spin"></i>刷新</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/工具栏-->
        <!--文字列表-->
        <div class="fhui-admin-table-container">
            <form action="/_Admin/Nav_list" class="form-horizontal" id="formrec" method="post" role="form">
                <table class="layui-table" lay-skin="line">
                    <colgroup>

                        <col width="5%">
                        <col width="8%">
                        <col width="5%">
                        <col width="8%">
                        <col width="15%">
                        <col width="15%">
                        <col width="20%">
                    </colgroup>
                    <thead>
                    <tr>

                        <th>ID</th>
                        <th>位置名称</th>
                        <th>排序</th>
                        <th>状态</th>
                        <th width="15%">添加时间</th>
                        <th width="15%">更新时间</th>
                        <th width="20%">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list) || $list instanceof \think\Collection): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>

                    <tr class="long-td">
                        <td><?php echo $vo['id']; ?></td>
                        <td><?php echo $vo['name']; ?></td>
                        <td><?php echo $vo['orderby']; ?></td>
                        <td>
                            <?php if($vo['status'] == 1): ?>

                            <a href="javascript:;" class="change_status" data-id="<?php echo $vo['id']; ?>"> <div class="layui-unselect layui-form-switch layui-form-onswitch"><i></i></div> </a>
                            <?php else: ?>

                            <a href="javascript:;" class="change_status" data-id="<?php echo $vo['id']; ?>"> <div class="layui-unselect layui-form-switch"><i></i></div> </a>
                            <?php endif; ?>
                        </td>
                        <td><?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></td>
                        <td><?php echo date('Y-m-d H:i:s',$vo['update_time']); ?></td>

                        <td>
                            <a class="layui-btn layui-btn-small do-action" data-type="doEdit" data-href="<?php echo url('edit_position',['id'=>$vo['id']]); ?>"><i class="icon-edit  fa fa-pencil-square-o"></i>编辑</a>
                            <a class="layui-btn layui-btn-small do-action" data-type="doDelOne" data-href="<?php echo url('del_position'); ?>" data-id="<?php echo $vo['id']; ?>"><i class="icon-edit  fa fa-pencil-square-o"></i>删除</a>
                        </td>
                    </tr>

                    <?php endforeach; endif; else: echo "" ;endif; ?>


                    </tbody>
                </table>
                <div id="Pages" style="text-align:right;"></div><div id="allpage" style=" text-align: right;"></div>
            </form>
        </div>

    </div>
</div>
<div class="shang_box" style="display: none;">
    <div class="shang_tit">
        <p>感谢您的支持，我会继续努力的!</p>
    </div>
    <div class="shang_payimg">
        <img src="__img__/fhua/alipayimg.png" alt="扫码支持" title="扫一扫" />
    </div>
    <div class="pay_explain">扫码打赏，你说多少就多少</div>
    <div class="shang_info">
        <p>打开<span id="shang_pay_txt">支付宝</span>扫一扫，即可进行扫码打赏哦</p>
    </div>
</div>
<script src="__js__/global.js"></script>

</body>
</html>
<script>

    layui.use(['layer','common'], function () {
        var $ = layui.jquery

                , layer = layui.layer;

        $(document).on('click','.change_status', function () {
            var id=$(this).attr('data-id');

            var obs=$(this);
            $.ajax({
                url: '<?php echo url("position_state"); ?>',
                dataType: "json",
                data:{'id':id},
                type: "POST",
                success: function(data){


                    if(data.code == 1){
                        obs.find('div').removeClass('layui-form-onswitch');
                        layer.msg(data.msg,{icon:2,time:1500,shade: 0.1,});
                    }else{
                        obs.find('div').addClass('layui-form-onswitch');
                        layer.msg(data.msg,{icon:1,time:1500,shade: 0.1,});
                    }
                },
                error:function(ajaxobj)
                {
                    if(ajaxobj.responseText!='')
                        alert(ajaxobj.responseText);
                }
            });

        });
    });
</script>