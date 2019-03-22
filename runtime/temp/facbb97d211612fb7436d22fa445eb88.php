<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"./template/admin/default\order\index.html";i:1486524446;s:43:"./template/admin/default\public\header.html";i:1486630701;s:43:"./template/admin/default\public\footer.html";i:1486630208;}*/ ?>
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
    .layui-table tr th{text-align: center;}
    .layui-table tr td{text-align: center;}
</style>
<div class="main-wrap">
    <blockquote class="layui-elem-quote fhui-admin-main_hd">
        <h2>订单列表</h2>
    </blockquote>
    <div class="y-role">
        <!--工具栏-->
        <div id="floatHead" class="toolbar-wrap">
            <div class="toolbar">
                <div class="box-wrap">
                    <a class="menu-btn"></a>
                    <div class="l-list">

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
                    <col width="10%">
                    <col width="6%">
                    <col width="6%">

                    <col width="6%">
                    <col width="6%">
                    <col width="6%">
                    <col width="12%">
                    <col width="10%">
                    <col width="10%">
                    <col width="5%">
                    <col width="8%">

                </colgroup>
                <thead>
                <tr>
                    <th>

                        <!--  <input type="checkbox" id="selected-all" style="position: absolute; opacity: 0;">-->
                        <input type="checkbox" class="selected-all" id="selected-all">

                    </th>
                    <th>ID</th>
                    <th>订单编号</th>
                    <th>会员名</th>
                    <th>交易类型</th>

                    <th>支付金额</th>
                    <th>积分/金币</th>
                    <th>支付方式</th>
                    <th>云通付交易流水号</th>
                    <th>创建时间</th>

                    <th>付款时间</th>
                    <th>订单状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <script id="arlist" type="text/html">
                    {{# for(var i=0;i<d.length;i++){  }}

                    <tr class="long-td">
                        <td>
                            <input ids="3031" name="ck" type="checkbox" value="true">

                            <!--<input id="ck" ids="3031" name="ck" type="checkbox" value="true">
                            <input name="ck" type="hidden" value="false">-->
                        </td>
                        <td>{{d[i].id}}</td>
                        <td>{{d[i].orderid}}</td>
                        <td>{{d[i].username}}</td>
                        <td>

                            {{# if(d[i].type==1){ }}
                            积分
                            {{# }else { }}
                            金币
                            {{# } }}
                        </td>
                        <td class="text-navy">{{d[i].money}}</td>
                        <td class="text-warning">{{d[i].points}}</td>
                        <td>云通付</td>
                        <td>
                            {{# if(d[i].serial_umber==null){ }}
                            ----
                            {{# }else { }}
                            {{d[i].serial_umber}}
                            {{# } }}

                        </td>
                        <td>{{d[i].create_time}}</td>
                        <td>
                            {{# if(d[i].pay_time==null){ }}
                            ----
                            {{# }else { }}
                            {{d[i].pay_time}}
                            {{# } }}

                        </td>
                        <td>

                            {{# if(d[i].status==1){ }}
                                <a class="red" href="javascript:;" onclick="javascript:;">
                                    <div id="zt{{d[i].id}}"><span class="label label-info">已付款</span></div>
                                </a>
                            {{# }else if(d[i].id!==2){ }}
                                <a class="red" href="javascript:;" onclick="javascript:;">
                                    <div id="zt{{d[i].id}}"><span class="label label-info">等待付款</span></div>
                                </a>
                            {{# }else{ }}
                                <a class="red" href="javascript:;" onclick="javascript:;">
                                    <div id="zt{{d[i].id}}"><span class="label label-danger">操作失败</span></div>
                                </a>
                            {{# } }}

                        </td>
                        <td>

                            <a class="layui-btn layui-btn-small do-action" data-type="doDelOne" data-href="<?php echo url('del_order'); ?>" data-id="{{d[i].id}}">
                                <i class="icon-edit  fa fa-pencil-square-o"></i>删除
                            </a>

                        </td>
                    </tr>
                    {{# } }}
                </script>
                <tbody id="article_list"></tbody>

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
    var url='<?php echo url("Order/index"); ?>';
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
