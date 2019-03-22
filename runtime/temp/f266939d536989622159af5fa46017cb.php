<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"./template/home/default\index\index.html";i:1486950640;s:42:"./template/home/default\Public\header.html";i:1487321446;s:42:"./template/home/default\Public\footer.html";i:1487141259;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" class=" ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php if($page_title == ''): ?><?php echo \think\Config::get('SEO_TITLE'); else: ?><?php echo $page_title; endif; ?>-<?php echo \think\Config::get('SITE_NAME'); ?></title>
<meta name="keywords" content="<?php if($page_keywords == ''): ?><?php echo \think\Config::get('SEO_KEYWORD'); else: ?><?php echo $page_keywords; endif; ?>-<?php echo \think\Config::get('SITE_NAME'); ?>" />
<meta name="description" content="<?php if($page_description == ''): ?><?php echo \think\Config::get('SEO_DESCRIPTION'); else: ?><?php echo $page_description; endif; ?>-<?php echo \think\Config::get('SITE_NAME'); ?>" />
<link rel="shortcut icon" href="__IMG__/sucaichina.ico" type="image/x-icon" /> 
<link rel="stylesheet" type="text/css" href="__CSS__/style.css">
<link rel="stylesheet" type="text/css" href="__CSS__/validform.css">

<script src="__JS__/jquery.js"></script>
<script src="__JS__/validform.js"></script>
<script src="__JS__/layer/layer.js"></script>
<script src="__JS__/laypage/laypage.js"></script>
</head> 
<body> 
   <div id="site_nav">
       <div class="sn_container clearfix">
           <ul class="tg_tools fr">
           
          
             <li class="no-hover">
                 <a href="<?php echo url('/account/amount'); ?>" class="head_pay_btn">充值</a>
             </li>
             
             <li class="box_color nav_home">
                 <span><a href="<?php echo url('/setting/info'); ?>">个人中心</a></span><b class="icon"></b>
                 <ul>
                     <li><a href="<?php echo url('/setting/info'); ?>"><span>我的主页</span></a></li>
                     <li><a href="<?php echo url('/setting'); ?>"><span>个人设置</span></a></li>
                     <li><a href="<?php echo url('/setting/downloads'); ?>"><span>下载记录</span></a></li>
                     <li><a href="<?php echo url('/setting/comments'); ?>"><span>我的评论</span></a></li>
                   
                     
                 </ul>
             </li>
            
             <li class="tg-line icon"></li>
             <li class="box_color">
                 <span>帮助中心</span><b class="icon"></b>
                 <ul>
                     <?php if(is_array($help) || $help instanceof \think\Collection): $i = 0; $__LIST__ = $help;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hp): $mod = ($i % 2 );++$i;?>
                     	<li><a href="<?php echo $hp['url']; ?>"><span><?php echo $hp['name']; ?></span></a></li>
                     <?php endforeach; endif; else: echo "" ;endif; ?>
                 
                    
                 </ul>
             </li>
         </ul>
         <ul class="tg_tools fl" id="login_area" style="display: block;">
             <li class="tg_tools_home no-hover"><i class="icon-more"></i><span><a href="http://www.93sucai.com/">93素材网首页</a></span></li>
				<?php if(\think\Session::get('uid') != ''): ?>
                 
                     <li class="no-hover haslogin"><span><a href="<?php echo url('/setting/'); ?>"><font class="sn_login username" id="head_username"><?php echo $user_info['username']; ?></font></a></span></li>
                     <li class="no-hover haslogin"><span><a href="<?php echo url('/user/logout'); ?>">退出</a></span></li>
                 <?php else: ?>
                     <li class="tg-line icon"></li>
                     <li class="no-hover nologin"><span><a href="<?php echo url('/reg'); ?>">注册</a></span></li>

                     <li class="box_color nav_home" id="nav_login">
                         <span><a href="<?php echo url('/login'); ?>" class="sn_login">登录</a></span><b class="icon"></b>

                     </li>
                 <?php endif; ?>
         </ul>
     </div>
 </div>
 <div id="header">
     <div class="tg_tools_home">
         <div class="bbs_enter">
             <a class="bbs-banner" href="#" target="_blank"><img src="__IMG__/banner.jpg" alt="扒模板"></a>
         </div>
         <div class="logo">
             <a class="logo-bd" href="http://www.93suicai.com/"><img src="__IMG__/logo.png" alt="93素材网logo"  style="width: 326px;margin-left: -28px;"></a>
         </div>
         <form action="<?php echo url('/search/index'); ?>" method="GET" id="form_search" onsubmit="return searchSub()">
             <div id="search">
                 <div class="search_area">
                     <input type="submit" value="搜 索" class="btn_search">
                     <div class="search_select">
                         <span class="icon-search"></span>
                     </div>
                     <input type="text" value="<?php if(1 == 1): ?>请输入搜索内容<?php else: ?>dsasa<?php endif; ?>" class="search_input" autocomplete="off" id="search_input" data-default="请输入搜索内容" onblur="checkInputBlur($(this))" onfocus="checkInputFocus($(this))">
                     <input type="hidden" name="keyword">
                 </div>
                 <div class="search_box hide" id="search_box"></div>
                 
             </div>
         </form>
     </div>
 </div>

 <div id="nav" class="nav">
    <div class="nav_main clearfix">
    	<!-- current -->
	     <?php if(is_array($nav) || $nav instanceof \think\Collection): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;if(empty($id) || ($id instanceof \think\Collection && $id->isEmpty())): ?>
                <a href="<?php echo $menu['nav_url']; ?>" class="menu"><?php echo $menu['nav_name']; ?></a>
            <?php else: ?>
                <a href="<?php echo $menu['nav_url']; ?>"<?php if($menu['id'] == $id): ?>class="menu current"<?php else: ?>class="menu"<?php endif; ?>><?php echo $menu['nav_name']; ?></a>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
      
    </div>
