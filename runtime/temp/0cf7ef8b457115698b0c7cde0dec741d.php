<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"C:\wamp64\www/application/home\view\upload\usercomics.html";i:1493037112;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>漫画管理</title>
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
<!-- fonts -->

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
          <a class="navbar-brand" href="/home/index.html"><h1><img src="__img__/logo.png" alt="" /></h1></a>
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
					<a href="/home/index/upload.html">投稿</a>
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
					<li><a href="/home/index.html" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>主页</a></li>
					<li><a href="/home/concern.html" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>关注</a></li>										
					<li><a href="/home/collect/collect.html" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>收藏</a></li>
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
			<div class="show-top-grids">
				<div class="col-sm-10 show-grid-left main-grids">
					<div class="recommended">
						<div class="recommended-grids english-grid">
							<div class="recommended-info">
								<div class="heading">
									<h3>我的漫画</h3>
								</div>
								<div class="heading-right">
									<a href="#" id="add" class="play-icon">投稿</a>
									<script src="__Js__/layer/layer.js"></script>
									<script>
										$('#add').on('click', function(){
                                             layer.open({
                                              type: 2,
                                              title: '添加漫画',
                                             maxmin: true,
                                              shadeClose: true, //点击遮罩关闭层
                                              area : ['800px' , '520px'],
                                              content: 'upload_comics.html'
                                            });
                                        });
									</script>
									
								</div>
								<div class="clearfix"> </div>
							</div>
							<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$book): $mod = ($i % 2 );++$i;?>
							<div class="col-md-3 resent-grid recommended-grid movie-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a target="_blank" href="<?php echo url('comics_detail',array('id'=>$book['id'])); ?>"><img  src="<?php echo $book['image_path']; ?>" alt="" /></a>
									<div class="clck movie-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
									<a herf="<?php echo url('comics_detail',array('id'=>$book['id'])); ?>"  class="play-icon">管理</a>
									
									<ul>
										<li><p class="author author-info"><a href="#" class="author"><?php echo $auther['nickname']; ?></a></p></li>
										<li class="right-list"><p class="views views-info"><?php echo $book['browse_count']; ?> views</p></li>
									</ul>
								</div>
								<script src="__js__/jquery.min.js"></script>
								<script scr="__Js__/layer/layer.js"></script>
							
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
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