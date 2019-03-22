<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"C:\wamp64\www/application/home\view\personal\index.html";i:1492938686;}*/ ?>
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
<link rel="stylesheet" href="__Js__/layui/css/layui.css" media="all">
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
				<fieldset class="layui-elem-field layui-field-title" style="margin-top: 40px;">
                     <legend>我的信息页</legend>
                </fieldset>
 
                <div class="layui-tab" style="height:500px">
                    <ul class="layui-tab-title">
                        <li class="layui-this">我的详细信息</li>
                        <li>个人资料</li>
                        <li>修改头像</li>
                        <li>修改密码</li>
                    </ul>
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <table class="layui-table" lay-even="" lay-skin="row" style="width: 500px">
                                <colgroup >   
                                   <col width="200">
                                   <col>
                                </colgroup>
                                <tbody>                                   
                                    <tr>
                                      <td>昵称</td>
                                      <td><?php echo $user['nickname']; ?></td>
                                    </tr>
                                    <tr>
                                      <td>性别</td>
                                      <?php if($user['sex'] == 1): ?>
                                      <td>男</td>
                                      <?php else: ?>
                                      <td>女</td>
                                      <?php endif; ?>
                                    </tr>
                                    <tr>
                                      <td>地址</td>
                                      <td><?php echo $user['province']; ?><?php echo $user['city']; ?></td>
                                    </tr>
                                    <tr>
                                      <td>年龄</td>
                                      <td><?php echo $user['age']; ?></td>
                                    </tr>
                                    <tr>
                                      <td>生日</td>
                                      <td><?php echo $user['birthday']; ?></td>
                                    </tr>
                                </tbody>
                            </table> 
  
                        </div>
                        <div class="layui-tab-item">
                        	<form class="layui-form" action="">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">昵称</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="<?php echo $user['nickname']; ?>" class="layui-input" style="width:200px">
                                    </div>
                                </div>
                                <div class="layui-form-item" pane="">
                                    <label class="layui-form-label">性别</label>
                                    <div class="layui-input-block">
                                        <?php if($user['sex'] == 1): ?>
                                         <input type="radio" name="sex" value="男" title="男" checked="">
                                         <input type="radio" name="sex" value="女" title="女">
                                         <?php else: ?>
                                         <input type="radio" name="sex" value="男" title="男" >
                                         <input type="radio" name="sex" value="女" title="女" checked="">
                                         <?php endif; ?>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">地址</label>
                                       <div class="layui-input-inline">
									      <select name="provinceId" id="provinceId">
									        <option value="">请选择省</option>
									         <?php if(is_array($province) || $province instanceof \think\Collection): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?>
									        <option value="<?php echo $pro['id']; ?>"><?php echo $pro['name']; ?></option>
									        <?php endforeach; endif; else: echo "" ;endif; ?>
									        </select>
									    </div>

									    <div class="layui-input-inline">
									      <select name="cityId" id="cityId">
									        
									        <option value="">请选择市</option>
									      </select>
									    </div>
						
								</div>
                               
				         </form>
 
                        </div>
                        <div class="layui-tab-item">内容3</div>
                        <div class="layui-tab-item">内容4</div>

                     </div>
                </div>

                </div>
				<div class="col-md-2 show-grid-right">
					<h3>我的信息</h3>
					<div class="show-right-grids">
						<ul>
							<?php if($user['sex'] == 1): ?>
							<li class="tv-img" style="margin-left: 100px;" ><a href="#"><img src="__img__/man.png" alt="" /></a></li>
							
                           <?php else: ?>
							<li class="tv-img" style="margin-left: 100px;"><a href="#"><img src="__img__/woman.png" alt="" /></a></li>
						<?php endif; ?>	
							
						</ul>
					</div>
					
					<div class="show-right-grids">
						<ul>
							<li class="tv-img"><a href="#"><img src="__img__/mv.png" alt="" /></a></li>
							<li><a href="#">Marathi movies</a></li>
						</ul>
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
          <script src="__Js__/layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
                <script>
                    layui.use('element', function(){
                        var $ = layui.jquery,element = layui.element(); //Tab的切换功能，切换事件监听等，需要依赖element模块
  
                    //触发事件
                   /* var active = {
   
                        tabChange: function(){
                    //切换到指定Tab项
                            element.tabChange('demo', '22'); //切换到：用户管理
                        }
                    };*/
                });
                     layui.use('form', function(){
                        var form = layui.form(); //Tab的切换功能，切换事件监听等，需要依赖element模块
  
                });

									 $("#provinceId").change(function(){
							        var provinceId = $("#provinceId").val();
							        $.ajax({
							            url:"<?php echo url('area_get'); ?>",
							            type:'POST', //GET
							            async:true,    //或false,是否异步
							            data:{
							                id:provinceId,
							                level:2
							            },
							            timeout:5000,    //超时时间
							            dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
							            beforeSend:function(xhr){
							                console.log('发送前')
							            },
							            success:function(data,textStatus,jqXHR){
							                if(data.code==1){
							                    $("#cityId").empty();
							                    var data_callback = data.data;
							                    $.each(data_callback,function(i){
							                        $("#cityId").append("<option value="+data_callback[i]['id']+">"+data_callback[i]['name']+"</option>");
							                    })
	      
							                    return true;
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
							   });
						  
                </script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>