</div>
<div class="container">
    <div class="index_per index_first clearfix">
        <div class="sidebar_per sidebar_first">
            <dl>
                <dt>
                    <a href="/article/2-0-0-0.html" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
                    <strong>最新更新 <span class="name-en">/New</span></strong>
                </dt>
                <?php if(is_array($new) || $new instanceof \think\Collection): $i = 0;$__LIST__ = is_array($new) ? array_slice($new,1,7, true) : $new->slice(1,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <dd class="sidebar_articles">
                        <span><?php echo date("m-d",$item['create_time']); ?></span>
                        <a target="_blank" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                    </dd>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </dl>
        </div>
        <div class="index_left clearfix">
            <div class="banner" id="banner">
                <div class="tempWrap" style="overflow:hidden; position:relative; width:600px">
                    <ul id="index_banner" style="width: 7200px; left: -6000px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                        <li style="float: left; width: 600px;">
                            <a target="_blank" href="#">
                                <img alt="93素材网PHP评论系统" src="__IMG__/bannerdemo.jpg">
                            </a>
                        </li><li style="float: left; width: 600px;">
                        <a target="_blank" href="#">
                            <img alt="93素材网PHP评论系统" src="__IMG__/bannerdemo.jpg">
                        </a>
                    </li></ul></div>
                <div class="banner_page" id="banner_page"><a class="">1</a><a class="">2</a><a class="">3</a><a class="">4</a><a class="">5</a><a class="">6</a><a class="">7</a><a class="">8</a><a class="">9</a><a class="">10</a><a class="current">11</a><a class="">12</a></div>
                <a class="banner_page_btn banner_page_left" id="banner_page_left" style="display: inline;"></a>
                <a class="banner_page_btn banner_page_right" id="banner_page_right" style="display: inline;"></a>
            </div>
            <div class="merchant_cats">
                <div class="head"><h3>网站快速导航</h3></div>
                <div class="content" id="merchant_cats_menus">
                    <a href="/templates"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_fire"></span><span class="name">网站模板</span><i class="merchant_arrow_left"></i> </a>
                    <a href="/article/4-156-0-0.html"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_mobile"></span><span class="name">手机模板</span><i class="merchant_arrow_left"></i></a>
                    <a href="/js"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_js"></span><span class="name">网页特效</span><i class="merchant_arrow_left"></i></a>
                    <a href="/php"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_png"></span><span class="name">PHP</span><i class="merchant_arrow_left"></i></a>
                    <a href="javascript:void(0)"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_typeface"></span><span class="name">话题</span><i class="merchant_arrow_left"></i></a>
                    <a href="javascript:void(0)"><i class="merchant_arrow merchant_arrow_right"></i><span class="icon_merchant icon_merchant_code"></span><span class="name">笑话</span><i class="merchant_arrow_left"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="index_per clearfix">
        <div class="sidebar_per sidebar_second">
            <dl>
                <dt>
                    <a href="/article/4-0-0-0.html" class="more" target="_blank">更多&nbsp;<span class="more-sign">&gt;</span></a>
                    <strong>推荐模板 <span class="name-en">/Template</span></strong>
                </dt>
                <?php if(is_array($new_tmp) || $new_tmp instanceof \think\Collection): $i = 0;$__LIST__ = is_array($new_tmp) ? array_slice($new_tmp,1,14, true) : $new_tmp->slice(1,14, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <dd class="sidebar_articles">
                        <span><?php echo date("m-d",$item['create_time']); ?></span>
                        <a target="_blank" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                    </dd>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </dl>

        </div>
        <div class="index_recommend" id="index_recommend_0">
            <div class="head clearfix">
                <strong>网站模板</strong>

            </div>


            <div class="content clearfix">
                <div class="per current">
                    <ul class="ul_pics">
                        <?php if(is_array($templete) || $templete instanceof \think\Collection): $i = 0;$__LIST__ = is_array($templete) ? array_slice($templete,1,3, true) : $templete->slice(1,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tpl): $mod = ($i % 2 );++$i;?>
                            <li><a target="_blank" href="images//templates/733.html">
                                <a target="_blank" href="<?php echo $tpl['url']; ?>"><img src="<?php echo $tpl['image']; ?>"  alt="<?php echo $tpl['title']; ?>" class="lazy" style="display: inline;"><?php echo $tpl['title']; ?></a>
                                黑色技术微博客响应式模  </a>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <ul class="ul_words">
                        <?php if(is_array($templete) || $templete instanceof \think\Collection): $i = 0;$__LIST__ = is_array($templete) ? array_slice($templete,4,22, true) : $templete->slice(4,22, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tpl): $mod = ($i % 2 );++$i;?>
                            <li><a target="_blank" href="<?php echo $tpl['url']; ?>"><?php echo $tpl['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sidebar_per sidebar_second">
            <dl>
                <dt>
                    <a href="/article/2-0-0-0.html" class="more" target="_blank">更多&nbsp;<span class="more-sign">&gt;</span></a>
                    <strong>推荐特效 <span class="name-en">/jQuery</span></strong>
                </dt>
                <?php if(is_array($new_jq) || $new_jq instanceof \think\Collection): $i = 0;$__LIST__ = is_array($new_jq) ? array_slice($new_jq,1,14, true) : $new_jq->slice(1,14, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <dd class="sidebar_articles">
                        <span><?php echo date("m-d",$item['create_time']); ?></span>
                        <a target="_blank" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                    </dd>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </dl>
        </div>
        <div class="index_recommend" id="index_recommend_1">
            <div class="head clearfix">
                <strong>网页特效</strong>

            </div>
            <div class="content clearfix">
                <div class="per current">
                    <ul class="ul_pics">
                        <?php if(is_array($jq) || $jq instanceof \think\Collection): $i = 0;$__LIST__ = is_array($jq) ? array_slice($jq,1,3, true) : $jq->slice(1,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <li><a target="_blank" href="<?php echo $item['url']; ?>">
                                <a target="_blank" href="<?php echo $item['url']; ?>"><img src="<?php echo $item['image']; ?>"  alt="<?php echo $item['title']; ?>" class="lazy" style="display: inline;"><?php echo $item['title']; ?></a>
                                黑色技术微博客响应式模  </a>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <ul class="ul_words">
                        <?php if(is_array($jq) || $jq instanceof \think\Collection): $i = 0;$__LIST__ = is_array($jq) ? array_slice($jq,4,22, true) : $jq->slice(4,22, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <li><a target="_blank" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer" id="footer" data-url="/">
    <div class="footer_main clearfix">
       
        
        <div class="friendly">
            <div class="foot_menu">
                <?php if(is_array($help) || $help instanceof \think\Collection): $i = 0; $__LIST__ = $help;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hp): $mod = ($i % 2 );++$i;?>
               		<a href="<?php echo url('help/index',array('id'=>$hp['id'])); ?>"><?php echo $hp['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
               
                
                <a href="sitemap.htm" target="_blank">网站地图</a>
                <span class="address">dsadadsa</span>
            </div>
        </div>
    </div>
</div>
<!-- 登陆弹出框开始 -->
<div id="windown_box" class="modal fade window_box">
    <div class="pop_title">
        <div class="pop_name">登录</div>
        <i class="pop_close" onclick="$('#windown_box').modal('hide');"></i>
    </div>
     <form id="login-form" onsubmit="return false">
    <div class="pop_content">
        <div class="form_item">
            <input type="text" placeholder="用户名/邮箱" name="username"  class="form_input" datatype="*4-12" nullmsg="请输入用户名或者邮箱"/>
        </div>
        <div class="form_item">
             <input type="password"  placeholder="密码" name="password"  class="form_input" datatype="*6-20" nullmsg="请输入密码"/>
        </div>
        <div class="captchaBox">
            <div class="two_weeks">
                <input type="checkbox" class="ckeckBox" id="rememberme" value="0">
                <label for="rememberme">记住密码</label>
                <input type="hidden" name="rememberme" id="rember" value="0">
                <a href="<?php echo url('/reg'); ?>" target="_blank" class="loginbox_reg">免费注册</a>
            </div>
        </div>
        <input type="submit" tabindex="7" value="登  录" class="btn_reg btn" id="btn-login">
        <a class="a_underline" href="<?php echo url('/forget'); ?>">忘记密码？</a>
       
    </div>
    </form>
</div>

<!-- 登陆弹出框结束 -->

<script src="__JS__/jquery.SuperSlide.2.1.1.js"></script>
<script src="__JS__/common.js"></script>
<script>
    $(function () {
        $("#rememberme").click(function(){
            if($(this).is(':checked')) {
                $("#rember").val(1);
            }else{
                $("#rember").val(0);
            }
        });

    });
</script>
<!-- <script type="text/javascript" src="__JS__/jzclick.js"></script> -->
</body>
</html>