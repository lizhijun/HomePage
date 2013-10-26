
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
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">成果<b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="./recent_works.php">近期作品</a></li>
				  <li><a href="./history_works.php">历史作品</a></li>
				</ul>
			</li>
			<li class="active">
			  <a href="./contact.php">联系我们</a>
			</li>
			<li>
			  <a href="#">Hackday</a>
			</li>
		  </ul>
		</nav>
	  </div>
	</header>

	<article style="margin:50px 0;">
		<div class="container">
			
			<form class="form-horizontal" role="form" action="./apply_submit.php" method="post">
			  <div class="form-group">
				<img class="col-sm-1" src="images/address.png">
				<div class="col-sm-5">
				  <h5>中国湖北省武汉市鲁磨路388号<br />中国地质大学（武汉）点石团队工作室</h5>
				</div>
				<div class="col-sm-6">
				  <input type="text" class="form-control" name="name" placeHolder="Your Name">
				</div>
			  </div>
			  
			  <div class="form-group">
				<img class="col-sm-1" src="images/mail.png">
				<div class="col-sm-5">
				  <h5>E-mail: hr@pointstone.org</h5>
				</div>
				<div class="col-sm-6">
				  <input type="text" class="form-control" name="phone" placeHolder="Your Subject">
				</div>
			  </div>

			  <div class="form-group">
				<img class="col-sm-1" src="images/tel.png">
				<div class="col-sm-5">
				  <h5>电话: 187-7104-7269</h5>
				</div>
				<div class="col-sm-6">
				  <input type="text" class="form-control" name="phone2" placeHolder="Your Email">
				</div>
			  </div>

			  <div class="form-group">
				<div class="col-sm-6 pull-right">
				   <textarea class="form-control" rows="3" name="intro" placeHolder="Your Message"></textarea>
				</div>
			  </div>

			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-primary pull-right">提交</button>
				</div>
			  </div>
			</form>
			

			<pre style="font-weight:bold;font-size:16px;">
	if wanna_join_us() or do_business() or have_questions() or have_suggestion()

		switch(choice:)

			1:send_e-mail("<a href="mailto:hr@pointstone.org">hr@pointstone.org</a>"); break;

			2:contact_with(<a href="http://weibo.com/pointstone" target="_blank;"><img src="images/weibo_logo.png" /></a>); break;

			3:contact_with(<a href="#"><img src="images/renren_logo.png" /></a>); break;
			</pre>
		</div><!--/container-->
	</article>
		
	
	

	<footer style="background-color: #000;height:100px;margin-top:5%;">
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
			
		
		//$("#match2").bind("mouseover",function(){
		//	$("#match").animate({"top":"-1px"},800,function(){
		//	$(this).css("top","-186px");
		//});
})

	});
</script>