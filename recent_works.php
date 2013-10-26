
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <title>Point Stone - 地大点石团队</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
		*{margin:0;padding:0;list-style-type:none;}
		a,img{border:0;}

		body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}

		.clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden;}

		.clearfix{display:inline-table;}/* Hides from IE-mac */

		*html .clearfix{height:1%;}

		.clearfix{display:block;}/* End hide from IE-mac */

		*+html .clearfix{min-height:1%;}

		/* section */
		.section{width:981px;margin:40px auto 0 auto;overflow:hidden;}
		.section ul{width:996px;}
		.section ul 

		li{float:left;margin-right:0px;margin-bottom:0px;display:inline;width:300px;height:200px;overflow:hidden;position:relative;}

		.section ul li .photo{width:300px;height:200px;overflow:hidden;}

		.section .rsp{width:300px;height:200px;overflow:hidden;position: absolute;background:#000;top:0px;left:0px;}
		.section .text{position:absolute;width:300px;height:200px;left:-300px;top:0px;overflow:hidden;}

		.section .text 
		h3{width:300px;margin-top:130px;height:200px;line-height:55px;text-align:center;color:#FFFFFF;font-family
		:"microsoft yahei";font-size:26px;}
	</style>
  </head>
  <body>
    <a class="sr-only" href="#content">Skip to main content</a>

    <!-- Docs master nav -->
    <header class="navbar navbar-inverse bs-docs-nav" role="banner">
	  <div class="container">
		<div class="navbar-header">
		  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a href="./" class="navbar-brand" style="color:#FFF;">Point Stone</a>
		</div>

		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
		  <ul class="nav navbar-nav">
			<li>
			  <a href="./">首页</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">关于点石<b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="./ps_intro.php">团队介绍</a></li>
				  <li><a href="./ps_group.php">各组介绍</a></li>
				  <li><a href="./ps_member.php">团队成员</a></li>
				  <li class="divider"></li>
				  <li><a href="./ps_event.php">大事记</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">招新<b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="./apply_affair.php">招新事宜</a></li>
				  <li><a href="./apply_online.php">在线报名</a></li>
				</ul>
			</li>
			<li class="active" class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">成果<b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="./recent_works.php">近期作品</a></li>
				  <li><a href="./history_works.php">历史作品</a></li>
				</ul>
			</li>
			<li>
			  <a href="./contact.php">联系我们</a>
			</li>
			<li>
			  <a href="#">Hackday</a>
			</li>
		  </ul>
		</nav>
	  </div>
	</header>

	<article>
		<div class="container">
			
			<div class="section">
				<ul class="clearfix">
					<li>
						<div class="photo"><img src="member/28.jpg" width="300" height="200" /></div>
						<div class="rsp"></div>
						<div class="text"><a href="javaxcript:void(0);" data-toggle="modal" data-target="#myModal"><h3>李志军</h3></a></div>
					</li>

					<li>
						<div class="photo"><img src="member/28.jpg" width="300" height="200" /></div>
						<div class="rsp"></div>
						<div class="text"><a href="#"><h3>李志军</h3></a>
						<a href="#"><h3>软件开发组</h3></a></div>
					</li>

					<li>
						<div class="photo"><img src="member/28.jpg" width="300" height="200" /></div>
						<div class="rsp"></div>
						<div class="text"><a href="#"><h3>李志军</h3></a></div>
					</li>

					<li>
						<div class="photo"><img src="member/28.jpg" width="300" height="200" /></div>
						<div class="rsp"></div>
						<div class="text"><a href="#"><h3>李志军</h3></a></div>
					</li>
					
				</ul>
				<div class="clear"></div>
			</div>
			

			<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		</div><!--/container-->
	</article>
		
	
	

	<footer style="background-color: #000;height:100px;margin-top:25%;">
		<div class="text-center container" style="padding:35px;color:#fff">&copy 2013 Point Stone All Rights Reserved.
		<span style="margin-left:20px;" class="pull-right"><a href="#"><img src="images/renren_logo.png" /></a></span>
		<span class="pull-right"><a href="http://weibo.com/pointstone" target="_blank;"><img src="images/weibo_logo.png" /></a></span></div>
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<script type="text/javascript">
	$().ready(function(){
			
		
		$(".section ul li .rsp").hide();
	
		$(".section	 ul li").hover(function(){
			$(this).find(".rsp").stop().fadeTo(500,0.5)
			$(this).find(".text").stop().animate({left:'0'}, {duration: 500})

		},function(){
			$(this).find(".rsp").stop().fadeTo(500,0)
			$(this).find(".text").stop().animate({left:'300'}, {duration: "fast"})
			$(this).find(".text").animate({left:'-300'}, {duration: 0})
		});
	});
</script>