<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/home/wwwroot/default/application/home/view/upload/comics_detail.html";i:1492084334;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__css__/basic.css">
<link rel="stylesheet" type="text/css" href="__css__/comicinfo.css">
<link rel="stylesheet" type="text/css" href="__css__/dialog.css">

<link rel="stylesheet" type="text/css" href="__css__/comment.css">
<link href="__css__/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="__css__/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="__css__/style-1.css" rel='stylesheet' type='text/css' media="all" />

<!--start-smoth-scrolling-->
<!-- fonts -->

<!-- //fonts -->
</head>
<body style="height:100%;">

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
					<a href="/home/index/upload.html">投稿</a>
				</div>	
				
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
	
        <div class="col-sm-3 col-md-2 sidebar" style="height: 100%;">
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
					<li><a href="/home/concern/concern.html" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>关注</a></li>										
					<li class="active"><a href="/home/collect/collect.html" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>收藏</a></li>
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
							
						</script>
					
					
					<li><a href="/home/index/sports.html" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>排行榜</a></li>
					
					
				  </ul>
				  <!-- script-for-menu -->
						<script>
							
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
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="height: 100%;">
			<div class="show-top-grids" style="height: 100%;">
				<div class="main-grids news-main-grids" style="height:320px;">
				<!--<div class="col-sm-8 single-left">-->
					
					<img src="<?php echo $book['image_path']; ?>" alt="" style="height: 320px;float: left;" />
					
					<div style="width: 40%;float:left;margin-left: 45px;">
					<h3><?php echo $book['title']; ?></h3>

					<p style="font-size: 14px;"><?php echo $book['brief']; ?></p>
					</div>	
					
					<div style="font-size: 14px; float: left;margin-left: 50px;width: 40%;height:30px;">
						<span>总点击：<?php echo $book['browse_count']; ?></span>&nbsp;|&nbsp;<span>总收藏：<?php echo $book['collect_count']; ?></span>&nbsp;|&nbsp;<span>总点赞：<?php echo $book['fine_count']; ?></span>
					</div>
						
					<div style="font-size: 14px; float: left;margin-left: 50px;width: 40%;height:30px;">
						<span>标签：<?php echo $book_tag['tag']; ?></span>
					</div>

					<div style="font-size: 14px; float: left;margin-left: 50px;width: 40%;height:30px;">
					<input type="button" id="detail" class="btn btn-primary" name="detail" value="详情">	
				    </div>
						
					
			    </div>
			     <div class="" style="margin-left: 35px; margin-top: 20px; height: 100%;">
                    
			     <button class="btn btn-outline btn-success" id="new_chapter" type="button">新增章节</button>
			     </div>
                    <?php if(is_array($chapter) || $chapter instanceof \think\Collection): $i = 0; $__LIST__ = $chapter;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chapter): $mod = ($i % 2 );++$i;?>
						<div style="width:100%;height:100%;margin-left: 35px;overflow: auto;">
							   <div style="margin-left: 15px; float:none; height:100%; margin-top:15px;">						
							   <span style="font-size:18px;">第<?php echo $chapter['no']; ?>章: <?php echo $chapter['chaptername']; ?></span>
							        
							   <button id="chapter<?php echo $chapter['no']; ?>_show" class="btn btn-primary" type="button" style="margin-left: 15px;display: none;" onclick="chapter_show(<?php echo $chapter['no']; ?>)">
							   <i class="fa fa-save"></i> 展示该章
							   </button>
							    <button id="chapter<?php echo $chapter['no']; ?>_hide" class="btn btn-primary"  type="button" style="margin-left: 15px;" onclick="chapter_hide(<?php echo $chapter['no']; ?>)"><i class="fa fa-save"></i> 隐藏该章</button> 

							   </div>
							    
							   
							     
							
							<div style="width: 100%; height: inherit;" id="chapter<?php echo $chapter['no']; ?>">
							<?php if(is_array($list1) || $list1 instanceof \think\Collection): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$page): $mod = ($i % 2 );++$i;if($page['zid'] == $chapter['no']): ?>
		
							     <div class="" style="float: left; height: 270px;  width:18%; margin-right: 2%; border: 2px #CCC solid; border-radius: 5px;margin-top:5px;">
									<div class="">
										<a><img src="<?php echo $page['image_path']; ?>" alt="" style="height: 200px; width:100%;" /></a>
									</div>
									<div style="margin: 15px auto;">
										<span style="margin-left: 35%;"><?php echo $page['yid']; ?></span>
										<button class="btn btn-primary" style="margin-left: 15px;" onclick="del(<?php echo $page['id']; ?>)" type="button"><i class="fa fa-save"></i> 删除</button>
										
									</div>
								 </div>

							    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
							<div class="" style="float: left; height: 270px;  width:18%; margin-right: 2%; border: 2px #CCC solid; border-radius: 5px; margin-top:5px;">
								
									<img style="margin: 30px auto; margin-left: 10%;" src="__img__/1111.jpg"  alt="" onclick="add_pic(<?php echo $chapter['no']; ?>)" />
																
							 </div>
							

							</div>
							<!--<div class="clearfix"> </div>-->
						</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
                 



             </div>
		</div>
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
    <script src="__JS__/jquery.min.js?v=2.1.4"></script>
    <script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
    <script src="__JS__/plugins/chosen/chosen.jquery.js"></script>
	<script src="__JS__/plugins/iCheck/icheck.min.js"></script>
	<script src="__JS__/plugins/layer/laydate/laydate.js"></script>
	<script src="__JS__/plugins/switchery/switchery.js"></script><!--IOS开关样式-->
	<script src="__JS__/jquery.form.js"></script>
	<script src="__JS__/layer/layer.js"></script>
	<script src="__JS__/laypage/laypage.js"></script>
	<script src="__JS__/laytpl/laytpl.js"></script>
    
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->

    <script>

    	$( "li a.menu1" ).click(function() {
			$( "ul.cl-effect-2" ).slideToggle( 300, function() {
			// Animation complete.
			});
		});

		$( ".top-navigation" ).click(function() {
			$( ".drop-navigation" ).slideToggle( 300, function() {
			// Animation complete.
			});
		});

		$("#new_chapter").click(function(event) {
			/* Act on the event */
			layer.open({
		          type: 2,
		          title: '新增漫画章节',
		          shadeClose: true,
		          shade: false,
		          maxmin: true, //开启最大化最小化按钮
		          area: ['800px', '400px'],
		          content: "<?php echo url('new_chapter'); ?>"+"?book=<?php echo $book['id']; ?>",
		          btn: ['保存','取消'],
		          btn1: function(index,layero){
		            var page_data = $(layero).find("iframe")[0].contentWindow.formDataget();
		            var chaptername = page_data.chaptername;
		            var intro = page_data.intro;
		            $.ajax({
		                url:"<?php echo url('new_chapter'); ?>",
		                type:'POST', //GET
		                async:true,    //或false,是否异步
		                data:{
		                    chaptername:chaptername,
		                    intro:intro,
		                    book:<?php echo $book['id']; ?>
		                },
		                timeout:5000,    //超时时间
		                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
		                beforeSend:function(xhr){
		                    console.log('发送前')
		                },
		                success:function(data,textStatus,jqXHR){
		                    if(data.code==1){
		                        layer.msg(data.msg, {icon: 6,time:1500,shade: 0.1}, function(index){
		                            location.reload();
		                        });
		                        // window.location.href = window.location.href;
		                        //layer.close(index);
		                        
		                    }else{
		                        layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
		                          
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
		          },
		          btn2:function(index){
		            layer.close(index);
		          }
		        });


		});

		function chapter_show(id){
			var div_id = 'chapter'+id;
			$("#"+div_id).show();

			var btn_show_id = 'chapter'+id+'_show';
			var btn_hide_id = 'chapter'+id+'_hide';
			$("#"+btn_show_id).hide();
			$("#"+btn_hide_id).show();

		}
		function chapter_hide(id){
			var div_id = 'chapter'+id;
			$("#"+div_id).hide();

			var btn_show_id = 'chapter'+id+'_show';
			var btn_hide_id = 'chapter'+id+'_hide';
			$("#"+btn_show_id).show();
			$("#"+btn_hide_id).hide();
		}

		function add_pic(id) 
	    {  
          	layer.open({
          	type: 2,
          	title: '新增漫画章节',
          	shadeClose: true,
          	shade: false,
          	maxmin: true, //开启最大化最小化按钮
          	area: ['800px', '600px'],
          	content: "<?php echo url('add_pic'); ?>"+"?book=<?php echo $book['id']; ?>&chapter="+id,
          	btn: ['保存','取消'],
          	btn1: function(index,layero){
           		
          	layer.msg('保存成功', {icon: 6,time:1500,shade: 0.1}, function(index){
                location.reload();
            });
	                        
	          },
	          btn2:function(index){
	            layer.close(index);
	          }
	        });

        }

		function del(id){

			//var username = $("#username").val();

			$.ajax({
		        url:"<?php echo url('del'); ?>",
		        type:'POST', //GET
		        async:true,    //或false,是否异步
		        data:{
		        	//username:username,
		            id:id

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
		                    window.location.href = window.location.href;
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

		

		$('#detail').click(function(event) {
			/* Act on the event */
			window.location.href="<?php echo url('comics_page',array('book'=>$book['id'])); ?>";
		});
		
	</script>
  </body>
</html>