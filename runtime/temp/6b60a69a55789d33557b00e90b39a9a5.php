<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"C:\wamp64\www/application/home\view\concern\comics_look.html";i:1492927835;}*/ ?>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $bookinfo['title']; ?></title>
<meta name="keywords" content="<?php echo $bookinfo['title']; ?>">
<meta name="description" content="<?php echo $bookinfo['title']; ?>
<?php echo $bookinfo['brief']; ?>">
<meta content="no" http-equiv="imagetoolbar">
<meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible">

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="__css__/dialog.css">
<link rel="stylesheet" type="text/css" href="__css__/read.css">

<script src="__js__/jquery.min.js"></script>
<script src="__js__/jQuery.imgAutoSize.js"></script>
<script src="__Js__/layer/layer.js"></script>

<body oncontextmenu="try{ window.event.returnValue=false;}catch(e){  };return false;">

<input type="text" style="display:none" id="flush_image_notify" value="0">
<div id="readarea" class="cf" style="width: 100%;">
<!--顶部导航条-->
<div id="cr_top">
    <p class="bg"></p>
    <div class="cr_tb">
        <a href="/home/index.html" class="logo" title="circle" target="_blank"><img src="__img__/read/ico_nav_white.png"  style="width: 77px;"></a>
        <!--left-->
        <div class="left">
            <a href="/home/index.html" class="n n1" target="_blank"><img src="__img__/ico_nav.png"> 首页</a>
            
            <a href="javascript:;" class="n n3" id="to_sign_in" style="display:none" onclick="login_ajax(function(){  login_status()  });return false;">求登录</a>
            <!--用户信息-->
            <dl class="user" id="current_user" style="display: block;">
                <dt><a href="javascript:;" class="n n4"><img src="__img__/ico_user.png"> <?php echo $user['nickname']; ?></a></dt>
                <dd >
                    <div class="userinfo">
                        <a href="/home/upload/usercomics.html" class="tx" target="_blank"><img src="<?php echo $user['image']; ?>"></a>   
                    </div>

                    <div class="block">
                        <a href="/home/collect/collect" target="_blank">
                        <span>收藏</span>
                        <em class="none"><?php echo $collect_count; ?></em>
                        </a>
                        <a href="" target="_blank">
                        <span>消息</span>
                        <em class="none">0</em>
                        </a>
                    </div>
                    <div class="block">
                        <a href="/home/upload/usercomics.html" target="_blank">我的空间</a>
                        <a href="" target="_blank">个人资料</a>
    
                    </div>
                     <div class="bot"><a href="javascript:logout_ajax();">[退出]</a></div>
                </dd>
            </dl>
            <!--用户信息 结束-->
           
        </div>
        <!--left end-->
        <!--right-->
        <div class="right">
            <!--目录-->
            <dl class="catalog" id="chapter_directory">
                <dt><a href="javascript:;" class="n">目录</a></dt>
                <dd style="height:120px;">
                    <div class="osx">
                        <div class="jScrollPaneContainer" style="height: 100px; width: 142px;">
                        <div class="pane" style="overflow:auto; height: 100px; width: 135px; padding-right: 5px; position: absolute; top: 0px;">
                        <?php if(is_array($chapterInfo) || $chapterInfo instanceof \think\Collection): $i = 0; $__LIST__ = $chapterInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chapter): $mod = ($i % 2 );++$i;if($chapter['no']<$img['zid']): ?>
                            <a  onclick="readchapter(<?php echo $chapter['no']; ?>)"><?php echo $chapter['no']; ?><?php echo $chapter['chaptername']; ?></a>
                        <?php elseif($chapter['no'] == $img['zid']): ?>
                            <a class="curr"   onclick="readchapter(<?php echo $chapter['no']; ?>)"><?php echo $chapter['no']; ?><?php echo $chapter['chaptername']; ?></a>
                         <?php else: ?>
                            <a  onclick="readchapter(<?php echo $chapter['no']; ?>)"><?php echo $chapter['no']; ?><?php echo $chapter['chaptername']; ?></a>
                       
                       <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                         <script type="text/javascript">
                    function readchapter(zid){
                                    var book = <?php echo $bookinfo['id']; ?>;
                                    var yid=1;

                                    $.ajax({
                                        url:"<?php echo url('readchapter'); ?>",
                                        type:'POST', //GET
                                        async:true,    //或false,是否异步
                                        data:{
                                            //username:username,
                                            book:book,
                                            chapter:zid,
                                            page:yid

                                        },
                                        timeout:5000,    //超时时间
                                        dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                                        beforeSend:function(xhr){
                                            console.log('发送前')
                                        },
                                        success:function(data,textStatus,jqXHR){
                                            if(data.code==1){
                                                layer.msg(data.msg, {icon: 6,time:1500,shade: 0.1}, function(index){
                                                    // window.location.href="<?php echo url('add_report'); ?>";
                                                    window.location.href = "<?php echo url('comics_look'); ?>"+"?book="+book+"&chapter="+zid+"&page="+yid;
                                                });
                                            }else{
                                                layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                                                return false;   
                                            }
                                        },
                                        error:function(xhr,textStatus){
                                            // console.log('错误')
                                            // console.log(xhr)
                                            // console.log(textStatus)
                                        },
                                        complete(ajaxobj){
                                            //alert(ajaxobj);
                                            // var ajaxobj=eval("("+data+")");
                                            
                                        }
                                        })
                    }
                    </script>
                       
                        </div>
                       <!-- <div class="jScrollPaneTrack" style="width: 9px; height: 184px; top: 10px;">    <div class="jScrollPaneDrag" style="width: 9px; height: 62.043px; top: 0px;">
                                <div class="jScrollPaneDragTop" style="width: 9px;"></div><div class="jScrollPaneDragBottom" style="width: 9px;">
                            
                                </div>
                            </div>
                        </div>
                        <a href="javascript:;" class="jScrollArrowUp disabled" style="width: 9px;">Scroll up</a>
                        <a href="javascript:;" class="jScrollArrowDown" style="width: 9px;">Scroll down</a>-->
                    </div>
                </div>
                </dd>
            </dl>
            <!--目录 end-->
            <a href="javascript:;" id="to_prev_chapter" class="n" onclick="chapter()">上一章</a>
            <a href="javascript:;" id="to_next_chapter" class="n" onclick="">下一章</a>
            <a href="javascript:;" id="flimg"></a>
        </div>
        <!--right end-->
    </div>  
