
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
			<li class="active" class="dropdown">
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
			
			<form class="form-horizontal" role="form" action="./apply_submit.php" method="post">
			  <div class="form-group">
				<label for="name" class="col-sm-3 control-label">姓名：</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="name">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="gender" class="col-sm-3 control-label">性别：</label>
				<div class="col-sm-9">
				  <input type="radio" name="gender" value="男" checked="checked" /> 男 
				  <input style="margin-left:20px;" type="radio" name="gender" value="女" /> 女
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="gender" class="col-sm-3 control-label">所在校区：</label>
				<div class="col-sm-9">
				  <input type="radio" name="section" value="东区" checked="checked" /> 东区 
				  <input style="margin-left:20px;" type="radio" name="section" value="西区" /> 西区
				  <input style="margin-left:20px;" type="radio" name="section" value="北区" /> 北区
				</div>
			  </div>		  
			  
			  <div class="form-group">
				<label for="major" class="col-sm-3 control-label">专业年级：</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="major" placeHolder="如：通信工程10级">
				</div>
			  </div>

			  <div class="form-group">
				<label for="phone" class="col-sm-3 control-label">联系电话：</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="phone">
				</div>
			  </div>

			  <div class="form-group">
				<label for="phone2" class="col-sm-3 control-label">备用电话：</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="phone2" placeHolder="如：室友电话">
				</div>
			  </div>

			   <div class="form-group">
				<label for="gender" class="col-sm-3 control-label">报名组别：</label>
				<div class="col-sm-9">
				  <input type="radio" name="group" value="Web组" checked="checked" /> Web组 
				  <input style="margin-left:20px;" type="radio" name="group" value="Android组" /> Android组
				  <input style="margin-left:20px;" type="radio" name="group" value="设计组" /> 设计组
				  <input style="margin-left:20px;" type="radio" name="group" value="算法组" /> 算法组
				  <input style="margin-left:20px;" type="radio" name="group" value="运维组" /> 运维组
				  <input style="margin-left:20px;" type="radio" name="group" value="硬件组" /> 硬件组
				  <input style="margin-left:20px;" type="radio" name="group" value="产品经理组" /> 产品经理组
				</div>
			  </div>

			  <div class="form-group">
				<label for="intro" class="col-sm-3 control-label">个人介绍：</label>
				<div class="col-sm-9">
				   <textarea class="form-control" rows="3" name="intro"></textarea>
				</div>
			  </div>

			  <div class="form-group">
				<label for="super" class="col-sm-3 control-label">你的优势：</label>
				<div class="col-sm-9">
				   <textarea class="form-control" rows="3" name="super" placeHolder="简单描述"></textarea>
				</div>
			  </div>

			  <div class="form-group">
				<label for="super" class="col-sm-3 control-label">你是通过哪种渠道了解我们团队的？（多选）</label>
				<div class="col-sm-9">
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox1" value="校方宣传"> 校方宣传
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox2" value="学长学姐推荐"> 学长学姐推荐
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="路演、宣讲会"> 路演、宣讲会
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="使用过团队的产品"> 使用过团队的产品
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="老师推荐"> 老师推荐
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="同学介绍"> 同学介绍
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="海报、宣传单"> 海报、宣传单
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="其他"> 其他
					</label>
				</div>
			  </div>

			 

			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-9">
				  <button type="submit" class="btn btn-primary pull-right">提交</button>
				</div>
			  </div>
			</form>
			
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
			
		
		//$("#match2").bind("mouseover",function(){
		//	$("#match").animate({"top":"-1px"},800,function(){
		//	$(this).css("top","-186px");
		//});
})

	});
</script>