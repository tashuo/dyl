<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>[title]--小幸福</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/flipclock.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery-1.8.2.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/functions.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	</head>
<body data-spy="scroll">

<!-- 导航栏 Start -->
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Doyourlove</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav first_ul">
        <li class="<?php echo ($indexClass); ?>">
          <a href="<?php echo U('Index/index');?>">关于</a>
        </li>
        <li class="<?php echo ($blogClass); ?>">
          <a href="<?php echo U('Blog/index');?>">blog</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(($isLogin) == "1"): ?><li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo session('login_username');?><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo U('Me/index');?>">个人中心</a></li>
              <li><a href="<?php echo U('Index/logout');?>">退出</a></li>
            </ul>
          </li>
          <?php else: ?>
            <li class="<?php echo ($registerClass); ?>">
              <a href="<?php echo U('Index/register');?>">注册</a>
            </li>
            <li class="<?php echo ($loginClass); ?>">
              <a href="<?php echo U('Index/login');?>">登录</a>
            </li><?php endif; ?>
      </ul>
    </nav>
  </div>
</header>
<!-- 导航栏 End-->


<div class="container">
    <div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<div align="center" class="alert alert-success" id="registerInfo">
    			<p>欢迎注册dyl</p>
    		</div>
    		<form class="form-horizontal alert alert-info" role="form" method="post" id="registerForm" idAttr="<?php echo U('Post/index');?>">
		  <div class="form-group">
		    <label for="email" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="email" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="username" class="col-sm-2 control-label">Username</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="username" placeholder="Username"  idAttr="<?php echo U('User/isUsernameExist');?>" >
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="password" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="password" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="repassword" class="col-sm-2 control-label">Repassword</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="repassword" placeholder="Repeat Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Sex</label>
		    <div class="col-sm-10 btn-group">
		    	<button type="button" class="btn btn-default" id="sex" idAttr="-1">请选择</button>
		    	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		    		<span class="caret"></span>
		    		<span class="sr-only">ta_shuo</span>
		    	</button>
		    	<ul class="dropdown-menu" role="menu">
		    		<li><a href="javascript:;" onclick="changeSex('1', '男')">男</a></li>
		    		<li><a href="javascript:;" onclick="changeSex('2', '女')">女</a></li>
		    		<li><a href="javascript:;" onclick="changeSex('0', '保密')">保密</a></li>
		    	</ul>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10 submitBtn">
		      <button type="submit" class="btn btn-primary">注册</button>
		      <a href="<?php echo U('Index/login');?>" class="btn btn-warning">
		      	<span class="glyphicon glyphicon-plane"></span> 已有帐号
		      </a>
		    </div>
		  </div>
		</form>
    	</div>
    </div>
</div>

<script type="text/javascript" src="/js/register.js"></script>
 <div align="center">
    <footer class="about-footer" role="contentinfo">
      <div class="container">
        <p>Designed and built with bootstrap and jQuery by <a target="_blank" href="http://about.me/tashuo">ta_shuo</a>.</p>
        <p>@copyright ta_shuo</p>
        <p>版权所有·违法必究</p>
      </div>
    </footer>
</div>

    <script src="/js/flipclock.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/masonry.pkgd.min.js"></script>
    <script src="/js/holder.js"></script>
    <script src="/js/main.js"></script>

  </body>
</html>