</div>
<!--顶部导航条 结束-->
<!--漫画标题开始-->
<div id="readtop">
    <h1><a class="comic_name" id="comic_name" target="_blank"><?php echo $bookinfo['title']; ?></a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<span id="current_chapter_name">第<?php echo $img['zid']; ?>章</span></h1>
    <span class="author">
        <a href="http://" target="_blank"><?php echo $user['nickname']; ?></a>
    </span>
                  
</div>
<!--漫画标题 end-->

<!--漫画内容-->
<div class="tc">
    <div class="comic_read_img" id="current_read_image" style="width: 720px; height: 760px;" object_id="4315945">
        <img id="image_trigger" style="position:absolute; left:0; top:0; z-index:3;" border="4" src="http://static.u17i.com/common/images/blank.gif" onselectstart="return false" width="720" height="760">    
        <img id="cur_img_4315945" class="image_cache loading cur_img" style="display: block; position: absolute; left: 0px; top: 0px; z-index: 2; width: 720px; height: 760px;" onselectstart="return false" data-src="<?php echo $img['image_path']; ?>" src="<?php echo $img['image_path']; ?>">
        <div class="r_btnbox">
            <div id="func_bar1" class="btnlist" style="display: none;">
                <a href="javascript:;" class="btn_sc"></a>
                <a href="javascript:;" class="btn_typ"></a>
                <a href="javascript:;" class="btn_ds"></a>
            </div>
            <div class="btn_kg">
                <a href="javascript:;" class="btn_add" style="transform: rotate(0deg); transform-origin: 50% 50% 0px;"></a>
            </div>
        </div>
    </div>
    
</div>
<div class="tc">
<div class="comic_read_img" id="current_read_image" style="width: 720px; height: 20px;" object_id="4315945">
</div>
</div>

