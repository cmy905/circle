<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"C:\wamp64\www\public/../application/home\view\index\index.html";i:1491017119;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="__css__/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="__css__/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="__css__/style-1.css" rel='stylesheet' type='text/css' media="all" />
<script src="__js__/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts 
<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
-->
<!-- //fonts -->
</head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><h1><img src="__img__/logo.png" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="请搜索">
					<input type="submit" value=" ">
				</form>
			</div>
			<div class="header-top-right">
				<div class="file">
					<a href="/home/all/upload.html">投稿</a>
				</div>	
				<div class="signin">
					<a href="#small-dialog2" class="play-icon popup-with-zoom-anim">注册</a>
					<!-- pop-up-box -->
									<script type="text/javascript" src="__js__/modernizr.custom.min.js"></script>    
									<link href="__css__/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
									<script src="__js__/jquery.magnific-popup.js" type="text/javascript"></script>
									<!--//pop-up-box -->
									<!--<div id="small-dialog2" class="mfp-hide">
										<h3>注册</h3> 
										<div class="social-sits">
											<div class="facebook-button">
												<a href="#">用Facebook帐号登录</a>
											</div>
											<div class="chrome-button">
												<a href="#">用Google  帐号登录</a>
											</div>
											<div class="button-bottom">
												<p>已有帐号，立即登录 <a href="#small-dialog" class="play-icon popup-with-zoom-anim">登录</a></p>
											</div>
										</div>
										<div class="signup">
											<form id="signup" name="signup" method="post" action="<?php echo url('signup'); ?>">
												<input type="text" class="email" placeholder="手机号码" name="phone" maxlength="11" pattern="[1-9]{1}\d{9}" title="请输入有效的手机号" />
											</form>
											<div class="continue-button">
												<a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">下一步</a>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>	-->
									<div id="small-dialog2" class="mfp-hide">
										<h3>注册</h3> 
										<div class="social-sits">
											<div class="facebook-button">
												<a href="#">用Facebook帐号登录</a>
											</div>
											<div class="chrome-button">
												<a href="#">用Google  帐号登录</a>
											</div>
											<div class="button-bottom">
												<p>已有帐号，立即登录 <a href="#small-dialog" class="play-icon popup-with-zoom-anim">登录</a></p>
											</div>
										</div>
										<div class="signup">
											<form id="signup" name="signup" method="post" action="<?php echo url('signup'); ?>">
												<input type="text" class="email" placeholder="邮箱" name="email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="请输入有效的邮箱地址"/>
												<input type="password" placeholder="密码" name="password" required="required" pattern=".{6,}" title="密码至少六位" autocomplete="off" />
												<input type="text" class="email" placeholder="手机号码" name="phone" maxlength="11"  title="请输入有效的手机号" />
												<input type="submit"  value="注册"/>
											</form>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div id="small-dialog7" class="mfp-hide">
										<h3>注册</h3> 
										<div class="social-sits">
											<div class="facebook-button">
												<a href="#">用Facebook帐号登录</a>
											</div>
											<div class="chrome-button">
												<a href="#">用Google  帐号登录</a>
											</div>
											<div class="button-bottom">
												<p>已有帐号，立即登录 <a href="#small-dialog" class="play-icon popup-with-zoom-anim">登录</a></p>
											</div>
										</div>
										<div class="signup">
											<form action="upload.html">
												<input type="text" class="email" placeholder="邮箱" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="请输入有效的邮箱地址"/>
												<input type="password" placeholder="密码" required="required" pattern=".{6,}" title="密码至少六位" autocomplete="off" />
												<input type="submit"  value="登录"/>
											</form>
										</div>
										<div class="clearfix"> </div>
									</div>		

									<script>
											$(document).ready(function() {
											$('.popup-with-zoom-anim').magnificPopup({
												type: 'inline',
												fixedContentPos: false,
												fixedBgPos: true,
												overflowY: 'auto',
												closeBtnInside: true,
												preloader: false,
												midClick: true,
												removalDelay: 300,
												mainClass: 'my-mfp-zoom-in'
											});
																											
											});
									</script>	
				</div>
				<div class="signin">
					<a href="#small-dialog" class="play-icon popup-with-zoom-anim">登录</a>
					<div id="small-dialog" class="mfp-hide">
						<h3>登录</h3>
						<div class="social-sits">
							<div class="facebook-button">
								<a href="#">用Facebook帐号登录</a>
							</div>
							<div class="chrome-button">
								<a href="#">用Google  帐号登录</a>
							</div>
							<div class="button-bottom">
								<p>还未注册？ <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">注册</a></p>
							</div>
						</div>
						<div class="signup">
							<form form id="login_run" name="login_run" method="post" action="<?php echo url('login_run'); ?>">
								<input type="text" class="email" name="email" placeholder="输入邮箱" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"/>
								<input type="password" name="password" placeholder="输入密码" required="required" pattern=".{6,}" title="密码至少六位" autocomplete="off" />
								<input type="submit"  value="登录"/>
							</form>
							<div class="forgot">
								<a href="#">忘记密码?</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
	
        <div class="col-sm-3 col-md-2 sidebar">
			<div class="top-navigation">
				<div class="t-menu"></div>
				<div class="t-img">
					<img src="__img__/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="drop-navigation drop-navigation">
				  <ul class="nav nav-sidebar">
					<li class="active"><a href="index.html" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>主页</a></li>
					<li><a href="/home/concern/concern.html" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>关注</a></li>										
					<li><a href="/home/all/history.html" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>收藏</a></li>
					<li><a href="#" class="menu1"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>分类<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
						<ul class="cl-effect-2">
							<li><a href="/home/index/movies.html">搞笑</a></li>                                             
							<li><a href="/home/index/movies.html">奇幻</a></li>
							<li><a href="/home/index/movies.html">古风</a></li>
							<li><a href="/home/index/movies.html">恋爱</a></li> 
							<li><a href="/home/index/movies.html">校园</a></li>                                             
							<li><a href="/home/index/movies.html">治愈</a></li>
							<li><a href="/home/index/movies.html">推理</a></li>
							<li><a href="/home/index/movies.html">完结</a></li> 
						</ul>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu1" ).click(function() {
							$( "ul.cl-effect-2" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
					
					
					<li><a href="/home/index/sports.html" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>排行榜</a></li>
					
					
				  </ul>
				  <!-- script-for-menu -->
						<script>
							$( ".top-navigation" ).click(function() {
							$( ".drop-navigation" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
					<div class="side-bottom">
						<div class="side-bottom-icons">
							<ul class="nav2">
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
						
					</div>
				</div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="top-grids">
					
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-img recommended-grid-img">
							<a href="<?php echo url('single',array('book'=>12)); ?>"><img src="__img__/12.jpg" alt="" /></a>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="<?php echo url('single',array('book'=>12)); ?>" class="title title-info">シャープさんとタニタくん＠</a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author">仁茂田あい</a></p></li>
								<li class="right-list"><p class="views views-info">4,200 views</p></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-img recommended-grid-img">
							<a href="<?php echo url('single',array('book'=>13)); ?>"><img src="__img__/13.jpg" alt="" /></a>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="<?php echo url('single',array('book'=>13)); ?>" class="title title-info">猫彼氏</a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author">壱コトコ</a></p></li>
								<li class="right-list"><p class="views views-info">4,200 views</p></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-img recommended-grid-img">
							<a href="/home/index/single.html"><img src="__img__/14.jpg" alt="" /></a>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="/home/index/single.html" class="title title-info">ヤンキーショタとオタクおねえさん</a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author">星海ユミ</a></p></li>
								<li class="right-list"><p class="views views-info">71,174 views</p></li>
							</ul>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<h3>最近更新</h3>
						</div>
						<script src="__js__/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow
							  $("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider3">
								<li>
									<div class="animated-grids">
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/15.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">眼中的太阳</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">Icchae</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/16.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">当神不让</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">阿飞（主笔）</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">14,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/17.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">非人哉</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">非人哉工作室</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/18.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">我家大师兄脑子有病</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">剧象漫画</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="animated-grids">
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/16.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">当神不让</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">阿飞（主笔）</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/17.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">非人哉</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">非人哉工作室</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/18.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">我家大师兄脑子有病</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">剧象漫画</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/15.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">眼中的太阳</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">Icchae</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">1,14,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="animated-grids">
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/17.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">非人哉</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">非人哉工作室</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/18.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">我家大师兄脑子有病</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">剧象漫画</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/15.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">眼中的太阳</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">Icchae</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/16.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">当神不让</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">阿飞（主笔）</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">1,14,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="animated-grids">
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/18.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">我家大师兄脑子有病</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">剧象漫画</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/15.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">眼中的太阳</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">Icchae</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/16.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">当神不让</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">阿飞（主笔）</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">2,114,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/home/index/single.html"><img src="__img__/17.jpg" alt="" /></a>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/home/index/single.html" class="title">非人哉</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author">非人哉工作室</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info">1,14,200 views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<h3>人气作品</h3>
						</div>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="<?php echo url('single',array('book'=>19)); ?>"><img src="__img__/19.jpeg" alt="" /></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="<?php echo url('single',array('book'=>19)); ?>" class="title">头条都是他</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">幽.灵</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="/home/index/single.html"><img src="__img__/20.jpeg" alt="" /></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="/home/index/single.html" class="title">南烟斋笔录</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">左小翎 壳小杀</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="<?php echo url('single',array('book'=>21)); ?>"><img src="__img__/21.jpg" alt="" /></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="<?php echo url('single',array('book'=>21)); ?>" class="title">斗破苍穹</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">天蚕土豆 任翔</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="/home/index/single.html"><img src="__img__/22.jpg" alt="" /></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="/home/index/single.html" class="title">快把我哥带走</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">幽.灵</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="recommended-grids">
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="/home/index/single.html"><img src="__img__/23.jpg" alt="" /></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="/home/index/single.html" class="title">当神不让</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">阿飞（主笔）</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="/home/index/single.html"><img src="__img__/24.png" alt="" /></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="/home/index/single.html" class="title">致命禁区</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">YOUTZ RITSUKA</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="/home/index/single.html"><img src="__img__/25.jpg" alt="" /></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="/home/index/single.html" class="title">我在1999等你</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">D君</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="/home/index/single.html"><img src="__img__/26.jpg" alt="" /></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="/home/index/single.html" class="title">SQ</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">坛久</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				
			<!-- footer -->
			<div class="footer">
				<div class="footer-grids">
					<div class="footer-top">
						<div class="footer-top-nav">
							<ul>
								<li><a href="/home/index/about.html">联系我们</a></li>
								<li><a href="/home/index/press.html">关于我们</a></li>
								<li><a href="/home/index/copyright.html">商务合作</a></li>
								<li><a href="/home/index/creators.html">问题帮助</a></li>
							</ul>
						</div>
					</div>
					
			<!-- //footer -->
		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="__js__/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>