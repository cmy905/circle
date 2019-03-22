<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:42:"./template/admin/default\member\index.html";i:1492156035;s:43:"./template/admin/default\public\header.html";i:1492156036;s:43:"./template/admin/default\public\footer.html";i:1492156036;}*/ ?>
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
        <h2>会员列表</h2>
    </blockquote>
    <div class="y-role">
        <!--工具栏-->
        <div id="floatHead" class="toolbar-wrap">
            <div class="toolbar">
                <div class="box-wrap">
                    <a class="menu-btn"></a>
                    <div class="l-list">
                        <a href="javascript:;" class="layui-btn layui-btn-small do-action" data-type="doAdd" data-href="<?php echo url('add_user'); ?>"><i class="fa fa-plus"></i>添加会员</a>
                        <a class="layui-btn layui-btn-small do-action" data-type="doDelete" data-href="<?php echo url('del_user'); ?>"><i class="fa fa-trash-o"></i>删除</a>
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
                    <col width="5%">
                    <col width="8%">
                    <col width="8%">
                    <col width="10%">
                    <col width="5%">
                    <col width="5%">
                    <col width="5%">
                    <col width="15%">
                    <col width="8%">
                    <col width="20%">

                </colgroup>
                <thead>
                <tr>
                    <th>

                        <!--  <input type="checkbox" id="selected-all" style="position: absolute; opacity: 0;">-->
                        <input type="checkbox" class="selected-all i-checks" id="selected-all">

                    </th>
                    <th>ID</th>
                    <th>会员名</th>
                    <th>等级</th>
                    <th>头像</th>

                    <th>性别</th>
                    <th>积分</th>
                    <th>金币</th>
                    <th>注册时间</th>

                    <th width="5%">会员状态</th>

                    <th width="10%">操作</th>
                </tr>
                </thead>
                <script id="arlist" type="text/html">
                    {{# for(var i=0;i<d.length;i++){  }}
                    <tr class="long-td">
                        <td>
                            <input class="ids i-checks" checked="chedked" type="checkbox" name="ids[]" value="0">

                            <!--<input id="ck" ids="3031" name="ck" type="checkbox" value="true">
                            <input name="ck" type="hidden" value="false">-->
                        </td>
                        <td>{{d[i].id}}</td>
                        <td>{{d[i].username}}</td>
                        <td>{{d[i].leval_name}}</td>
                        <td><img src="/public/{{d[i].avatar}}" height="60px;" width="80px" onerror="this.src='__IMG__/no_img.jpg'"/></td>
                        <td class="text-danger">
                            {{# if(d[i].sex==0){ }}
                            <span>未设置</span>
                            {{# }else if(d[i].sex==1){ }}
                            <span>男</span>
                            {{# }else{ }}
                            <span>女</span>
                            {{# } }}

                        </td>
                        <td class="text-navy">{{d[i].integral}}</td>
                        <td class="text-warning">{{d[i].gold}}</td>
                        <td>{{d[i].register_time}}</td>


                        <td>
                            {{# if(d[i].is_status==1){ }}
                            <a href="javascript:;" class="change_status"  data-id="{{d[i].id}}">

                                <div class="layui-unselect layui-form-switch"><i></i></div>
                            </a>
                            {{# }else{ }}
                            <a href="javascript:;" class="change_status" data-id="{{d[i].id}}">

                                <div class="layui-unselect layui-form-switch layui-form-onswitch"><i></i></div>
                            </a>
                            {{# } }}
                        </td>
                        <td>


                            <a  class="layui-btn layui-btn-small do-action" data-type="doEdit" data-href="<?php echo url('edit_user'); ?>" data-id="{{d[i].id}}">
                                <i class="icon-edit  fa fa-pencil-square-o"></i>编辑
                            </a>
                            <a class="layui-btn layui-btn-small do-action" data-type="doDelOne" data-href="<?php echo url('del_user'); ?>" data-id="{{d[i].id}}">
                                <i class="icon-edit  fa fa-pencil-square-o"></i>删除
                            </a>
                        </td>
                    </tr>
                    {{# } }}
                </script>
                <tbody id="article_list"></tbody>
                </tbody>
            </table>

        </div>
        <div id="AjaxPage" style="margin-top: -57px;float: right;"></div>
        <div style="float: right;margin-top: -9px;margin-right: 13px;">
            共<?php echo $count; ?>条数据，<span id="allpage"></span>
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
    /**
     * [user_state 文章状态]
     * @param  {[type]} val [description]
     * @Author[jonny 980218641@qq.com]
     */

    var laytpl,laypage;
    var url='<?php echo url("member/index"); ?>';
    var allpages='<?php echo $allpage; ?>';
    layui.use(['layer', 'laypage','common', 'icheck','laytpl'], function () {
        var $ = layui.jquery
                , layer = layui.layer
                , common = layui.common;
        laytpl =layui.laytpl;
        laypage = layui.laypage;

        common.Ajaxpage();

        //加载单选框样式
        $(("[type='checkbox']")).iCheck({
            checkboxClass: 'icheckbox_square-green',

        });

        /*$(".i-checks").iCheck({
            checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",
        });*/

       /* $(document).('iCheck',function(){
            checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",
        });*/

        $(document).on('click','.change_status', function () {
            var id=$(this).attr('data-id');
            var obs=$(this);
            $.ajax({
                url: '<?php echo url("member_state"); ?>',
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
        /*  //表格行点击勾选
         $('.layui-table tbody tr').on('click', function () {
         var $this = $(this);
         var $input = $this.children('td').eq(0).find('input');
         $input.on('ifChecked', function (e) {
         $this.css('background-color', '#EEEEEE');
         });
         $input.on('ifUnchecked', function (e) {
         $this.removeAttr('style');
         });
         $input.iCheck('toggle');
         }).find('input').each(function () {
         var $this = $(this);
         $this.on('ifChecked', function (e) {
         $this.parents('tr').css('background-color', '#EEEEEE');
         });
         $this.on('ifUnchecked', function (e) {
         $this.parents('tr').removeAttr('style');
         });
         });*/
        //全选
        $(document).on('ifChanged','.selected-all', function (event) {
            // alert(1);
            var $input = $('.layui-table tbody tr td').find('input');
            $input.iCheck(event.currentTarget.checked ? 'check' : 'uncheck');
        });

    });
</script>