<!--漫画内容 end-->
<!--底部-->
<div id="readbottom">
    <strong class="pagenum"><em><?php echo $ye; ?></em>/<?php echo $max; ?></strong>
    <!-- 手机浏览 -->

    <!--礼物详情滚动-->
    <!--翻页-->
     <div class="pagebar">
        <a href="javascript:void(0)" id="last" class="prev">上一页</a>
        <div class="selectpage">
            <em><i><b></b><span></span></i><q>第<?php echo $ye; ?>页</q></em>
            <div class="osx">
                <div class="jScrollPaneContainer" style="height: 217px; width: 89px;">
                <div class="pane" style="overflow: auto; height: 217px; width: 89px; padding: 0px;">
                <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ye_page): $mod = ($i % 2 );++$i;if($ye_page['yid'] < $ye): ?>
                 <a onclick="readpage(<?php echo $ye_page['yid']; ?>)" class="page_2">第<?php echo $ye_page['yid']; ?>页</a>
                 <?php elseif($ye_page['yid'] == $ye): ?>
                <a onclick="readpage(<?php echo $ye_page['yid']; ?>)" class="page_1 hover">第<?php echo $ye; ?>页</a>
                <?php else: ?>
                <a onclick="readpage(<?php echo $ye_page['yid']; ?>)" class="page_2">第<?php echo $ye_page['yid']; ?>页</a>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                 <script type="text/javascript">
                     function readpage(yid){
                                    var book = <?php echo $bookinfo['id']; ?>;
                                    var zid=<?php echo $img['zid']; ?>;

                                    $.ajax({
                                        url:"<?php echo url('readpage'); ?>",
                                        type:'POST', //GET
                                        async:true,    //或false,是否异步
                                        data:{                                            //username:username,
                                            book:book,
                                            chapter:zid,
                                            page:yid

                                        },
                                        timeout:5000,    //超时时间
                                        dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                                        beforeSend:function(xhr){
                                            console.log('发送前')
                                        },
                                        success:function(data,textStatus,jqXHR){
                                            if(data.code==1){
                                                layer.msg(data.msg, {icon: 6,time:1500,shade: 0.1}, function(index){
                                                    // window.location.href="<?php echo url('add_report'); ?>";
                                                    window.location.href = "<?php echo url('comics_look'); ?>"+"?book="+book+"&chapter="+zid+"&page="+yid;
                                                });
                                            }else{
                                                layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                                                return false;   
                                            }
                                        },
                                        error:function(xhr,textStatus){
                                            // console.log('错误')
                                            // console.log(xhr)
                                            // console.log(textStatus)
                                        },
                                        complete(ajaxobj){
                                            //alert(ajaxobj);
                                            // var ajaxobj=eval("("+data+")");
                                            
                                        }
                                        })
                    }
                </script>
                </div>
                </div>
               <!-- <div class="jScrollPaneTrack" style="width: 9px; height: 184px; top: 10px;">    <div class="jScrollPaneDrag" style="width: 9px; height: 62.043px; top: 0px;">
                                <div class="jScrollPaneDragTop" style="width: 9px;"></div><div class="jScrollPaneDragBottom" style="width: 9px;">
                            
                                </div>
                            </div>
                        </div>-->
            </div>
        </div>
        <a href="javascript:;" id="next" class="next">下一页</a>
    </div>
    <!--翻页 end-->
            
                <script type="text/javascript">
                    $('#content_img').imgAutoSize();
                    $('#last').click(function(event) {
                        /* Act on the event */
                        
                        window.location.href="<?php echo url('comics_look',$page['last']); ?>"+"?book="+<?php echo $bookinfo['id']; ?>;
                    });
                    $('#next').click(function(event) {
                        /* Act on the event */
                       // $yid=<?php echo $ye; ?>+1;
                        window.location.href="<?php echo url('comics_look',$page['next']); ?>"+"?book="+<?php echo $bookinfo['id']; ?>;
                    });
                    $('#to_prev_chapter').click(function(event) {
                        /* Act on the event */
                        
                        window.location.href="<?php echo url('comics_look',$chapters['last']); ?>"+"?book="+<?php echo $bookinfo['id']; ?>;
                    });
                    $('#to_next_chapter').click(function(event) {
                        /* Act on the event */
                       // $yid=<?php echo $ye; ?>+1;
                        window.location.href="<?php echo url('comics_look',$chapters['next']); ?>"+"?book="+<?php echo $bookinfo['id']; ?>;
                    });
                    $('#comic_name').click(function(event) {
                                        /* Act on the event */
                        window.location.href="<?php echo url('comics_detail',array('book'=>$bookinfo['id'])); ?>";
                    });  
                </script> 
                   
</div>
<!--底部 end-->

<!--遮罩-->
<div id="mask" style="display:none"></div>
<!--遮罩 end-->

<!--各种加载
<a href="javascript:;" class="load">各种加载加载</a>
-->

    <!--分享弹出框-->
   <!-- <div id="sharebox" class="sharebox">
        <span class="close" title="关闭"></span>
        <div class="wb">
            <span class="fl">分享到微博：</span>
                <div class="fl">-->
                <!-- Baidu Button BEGIN -->
               <!-- <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                    <a class="bds_tsina"></a>
                    <a class="bds_tqq"></a>
                    <a class="bds_renren"></a>
                    <a class="bds_kaixin001"></a>
                    <a class="bds_qzone"></a>
                    <a class="bds_douban"></a>
                    <a class="bds_baidu"></a>
                    <span class="bds_more u">更多</span>
                </div>
                <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=587815"></script>
                <script type="text/javascript" id="bdshell_js"></script>
            </div>
    
        </div>
        <p>复制链接：把复制的链接发给你的QQ/MSN好友吧！</p>
        <input name="" id="comic_show_url" value="" type="text" class="url" onclick="this.select();">
        <span class="copy" title="点击复制" onclick="copy_url('comic_show_url')"></span>
        <div class="bbg">
        
        </div>
    </div>-->





<script type="text/javascript">

</script>
</body>
</html>