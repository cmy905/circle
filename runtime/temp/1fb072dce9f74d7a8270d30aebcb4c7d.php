<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"./template/admin/default\role\index.html";i:1492156035;s:43:"./template/admin/default\public\header.html";i:1492156036;s:43:"./template/admin/default\public\footer.html";i:1492156036;}*/ ?>
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
    <title>CircleAdmin后台管理</title>
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
    .layui-table tr th{text-align: center;}
    .layui-table tr td{text-align: center;}
</style>
<div class="main-wrap">
    <blockquote class="layui-elem-quote fhui-admin-main_hd">
        <h2>角色列表</h2>
    </blockquote>
    <div class="y-role">
        <!--工具栏-->
        <div id="floatHead" class="toolbar-wrap">
            <div class="toolbar">
                <div class="box-wrap">
                    <a class="menu-btn"></a>
                    <div class="l-list">
                        <a href="javascript:;" class="layui-btn layui-btn-small do-action" data-type="doAdd" data-href="<?php echo url('role/roleadd'); ?>"><i class="fa fa-plus"></i>添加角色</a>

                        <a class="layui-btn layui-btn-small do-action" data-type="doRefresh" data-href=""><i class="fa fa-refresh fa-spin"></i>刷新</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/工具栏-->
        <!--文字列表-->
        <div class="fhui-admin-table-container">

            <table class="layui-table">
                <colgroup>
                    <col width="5%">
                    <col width="8%">
                    <col width="5%">

                    <col width="12%">
                    <col width="12%">
                    <col width="20%">
                </colgroup>
                <thead>
                <tr>

                    <th>id </th>
                    <th>角色名称</th>
                    <th>状态</th>
                    <th>添加时间</th>
                    <th>更新时间</th>
                    <th>操作</th>

                </tr>
                </thead>
                <script id="arlist" type="text/html">
                    {{# for(var i=0;i<d.length;i++){  }}
                    <tr class="long-td">

                        <td>{{d[i].id}}</td>
                        <td>{{d[i].title}}</td>
                        <td>
                            {{# if(d[i].status==1){ }}
                            <a href="javascript:;" class="change_status"  data-id="{{d[i].id}}">
                                <div class="layui-unselect layui-form-switch layui-form-onswitch"><i></i></div>

                            </a>
                            {{# }else{ }}
                            <a href="javascript:;" class="change_status" data-id="{{d[i].id}}">

                                <div class="layui-unselect layui-form-switch"><i></i></div>
                            </a>
                            {{# } }}
                        </td>
                        <td>{{d[i].create_time}}</td>


                        <td>{{d[i].update_time}}</td>


                        <td>

                            <a  class="layui-btn layui-btn-small do-action" onclick="giveQx({{d[i].id}})" >
                                <i class="icon-edit  fa fa-pencil-square-o"></i>分配权限
                            </a>
                            <a  class="layui-btn layui-btn-small do-action" data-type="doEdit" data-href="<?php echo url('roleEdit'); ?>" data-id="{{d[i].id}}">
                                <i class="icon-edit  fa fa-pencil-square-o"></i>编辑
                            </a>
                            <a class="layui-btn layui-btn-small do-action" data-type="doDelOne" data-href="<?php echo url('roleDel'); ?>" data-id="{{d[i].id}}">
                                <i class="icon-edit  fa fa-pencil-square-o"></i>删除
                            </a>
                        </td>
                    </tr>
                    {{# } }}
                </script>
                <tbody id="article_list">

                </tbody>
            </table>

        </div>
        <div id="AjaxPage" style="margin-top: -57px;float: right;"></div>
        <div style="float: right;margin-top: -9px;margin-right: 13px;">
            共<?php echo $count; ?>条数据，<span id="allpage"></span>
        </div>
    </div>
</div>
<!-- 角色分配 -->
<div class="zTreeDemoBackground left" style="display: none" id="role">
    <input type="hidden" id="nodeid" value="">
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-2">
            <ul id="treeType" class="ztree"></ul>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-4" style="margin-bottom: 15px">
            <input type="button" value="确认分配" class="btn btn-primary" id="postform"/>
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
<script src="__js__/jquery.min.js?v=2.1.4"></script>
<link rel="stylesheet" href="__js__/zTree/zTreeStyle.css" type="text/css">
<script type="text/javascript" src="__js__/zTree/jquery.ztree.core-3.5.js"></script>
<script type="text/javascript" src="__js__/zTree/jquery.ztree.excheck-3.5.js"></script>
<script type="text/javascript" src="__js__/zTree/jquery.ztree.exedit-3.5.js"></script>

<script type="text/javascript">
    zNodes = '';
    var index = '';
    var index2 = '';
    //分配权限
    function giveQx(id){
        $("#nodeid").val(id);
        //加载层
        index2 = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2
        //获取权限信息
        $.getJSON('./giveAccess', {'type' : 'get', 'id' : id}, function(res){
            layer.close(index2);
            if(res.code == 1){
                zNodes = JSON.parse(res.data);  //将字符串转换成obj

                //页面层
                index = layer.open({
                    type: 1,
                    area:['350px', '600px'],
                    title:'权限分配',
                    skin: 'layui-layer-demo', //加上边框
                    content: $('#role')
                });
                //设置位置
                layer.style(index, {
                    top: '150px'
                });

                //设置zetree
                var setting = {
                    check:{
                        enable:true
                    },
                    data: {
                        simpleData: {
                            enable: true
                        }
                    }
                };

                $.fn.zTree.init($("#treeType"), setting, zNodes);
                var zTree = $.fn.zTree.getZTreeObj("treeType");
                zTree.expandAll(true);

            }else{
                layer.alert(res.msg);
            }

        });
    }

    //确认分配权限
    $("#postform").click(function(){
        var zTree = $.fn.zTree.getZTreeObj("treeType");
        var nodes = zTree.getCheckedNodes(true);
        var NodeString = '';
        $.each(nodes, function (n, value) {
            if(n>0){
                NodeString += ',';
            }
            NodeString += value.id;
        });

        var id = $("#nodeid").val();
        //写入库
        $.post('./giveAccess', {'type' : 'give', 'id' : id, 'rule' : NodeString}, function(res){
            layer.close(index);
            if(res.code == 1){
                layer.msg(res.msg,{icon:1,time:1500,shade: 0.1}, function(){

                });
            }else{
                layer.msg(res.msg);
            }

        }, 'json')
    })


    var laytpl,laypage,layer;
    var url='<?php echo url("role/index"); ?>';
    var allpages='<?php echo $allpage; ?>';
    layui.use(['layer', 'laypage','common', 'icheck','laytpl'], function () {
        var $ = layui.jquery

                , common = layui.common;
        layer = layui.layer
        laytpl =layui.laytpl;
        laypage = layui.laypage;

        common.Ajaxpage();

        //加载单选框样式
        $(("[type='checkbox']")).iCheck({
            checkboxClass: 'icheckbox_square-green',

        });
        $(document).on('click','.change_status', function () {
            var id=$(this).attr('data-id');
            var obs=$(this);
            $.ajax({
                url: '<?php echo url("role_state"); ?>',
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

        //全选
        $(document).on('ifChanged','.selected-all', function (event) {
            // alert(1);
            var $input = $('.layui-table tbody tr td').find('input');
            $input.iCheck(event.currentTarget.checked ? 'check' : 'uncheck');
        });

    });

</script>
