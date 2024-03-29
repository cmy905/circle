<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:49:"./template/admin/default\article\add_article.html";i:1486544750;s:43:"./template/admin/default\public\header.html";i:1486630701;s:43:"./template/admin/default\public\footer.html";i:1486630208;}*/ ?>
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
    .site-demo-upload,
    .site-demo-upload img{width: 200px; height: 200px; border-radius: 100%;}
    .site-demo-upload{position: relative; background: #e2e2e2;}
    .site-demo-upload .site-demo-upbar{position: absolute; top: 50%; left: 50%; margin: -18px 0 0 -56px;}
    .site-demo-upload .layui-upload-button{background-color: rgba(0,0,0,.2); color: rgba(255,255,255,1);}
    .upload-img{
        margin-left: 95px;
        margin-top: 10px;
    }
    .upload-img img{
        margin-top: -38px;
    }
</style>
<script>
    function getRadioVal(rval){
        if(rval == 1){
            $("#integral_count").removeAttr("readonly");
            $("#gold_count").attr("readonly","readonly");
        }else{
            $("#integral_count").attr("readonly","readonly");
            $("#gold_count").removeAttr("readonly");
        }
    }
</script>
<div class="main-wrap">
    <blockquote class="layui-elem-quote fhui-admin-main_hd">
        <h2>添加文章</h2>
    </blockquote>
    <form class="layui-form" action="add_article">
        <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-block">
                <input class="layui-input" type="text" name="title" placeholder="输入文章标题"  lay-verify="title">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">文章分类</label>
            <div class="layui-input-inline">
                <select name="nav_id" lay-filter="nav_id" lay-verify="nav_id">
                    <option value="">==请选择==</option>
                    <?php if(!empty($cate)): if(is_array($nav) || $nav instanceof \think\Collection): if( count($nav)==0 ) : echo "" ;else: foreach($nav as $key=>$vo): ?>
                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['nav_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </select>

            </div>
            <div class="layui-input-inline">
                <select name="cate_list"  lay-filter="cate_id">
                    <option value="">==请选择==</option>

                </select>

            </div>
            <div class="layui-input-inline">
                <select name="cate_sub_list">
                    <option value="">==请选择==</option>

                </select>

            </div>
        </div>


        <div class="layui-form-item">
            <label class="layui-form-label">文章标签</label>
            <div class="layui-input-block">
                <input type="text" id="tags" name="tags" lay-verify="required" placeholder="文章标签" autocomplete="off" class="layui-input">

            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"> 下载类型</label>
            <div class="layui-input-block">

                <input type="radio" name="down_type" value="1" title="积分" lay-filter="type-id" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon"></i><span>积分</span></div>
                <input type="radio" name="down_type" value="2" title="金币" lay-filter="type-id" ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>金币</span></div>

            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">积分</label>
            <div class="layui-input-inline">
                <input type="tel" name="integral_count" lay-verify="required" autocomplete="off" id="integral_count" class="layui-input" value="0">

            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">金币</label>
            <div class="layui-input-inline">
                <input type="text" name="gold_count" id="gold_count" lay-verify="integral" value="0"   autocomplete="off" class="layui-input" readonly="readonly">

            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">seo关键字</label>
            <div class="layui-input-block">
                <textarea name="seo_keywords" id="seo_keywords" lay-verify="required"  placeholder="seo关键字" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">seo描述</label>
            <div class="layui-input-block">
                <textarea name="seo_description" id="seo_description" lay-verify="required"  placeholder="seo描述" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">文章封面图</label>

            <div class="site-demo-upload upload-img">
                <img id="img_path" src="__img__/tong.jpg">
                <div class="site-demo-upbar">
                    <input type="file" name="file" class="layui-upload-file" id="upload-image">
                    <input type="hidden" id="image" name="image" >
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">源码附件</label>
            <div class="layui-inline">
                <input type="text" id="file_path" name="file_path"  placeholder="附件地址" autocomplete="off" class="layui-input">

            </div>
            <div class="layui-inline">

                <input type="file" name="file" lay-type="file" class="layui-upload-file upload-file" id="upload-file">
                <input type="hidden" name="file_name" id="file_name"  value="">

            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">编辑器</label>
            <div class="layui-input-block">
                <textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="LAY_demo_editor" style="display: none;"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"> 是否推荐</label>
            <div class="layui-input-block">

                <input type="radio" name="is_recommend"  value="1" title="是" lay-filter="is_recommend" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon"></i><span>是</span></div>
                <input type="radio" name="is_recommend" value="0" title="否" lay-filter="is_recommend" ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>否</span></div>

            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"> 文章类型</label>
            <div class="layui-input-block">

                <input type="radio" name="type"  value="1" title="是" lay-filter="type" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon"></i><span>原创</span></div>
                <input type="radio" name="type" value="0" title="否" lay-filter="type" ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>转载</span></div>

            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"> 审核状态</label>
            <div class="layui-input-block">

                <input type="radio" name="is_status"  value="1" title="是" lay-filter="is_status" checked=""><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon"></i><span>是</span></div>
                <input type="radio" name="is_status" value="0" title="否" lay-filter="is_status" ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>否</span></div>

            </div>
        </div>



        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

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
    layui.use(['form', 'layedit', 'laydate','upload'], function(){
        var $ = layui.jquery;
        $form = $('form');
        var form = layui.form()
                ,layer = layui.layer
                ,layedit = layui.layedit
                ,laydate = layui.laydate;
        //上传图片
        layui.upload({
            url: "<?php echo url('Upload/upload'); ?>" //上传接口
            ,before: function(input){
                //返回的参数item，即为当前的input DOM对象
                console.log('图片上传中');
            }
            ,title:'上传封面图'
            ,elem: '#upload-image' //指定原始元素，默认直接查找class="layui-upload-file"
            ,method: 'post' //上传接口的http类型
            ,ext: 'jpg|png|gif'
            ,type:'images'
            ,success: function(data){ //上传成功后的回调
                //console.log(res)
                if(data.status == 1){
                    $("#image").val('/public/upload/image/article/' +data.image_name);
                    $("#img_path").attr('src', '/public/upload/image/article/' + data.image_name).show();
                }else{
                    alert(data.error_info);
                }

            }
        });
        //上传附件
        layui.upload({
            url: "<?php echo url('Upload/uploadFile'); ?>" //上传接口
            ,before: function(input){
                //返回的参数item，即为当前的input DOM对象
                console.log('文件上传中');
            }
            ,title:'上传附件'
            ,elem: '#upload-file' //指定原始元素，默认直接查找class="layui-upload-file"
            ,method: 'post' //上传接口的http类型
            ,ext: 'zip'
            ,type:'file'
            ,success: function(data){ //上传成功后的回调
                //console.log(res)
                if(data.status == 1){
                    $("#file_name").val(data.file_name);
                    $("#file_path").val(data.file_path);
                }else{
                    layer.msg(data.error_info);
                }

            }
        });


        /*//创建一个编辑器
        layedit.set({
            uploadImage: {
                url: "<?php echo url('upload/uploadImage'); ?>" //接口url
                ,type: 'post' //默认post
            }
        });*/
        /*var editIndex = layedit.build('LAY_demo_editor',function(){
            uploadImage: {
                url: '<?php echo url("upload/uploadImage"); ?>' //接口url
                ,type: 'post' //默认post
            }

        });*/

        var editIndex = layedit.build('LAY_demo_editor', {
            //hideTool: ['image']
            uploadImage: {
                url: '<?php echo url("upload/uploadImage"); ?>'
                ,type: 'post'

            }
            //,tool: []
            //,height: 100
        });
        layedit.sync(editIndex);
        /*getChoose.onclick = function(){
            alert(layedit.getSelection(index));
        };*/

        form.on('radio(type-id)',function(data){

            if(data.value == 1){
                $("#integral_count").css("background-color","#fff");
                $("#integral_count").removeAttr("readonly");
                $("#gold_count").attr("readonly","readonly");
                $("#gold_count").css("background-color","#ECEAEA");

            }else{
                $("#integral_count").css("background-color","#ECEAEA");
                $("#integral_count").attr("readonly","readonly");
                $("#gold_count").removeAttr("readonly");
                $("#gold_count").css("background-color","#fff");
            }

        });
        form.on('select(nav_id)', function(data) {
            $form.find('select[name=cate_list]').html("");
            var value = data.value;
            $.ajax({
                url: "<?php echo url('article/get_cate'); ?>",
                dataType: "json",
                data: {"nav_id": value},
                type: "POST",
                success: function (data) {
                    $.each(data, function (i, n) {
                        var proHtml = '<option value="' + n.id + '">' + n.cate_name + '</option>';
                        $form.find('select[name=cate_list]').append(proHtml);
                    });

                    form.render();

                },
                error: function (ajaxobj) {
                    if (ajaxobj.responseText != '')
                        alert(ajaxobj.responseText);
                }
            });
        });
        form.on('select(cate_id)', function(data) {
            $form.find('select[name=cate_sub_list]').html("");
            var value = data.value;

            $.ajax({
                url: "<?php echo url('article/get_cate_child'); ?>",
                dataType: "json",
                data: {"cate_id": value},
                type: "POST",
                success: function (data) {
                    $.each(data, function (i, n) {
                        var proHtml = '<option value="' + n.id + '">' + n.cate_name + '</option>';
                        $form.find('select[name=cate_sub_list]').append(proHtml);
                    });

                    form.render();

                },
                error: function (ajaxobj) {
                    if (ajaxobj.responseText != '')
                        alert(ajaxobj.responseText);
                }
            });
        });

        //自定义验证规则
        form.verify({
            title: function(value){
                if(value.length < 5){
                    return '标题至少得5个字符啊';
                }
            }
            ,nav_id: function (value) {
                if(value == ""){
                    return "请选择文章分类";
                }
            }
            ,integral:function(value){

                if((!/^(\+)?\d+$/.test( value ))){
                    return "只能大于0的合法数";
            }
            }
            ,content: function(value){
                layedit.sync(editIndex);
            }
        });



        //监听提交
        form.on('submit(demo1)', function(data){
            layer.alert(JSON.stringify(data.field), {
                title: '最终的提交信息'
            })
            return false;
        });


    });
</script>