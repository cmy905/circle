<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"./template/home/default\setting\comments.html";i:1487294958;s:42:"./template/home/default\Public\header.html";i:1487293929;s:40:"./template/home/default\Public\left.html";i:1487056634;s:42:"./template/home/default\Public\footer.html";i:1487141259;}*/ ?>
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
         <form action="<?php echo url('search/index'); ?>" method="GET" id="form_search" onsubmit="return searchSub()">
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
<link href="__CSS__/member.css" rel="stylesheet" type="text/css">
<div class="container clearfix">
     <div class="member_right">
    <div class="member_per">
        <div class="panel clearfix">
            <div class="panel-info clearfix">
                <a href="javascript:void(0)"> <img class="round-image" width="50" height="50" <?php if($user_info['avatar'] == ''): ?> src="__IMG__/default.gif" <?php else: ?>src="<?php echo $user_info['avatar']; ?>"<?php endif; ?>alt="头像"></a>
                <div class="name-job">
                    <h4 class="myname"> <a href="javascript:void(0)"><?php echo $user_info['username']; ?></a></h4>
                    <p class="job-title"><?php if($user_info['job'] == ''): ?>工作保密<?php else: ?><?php echo $user_info['job']; endif; ?> </p>
                </div>
            </div>
            
            <div class="sign-wrap">
            	
                <textarea id="signed_textarea" class="signed_textarea" disabled="" autocomplete="off">个性签名:<?php if($user_info['signature'] == ''): ?>该童鞋很懒，什么也没有留下！<?php else: ?><?php echo $user_info['signature']; endif; ?></textarea>
                <em id="signed_edit" class="signed_edit"></em>
            </div>
            <p id="signed_error" class="signed_error"></p>
            <div class="rank-points">
                <ul class="clearfix">
                    <li class="mp-item">
                        <a class="mp-atag" href="javascript:">
                            <span class="mp-title">积分</span>
                            <span class="mp-num"><?php echo $user_info['integral']; ?></span>
                        </a>
                    </li>
                    <li class="mp-item">
                        <a class="mp-atag" href="javascript:">
                            <span class="mp-title">金币</span>
                            <span class="mp-num"><?php echo $user_info['gold']; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="member_per">
        <ul class="nav panel">
            <li>
                <a href="<?php echo url('/setting/info'); ?>" <?php if($action == 'info'): ?>class="active"<?php endif; ?>"><i class="icon-nav icon-tick"></i>我的主页</a>
            </li>
            <li style="border-bottom: none">
                <a href="<?php echo url('/setting'); ?>" <?php if(($controller == 'Setting') and (($action == 'index') or ($action == 'verify') or ($action == 'avatar') or($action == 'change_pwd'))): ?>class="active"<?php endif; ?> ><i class="icon-nav icon-note"></i>我的设置</a>
            </li>
             <li>
                <a href="<?php echo url('/setting/downloads'); ?>" <?php if($action == 'downloads'): ?>class="active"<?php endif; ?>><i class="icon-nav icon-user"></i>我的下载</a>
            </li>
           
            <li>
                <a href="<?php echo url('/setting/comments'); ?>" <?php if($action == 'comments'): ?>class="active"<?php endif; ?>><i class="icon-nav icon-plan"></i>我的评论</a>
            </li>
             <li>
                <a href="<?php echo url('/setting/collect'); ?>" <?php if($action == 'collect'): ?>class="active"<?php endif; ?>><i class="icon-nav icon-plan"></i>我的收藏</a>
            </li>
			<li>
                <a href="<?php echo url('/setting/points'); ?>" <?php if($action == 'points'): ?>class="active"<?php endif; ?>><i class="icon-nav icon-resp"></i>收入支出</a>
            </li>
            
     		<li>
                <a href="<?php echo url('/message'); ?>" <?php if($controller == 'Message'): ?>class="active"<?php endif; ?>><i class="icon-nav icon-resp"></i>我的消息</a>
            </li>
             
        </ul>
    </div>
    <div class="member_per">
        <ul class="space-data panel">
            <li>
                <span class="icon-clock icon" title="下载"></span>
                下载：
                <a href="javascript:">9次</a>
            </li>
            <li>
                <span class="icon-tick icon" title="收藏"></span>
                收藏：
                <a href="javascript:">0条</a>
            </li>
            <li>
                <span class="icon-note icon" title="签到"></span>
                签到：
                <a class="countNote" href="javascript:">9次</a>
            </li>

        </ul>
    </div>
</div>
    <div class="member_main">
        <div class="perInfo">
            <div class="titleInfoBorder">
                <span>我的评论</span>
            </div>
        </div>
        <?php if(empty($comments) || ($comments instanceof \think\Collection && $comments->isEmpty())): ?>
            暂无评论记录
        <?php else: if(is_array($comments) || $comments instanceof \think\Collection): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="infoPerBlock infoCommentBlock ">
                <div class="leftPicBlock">
                    <a href="javascript:void(0)">
                        <img src="<?php echo $user_info['avatar']; ?>" title="头像" alt="头像">
                    </a>
                </div>
                <div class="centerBlock">
                            <span class="title">
                                我评论
                            <a class="blue" target="_blank" href="javascript:"><?php echo $item['replyname']; ?></a>说：
                        </span>
                    <div class="infoNews"><?php echo $item['content']; ?></div>
                    <div class="objectBlock">
                                <span class="pic">
                                    <a target="_blank" href="<?php echo $item['url']; ?>">
                                        <img width="50px" height="50px" style="margin-top:0px" alt="<?php echo $item['title']; ?>" src="<?php echo $item['image']; ?>">
                                    </a>
                                </span>
                                <span class="objTitle">
                                    <a target="_blank" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                                </span>
                        <p class="tags"></p>
                    </div>
                </div>
                <div class="rightBlock">
                    <span class="time"><?php echo $item['create_time']; ?></span>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>

          <input type="hidden" id="pagenum" value="<?php echo $pagenum; ?>">
         <div class="pager" id="pages" ></div>
     
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