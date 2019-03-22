<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"./template/home/default\article\details.html";i:1487307749;s:42:"./template/home/default\Public\header.html";i:1487293929;s:42:"./template/home/default\Public\footer.html";i:1487141259;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/public/static/dist/css/txt.wav.css">
<div class="breadcrumbs">
    <span>&gt;</span><a href="javascript:void(0)"><?php echo $article['cate_name']; ?></a>
    <span>&gt;</span><a href="javascript:void(0)"><?php echo $article['cate_sub_name']; ?></a>
    <span>&gt;</span><?php echo $article['title']; ?>    
</div>
<div class="container clearfix">
    <div class="sidebar">
    <div class="sidebar_per sidebar_first">
        <dl>
           
            <dt>
	            <a href="/js" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
	            <strong>最新特效 <span class="name-en">/New</span></strong>
            </dt>
            <?php if(is_array($new_jq) || $new_jq instanceof \think\Collection): $i = 0;$__LIST__ = is_array($new_jq) ? array_slice($new_jq,1,15, true) : $new_jq->slice(1,15, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                	<dd class="sidebar_articles">
                        <span><?php echo date("m-d",$item['create_time']); ?></span>
                        <a target="_blank" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                    </dd>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            
        </dl>
    </div>
    <div class="sidebar_per">


</div>
    <div class="sidebar_per">
        <dl>
            <dt>
	            <a href="/templates" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
	            <strong>最新模板<span class="name-en">/New</span></strong>
            </dt>
             <?php if(is_array($new_tmp) || $new_tmp instanceof \think\Collection): $i = 0;$__LIST__ = is_array($new_tmp) ? array_slice($new_tmp,1,15, true) : $new_tmp->slice(1,15, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                	<dd class="sidebar_articles">
                        <span><?php echo date("m-d",$item['create_time']); ?></span>
                        <a target="_blank" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                    </dd>
            <?php endforeach; endif; else: echo "" ;endif; ?>
       </dl>
    </div>
    
    <div class="sidebar_per">
        <dl>
            <dt>
            <a href="/article/2-0-0-0.html" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
            <strong>标签云 <span class="name-en">/Tag</span></strong>
            </dt>
            <dd class="sidebar_tags">
            <a target="_blank" href="#">滚动</a>   
            </dd>
        </dl>
    </div>
    
    </div>
    <div class="detail">
        <div class="head">
    <div class="head_inner">
        <img class="round-image" width="50" height="50" alt="头像" src="<?php echo get_user_avatar($article['uid']); ?>">
        <h1  class="txtwav flip"><?php echo $article['title']; ?> </h1>
        <p class="info">
           
            <?php echo get_user_name($article['uid']); ?><span class="addtime"><?php echo date("Y-m-d H:i:s",$article['create_time']); ?></span><span>浏览(<span><?php echo $article['browse_count']; ?></span>)</span>
            
            <a class="poster_likes" href="javascript:void(0)" title="收藏" rel="<?php echo $article['id']; ?>">
                <i class="like_status lm_like"></i><em>收藏(<span><?php echo $article['collect_count']; ?></span>)</em>
            </a>

        </p>
    </div>
</div>
        <div class="content">
        	<!-- 文章描述 -->
            <p class="short_tit"><?php echo $article['brief']; ?></p>
 
            <p><?php echo $article['content']; ?></p>  
             <p>93素材网QQ群：549156843，在线充值，或联系QQ 980218641 <a href="<?php echo url('account/amount'); ?>"><span style="color: #ff0000;"><b>充值</b></span></a></p>
            <div class="buttons">

                    <span class="btnbox">
                        <a class="bigbtn demo" href="<?php echo \think\Config::get('SITE_URL'); ?>/demo/<?php echo $article['id']; ?>" target="_blank">查看演示</a>
                        <span class="dlnum">下载次数：
                            <strong class="orange"><?php echo $article['down_count']; ?></strong> 次
                            
                            
                        </span>
                    </span>
                    <span class="btnbox">
                    	
                    	<a class="bigbtn download notlogin" onclick="downloadZipBox(0)">下载资源</a>
                    	
                        <?php if($article['type'] == 1): ?>
	                        <span class="dlcount">下载积分：
	                            <strong class="orange"><?php echo $article['integral_count']; ?></strong>积分  
	                        </span>
                        <?php endif; if($article['type'] == 2): ?>
	                        <span class="dlcount">下载金币：
	                            <strong class="orange"><?php echo $article['gold_count']; ?></strong>金币
	                        </span>
                        <?php endif; ?>
                    </span>
                </div>
                               
        </div>
        <link rel="stylesheet" href="__CSS__/font-awesome.min.css" type="text/css"> 
	<div class="detail_foot clearfix">
	<div class="tagged_with">
            <span class="gray">标签：</span>
            <?php if(is_array($article['tag_list']) || $article['tag_list'] instanceof \think\Collection): $i = 0; $__LIST__ = $article['tag_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tags): $mod = ($i % 2 );++$i;?>
             <a target="_blank" class="button3 white" href="javascript:void(0)"><?php echo $tags; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
     <div class="declare">
	     <span>声明：</span>本文为原创文章，如需转载，请注明来源<a href="<?php echo \think\Config::get('SITE_URL'); ?>">fxzhihui.com</a>
	     	并保留原文链接：
	     <a href="<?php echo $article['url']; ?>"><?php echo $article['url']; ?></a>
     </div>
     
    <div class="comments">
        <div class="title">
            评论<span class="num_area">（<em class="comments_num" id="comments_num"><?php echo $count; ?></em>）</span>
        </div>  

        <div class="comment_send clearfix">
            <div class="comment_avatar">
                <span class="userPic">
                	<?php if(empty($user_info) || ($user_info instanceof \think\Collection && $user_info->isEmpty())): ?>
                		<img class="userPic avatar user_my_avatar" width="60" height="60" src="__IMG__/avatar.jpg" alt="头像">
                	<?php else: ?>
                		<img class="userPic avatar user_my_avatar" width="60" height="60" src="<?php echo get_user_avatar($user_info['id']); ?>" alt="头像">

                	<?php endif; ?>
                    
                </span>

                 <font class="username"><?php if($user_info): ?><?php echo $user_info['username']; endif; ?></font>
               
               
            </div>
            <div class="comment_sendPart" id="reply_0">
                <textarea id="textareaComment" class="textarea_comment" name="content" autocomplete="off" placeholder="亲，说点什么呢"></textarea>
                <div class="btn_p clearfix">
                    <span class="comment_tip" id="comment_tip_0" data-top="11" data-foot="36"></span>
                    <button class="btn_subGrey btn" type="button" onclick="subcomment('<?php echo $article['id']; ?>',0, 0)">提 交</button>
                    <span class="emotion" tabindex="1" data-id="0"></span>
                    <div id="comment_content" style="display:none"></div>
                </div>
            </div>
        </div>
        <div class="comment_wrap" id="comment_wrap">
            <ul class="comment_listBox">
               <?php if(is_array($comments) || $comments instanceof \think\Collection): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
           
            	  <li class="comment_list clearfix" id="comment_<?php echo $list['id']; ?>">
                    <div class="comment_avatar">
                        <span class="userPic">
                            <?php if(empty($user_info) || ($user_info instanceof \think\Collection && $user_info->isEmpty())): ?>
                               <img width="36" height="36" src="__IMG__/avatar.jpg" alt="头像">
                            <?php else: ?>

                                <img width="36" height="36" <?php if($user_info['avatar'] == ''): ?>src="__IMG__/avatar.jpg"<?php else: ?>src="<?php echo $user_info['avatar']; ?>"<?php endif; ?>  alt="头像">
                            <?php endif; ?>
                        </span>
                        <span class="grey"><?php echo $list['louid']; ?></span>
                    </div>
                    <div class="comment_conBox">
                        <div class="comment_avatar_time">
                            <div class="time"><?php echo $list['create_time']; ?></div>
                            <?php echo $list['username']; ?>                      
                        </div>
                        <div class="comment_conWrap clearfix">

                            <?php if(!(empty($user_info) || ($user_info instanceof \think\Collection && $user_info->isEmpty()))): if($user_info['id'] != $list['uid']): ?>
                                    <div class="comment_action"><a class="reply" onclick="reply_btn('<?php echo $list['id']; ?>')">回复</a> </div>
                                <?php endif; endif; ?>
                            <div class="comment_con"><?php echo $list['content']; ?></div>
                        </div>
                        <div id="reply_<?php echo $list['id']; ?>" class="reply_area">
                            <textarea class="textarea_comment" name="content" autocomplete="off"></textarea>
                            <div class="btn_p clearfix">
                                <span class="comment_tip" id="comment_tip_<?php echo $list['id']; ?>" data-top="4" data-foot="29"></span>
                                <button class="btn_subGrey btn" onclick="subcomment('<?php echo $article['id']; ?>','<?php echo $list['id']; ?>',0)" type="button">提交</button>
                                <span class="emotion" tabindex="1" data-id="<?php echo $list['id']; ?>"></span>
                            </div>
                        </div>
                        <div class="blockquote_wrap">
	                        <?php if(is_array($list['item_list']) || $list['item_list'] instanceof \think\Collection): $i = 0; $__LIST__ = $list['item_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
	                          <blockquote class="comment_blockquote">
	                                  <div class="comment_floor"><?php echo $item['louid']; ?></div>
	                                  <div class="comment_conWrap clearfix">
	                                      <div class="comment_con">
	                                          <a class="blue" target="_blank" href="javascript:void(0)"><?php echo $item['username']; ?></a><?php if($item['replyid'] > 0): ?> &nbsp;回复&nbsp; <?php echo $item['replyname']; endif; ?>：
	                                          <p><?php echo $item['content']; ?></p>

	                                      </div>
                                          <?php if(!(empty($user_info) || ($user_info instanceof \think\Collection && $user_info->isEmpty()))): if($user_info['id'] != $item['uid']): ?>
                                                  <div class="comment_action_sub">
                                                      <a class="reply" onclick="reply_btn('<?php echo $item['id']; ?>')">回复</a>
                                                  </div>
                                              <?php endif; endif; ?>
	                                  </div>
	                                  <div id="reply_<?php echo $item['id']; ?>" class="reply_area">
	                                      <textarea class="textarea_comment" autocomplete="off" name="content"></textarea>
	                                      <div class="btn_p clearfix">
	                                          <span id="comment_tip_<?php echo $item['id']; ?>" class="comment_tip" data-foot="29" data-top="4"></span>
	                                          <button class="btn_subGrey btn" type="button" onclick="subcomment('<?php echo $article['id']; ?>','<?php echo $item['id']; ?>','<?php echo $item['pid']; ?>','<?php echo $item['uid']; ?>','<?php echo $item['username']; ?>')">提交</button>
	                                          <span class="emotion" data-id="<?php echo $item['id']; ?>" tabindex="<?php echo $item['pid']; ?>"></span>
	                                      </div>
	                                  </div>
	                              </blockquote>
                              <?php endforeach; endif; else: echo "" ;endif; ?>
                         </div>
                    </div>
                    </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            <div class="pager" id="pages"></div>
            <input type="hidden" id="pagenum" value="<?php echo $pagenum; ?>"/>
    </div>
</div>
<div class="smileBoxOuter" id="smileBoxOuter" tabindex="2" is-hover="1" data-id="0">
    <ul class="smileBox" style="display: block;">
        <li><a href="javascript:void(0)" class="smile1" title="糗大了"></a></li><li><a href="javascript:void(0)" class="smile2" title="示爱"></a></li><li><a href="javascript:void(0)" class="smile3" title="晕"></a></li><li><a href="javascript:void(0)" class="smile4" title="酷"></a></li><li><a href="javascript:void(0)" class="smile5" title="流泪"></a></li><li><a href="javascript:void(0)" class="smile6" title="饿了"></a></li><li><a href="javascript:void(0)" class="smile7" title="闭嘴"></a></li><li><a href="javascript:void(0)" class="smile8" title="做鬼脸"></a></li><li><a href="javascript:void(0)" class="smile9" title="馋"></a></li><li><a href="javascript:void(0)" class="smile10" title="坏笑"></a></li><li><a href="javascript:void(0)" class="smile11" title="抓狂"></a></li><li><a href="javascript:void(0)" class="smile12" title="呵呵"></a></li><li><a href="javascript:void(0)" class="smile13" title="淡定"></a></li><li><a href="javascript:void(0)" class="smile14" title="冷汗"></a></li><li><a href="javascript:void(0)" class="smile15" title="色"></a></li><li><a href="javascript:void(0)" class="smile16" title="惊讶"></a></li><li><a href="javascript:void(0)" class="smile17" title="希望"></a></li><li><a href="javascript:void(0)" class="smile18" title="伤心"></a></li><li><a href="javascript:void(0)" class="smile19" title="微笑"></a></li><li><a href="javascript:void(0)" class="smile20" title="惊吓"></a></li><li><a href="javascript:void(0)" class="smile21" title="哈哈"></a></li><li><a href="javascript:void(0)" class="smile22" title="吃饭"></a></li><li><a href="javascript:void(0)" class="smile23" title="观察"></a></li><li><a href="javascript:void(0)" class="smile24" title="高兴"></a></li><li><a href="javascript:void(0)" class="smile25" title="皱眉"></a></li><li><a href="javascript:void(0)" class="smile26" title="大囧"></a></li><li><a href="javascript:void(0)" class="smile27" title="邪恶"></a></li><li><a href="javascript:void(0)" class="smile28" title="锁眉"></a></li><li><a href="javascript:void(0)" class="smile29" title="惊喜"></a></li><li><a href="javascript:void(0)" class="smile30" title="小怒"></a></li><li><a href="javascript:void(0)" class="smile31" title="无语"></a></li><li><a href="javascript:void(0)" class="smile32" title="傻笑"></a></li><li><a href="javascript:void(0)" class="smile33" title="黑线"></a></li><li><a href="javascript:void(0)" class="smile34" title="喜极而泣"></a></li><li><a href="javascript:void(0)" class="smile35" title="口水"></a></li><li><a href="javascript:void(0)" class="smile36" title="不说话"></a></li><li><a href="javascript:void(0)" class="smile37" title="抽烟"></a></li><li><a href="javascript:void(0)" class="smile38" title="汗"></a></li><li><a href="javascript:void(0)" class="smile39" title="尴尬"></a></li><li><a href="javascript:void(0)" class="smile40" title="小眼睛"></a></li><li><a href="javascript:void(0)" class="smile41" title="龇牙"></a></li><li><a href="javascript:void(0)" class="smile42" title="亲亲"></a></li><li><a href="javascript:void(0)" class="smile43" title="哭泣"></a></li><li><a href="javascript:void(0)" class="smile44" title="大吃一惊"></a></li>    </ul>
    <ul class="smileBox" style="display: none;">
        <li><a href="javascript:void(0)" class="smile46" title="不高兴"></a></li><li><a href="javascript:void(0)" class="smile47" title="得意"></a></li><li><a href="javascript:void(0)" class="smile48" title="阴脸"></a></li><li><a href="javascript:void(0)" class="smile49" title="装大款"></a></li><li><a href="javascript:void(0)" class="smile50" title="吐舌"></a></li><li><a href="javascript:void(0)" class="smile51" title="暗地观察"></a></li><li><a href="javascript:void(0)" class="smile52" title="吐血"></a></li><li><a href="javascript:void(0)" class="smile53" title="脸红"></a></li><li><a href="javascript:void(0)" class="smile54" title="肿包"></a></li><li><a href="javascript:void(0)" class="smile55" title="抠鼻"></a></li><li><a href="javascript:void(0)" class="smile56" title="赞一个"></a></li><li><a href="javascript:void(0)" class="smile57" title="中指"></a></li><li><a href="javascript:void(0)" class="smile58" title="期待"></a></li><li><a href="javascript:void(0)" class="smile59" title="倒地"></a></li><li><a href="javascript:void(0)" class="smile60" title="火冒三丈"></a></li><li><a href="javascript:void(0)" class="smile61" title="吐"></a></li><li><a href="javascript:void(0)" class="smile62" title="喷水"></a></li><li><a href="javascript:void(0)" class="smile63" title="喷血"></a></li><li><a href="javascript:void(0)" class="smile64" title="蜡烛"></a></li><li><a href="javascript:void(0)" class="smile65" title="想一想"></a></li><li><a href="javascript:void(0)" class="smile66" title="认真听讲"></a></li><li><a href="javascript:void(0)" class="smile67" title="不好意思"></a></li><li><a href="javascript:void(0)" class="smile68" title="欢呼"></a></li><li><a href="javascript:void(0)" class="smile69" title="便便"></a></li><li><a href="javascript:void(0)" class="smile70" title="鼓掌"></a></li><li><a href="javascript:void(0)" class="smile71" title="深思"></a></li><li><a href="javascript:void(0)" class="smile72" title="害羞"></a></li><li><a href="javascript:void(0)" class="smile73" title="苦恼"></a></li><li><a href="javascript:void(0)" class="smile74" title="长草"></a></li><li><a href="javascript:void(0)" class="smile75" title="无所谓"></a></li><li><a href="javascript:void(0)" class="smile76" title="咽气"></a></li><li><a href="javascript:void(0)" class="smile77" title="投降"></a></li><li><a href="javascript:void(0)" class="smile78" title="没看见"></a></li><li><a href="javascript:void(0)" class="smile79" title="击掌"></a></li><li><a href="javascript:void(0)" class="smile80" title="献黄瓜"></a></li><li><a href="javascript:void(0)" class="smile81" title="献花"></a></li><li><a href="javascript:void(0)" class="smile82" title="撞墙"></a></li><li><a href="javascript:void(0)" class="smile83" title="中刀"></a></li><li><a href="javascript:void(0)" class="smile84" title="中枪"></a></li>    </ul>
    <div class="smilePage">
        <a href="javascript:void(0)" class="current">1</a>
        <a href="javascript:void(0)" class="">2</a>
    </div>
</div>  
<div id="download_box" class="modal fade window_box" aria-hidden="true" style="display: none;">
    <div class="pop_title">
        <div class="pop_name"><?php echo $article['title']; ?> </div>
        <i class="pop_close" onclick="$(&#39;#download_box&#39;).modal(&#39;hide&#39;)"></i>
    </div>
    <div class="pop_content" style="padding:0 70px 0 70px">
        <?php if(!(empty($user_info) || ($user_info instanceof \think\Collection && $user_info->isEmpty()))): if($article['type'] == 1): ?>
	    	<div class="download_info">
	            <i class="fa fa-btc"></i> 
	            	我的积分余额：
	            <span class="download_mymoney" id="download_mymoney"><?php echo $user_info['integral']; ?></span>
	            <i class="fa fa-download"></i> 已下载次数：
	            <span class="download_times"><?php echo $article['down_count']; ?></span>   
	        </div>
	        <div class="download_btns clearfix">
	            <span class="download_money">所需积分：<span class="en"><?php echo $article['integral_count']; ?></span></span>
	            <a href="javascript:void(0)" onclick="downloadZip('<?php echo $article['id']; ?>',1,'<?php echo $article['type']; ?>')" class="download_btn"><i class="fa fa-download"></i> 开始下载</a>  
	        </div>	
    		<?php endif; if($article['type'] == 2): ?>
	    	<div class="download_info">
	            <i class="fa fa-btc"></i> 
	            	我的金币余额：
	            <span class="download_mymoney" id="download_mymoney"><?php echo $user_info['gold']; ?></span>
	            <i class="fa fa-download"></i> 已下载次数：
	            <span class="download_times"><?php echo $article['down_count']; ?></span>   
	        </div>
	        <div class="download_btns clearfix">
	            <span class="download_money">所需金币：<span class="en"><?php echo $article['gold_count']; ?></span></span>
	            <a href="javascript:void(0)" onclick="downloadZip('<?php echo $article['id']; ?>',1,'<?php echo $article['type']; ?>')" class="download_btn"><i class="fa fa-download"></i> 开始下载</a>  
	        </div>	
    		<?php endif; endif; ?>
    </div>
    <div id="points_not_enough" class="alert alert-danger top20 dou2" role="alert" style="display: none">
        <i class="fa fa-frown-o"></i> 
        <span id="points_enough">亲，积分不够、马上<b><a href="<?php echo url('account/amount'); ?>" target="_blank" style="color: #24B900; font-size:17px">在线充值</a>获取积分</b>
            或联系QQ 980218641人工充值
        </span>
    </div>
</div>
    </div>
</div>
</div>
<script src="/public/static/dist/js/txt.wav.min.js"></script>
<script>
$(function(){
	laypage({
	    cont: 'pages',
	    skin: '#AF0000',
	    skip: true, //是否开启跳页
	    pages: $('#pagenum').val(), //可以叫服务端把总页数放在某一个隐藏域，再获取。假设我们获取到的是18
	    curr: function(){ //通过url获取当前页，也可以同上（pages）方式获取
	        var page = location.search.match(/page=(\d+)/);
	        return page ? page[1] : 1;
	    }(), 
	    jump: function(e, first){ //触发分页后的回调
	        if(!first){ //一定要加此判断，否则初始时会无限刷新
	            location.href = '?page='+e.curr;
	        }
	    }
	});
})
</script>
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