<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:42:"./template/home/default\article\index.html";i:1487044120;s:42:"./template/home/default\Public\header.html";i:1487321446;s:42:"./template/home/default\Public\footer.html";i:1487141259;}*/ ?>
﻿<!DOCTYPE html>
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
<div id="classify" class="tg_classify">
    <div class="tg_tab_box on">
        <div class="tg_classify_wrap clearfix">
            <dl class="tg_classify_all tg_classify_flat dl_left">
                <dt class="">
                <i class="icon_order"></i>
               		 特效分类
                </dt>
            </dl>
            <dl class="tg_classify_all tg_classify_flat clearfix dl_right">
                <dd <?php if($aid == 0): ?> class="on" <?php endif; ?>>
                	<a href="<?php echo \think\Config::get('SITE_URL'); ?>article/<?php echo $id; ?>-0-<?php echo $type; ?>-<?php echo $hot; ?>.html"><span>不限</span></a>
                </dd>
                <?php if(is_array($article_cate) || $article_cate instanceof \think\Collection): $i = 0; $__LIST__ = $article_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
       				<dd <?php if(($cate['id'] == $aid) or ($cate['id'] == $pid)): ?>class="on"<?php endif; ?> style="width:100px;"><a href="<?php echo $cate['url']; ?>"><span><?php echo $cate['cate_name']; ?></span></a></dd>
       			<?php endforeach; endif; else: echo "" ;endif; ?>
             
             </dl>
        </div>
        <?php if(!(empty($cate_item_list) || ($cate_item_list instanceof \think\Collection && $cate_item_list->isEmpty()))): ?>
		<div class="tg_classify_wrap clearfix">
            <dl class="tg_classify_all tg_classify_flat dl_left">
                <dt class="">
                <i class="icon_order"></i>
               		分类子级
                </dt>
            </dl>
            <dl class="tg_classify_all tg_classify_flat clearfix dl_right">
                <dd <?php if($pid == 0): ?> class="on" <?php endif; ?>>
                	<a href="<?php echo \think\Config::get('SITE_URL'); ?>article/<?php echo $id; ?>-<?php echo $pid; ?>-<?php echo $type; ?>-<?php echo $hot; ?>.html"><span>不限</span></a>
                </dd>
                <?php if(is_array($cate_item_list) || $cate_item_list instanceof \think\Collection): $i = 0; $__LIST__ = $cate_item_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
       				<dd <?php if($item['id'] == $aid): ?>class="on"<?php endif; ?>  style="width:100px;"><a href="<?php echo $item['url']; ?>"><span><?php echo $item['cate_name']; ?></span></a></dd>
       			<?php endforeach; endif; else: echo "" ;endif; ?>
             
             </dl>
        </div>
		<?php endif; ?>
  		<div class="tg_classify_wrap clearfix">
            <dl class="tg_classify_all tg_classify_flat dl_left">
                <dt class="">
                <i class="icon_order"></i>
               		热门推荐
                </dt>
            </dl>
            <dl class="tg_classify_all tg_classify_flat clearfix dl_right">
                <dd <?php if($hot == 0): ?> class="on" <?php endif; ?>>
                	<a href="<?php echo \think\Config::get('SITE_URL'); ?>article/<?php echo $id; ?>-<?php echo $aid; ?>-<?php echo $type; ?>-0.html"><span>不限</span></a>
                </dd>
                <?php if(is_array($hot_list) || $hot_list instanceof \think\Collection): $i = 0; $__LIST__ = $hot_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
       				<dd <?php if($item['id'] == $hot): ?>class="on"<?php endif; ?>  style="width:100px;"><a href="<?php echo \think\Config::get('SITE_URL'); ?>/article/<?php echo $id; ?>-<?php echo $aid; ?>-<?php echo $type; ?>-<?php echo $item['id']; ?>.html"><span><?php echo $item['name']; ?></span></a></dd>
       			<?php endforeach; endif; else: echo "" ;endif; ?>
             
             </dl>
        </div>
    </div>
</div>
<div id="container"> 
    <div id="sort" class="tg_sort clearfix">
    		<?php if(is_array($sort_list) || $sort_list instanceof \think\Collection): $k = 0; $__LIST__ = $sort_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sort): $mod = ($k % 2 );++$k;?>
	    		<div class="tg_classify_wrap">
	                <dl class="<?php echo $sort['classname']; ?>">
	                    <dt <?php if(($sort['id'] == $type) or ($k == 1)): ?>class="on"<?php endif; ?>>
	                    <a href="<?php echo \think\Config::get('SITE_URL'); ?>/article/<?php echo $id; ?>-<?php echo $aid; ?>-<?php echo $sort['id']; ?>-<?php echo $hot; ?>.html">
	                        <i class="icon_order"></i>
	                        <span><?php echo $sort['name']; ?></span>
	                        <b class="icon_order"></b>
	                    </a>
	                    </dt>
	                </dl>
	            </div>
    		<?php endforeach; endif; else: echo "" ;endif; ?>
       		
            <div id="order-page" class="order-page">
                <span class="find_results_num">共<span class="red"> <?php echo $article_cunt; ?> </span>个jquery特效</span>
              
            </div>
       </div>
       <div class="list">
       	<?php if(empty($article_list) || ($article_list instanceof \think\Collection && $article_list->isEmpty())): ?>
        	<div class="no_result">
                <p><img width="96" height="120" src="__IMG__/no_result.png" alt="暂无相关网页特效"></p>
                <p class="words"><span class="line">暂无相关网页特效</span></p>
            </div>
        <?php else: ?>
        	<div class="list_main clearfix">
			    <?php if(is_array($article_list) || $article_list instanceof \think\Collection): $k = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($k % 2 );++$k;?>
				  
				      <div class="per" <?php if(($k == 4) or ($k == 8) or ($k == 12) or ($k == 16) or ($k == 20)): ?>style="margin-right: 0"<?php endif; ?>>
		                        <a target="_blank" title="<?php echo $article['title']; ?>" href="<?php echo $article['url']; ?>" class="img_link"> 
		                            <img src="<?php echo $article['image']; ?>" original="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" class="lazy" style="display: inline;">
		                        </a>
		                        <div class="foot">
		                            <p class="title"><a target="_blank" href="<?php echo $article['url']; ?>"><?php echo $article['title']; ?></a> </p> 
		                            <div class="statics">
		                                <a class="download citecommon">下载 <em><?php echo $article['down_count']; ?>次</em></a>
		                                
		                                <a class="comment citecommon">评论 <em><?php echo $article['comment_count']; ?>条</em></a>
		                                <a class="scores citecommon">浏览 <em><?php echo $article['browse_count']; ?>次</em></a>
		                            </div>
		                        </div> 
		               </div>
			      <?php endforeach; endif; else: echo "" ;endif; ?>
        	</div>
        <?php endif; ?>
        <div class="pager" id="pages"></div>
        <input type="hidden" id="pagenum" value="<?php echo $pagenum; ?>"/>
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
<script>var num=$('#pagenum').val();getfenye(num,true);</script>