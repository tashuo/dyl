<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>[title]--dyl后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <script src="/admin/js/jquery-1.8.2.min.js"></script>

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<!-- 导航栏 Start -->
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">折叠</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Doyourlove</a>
  </div>
  <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
    <ul class="nav navbar-nav first_ul">
      <li><a href="<?php echo U('Blog/index');?>">博客</a></li>
      <li><a href="<?php echo U('Manager/user');?>">用户管理</a></li>
      <li><a href="<?php echo U('Manager/data');?>">数据监控</a></li>
    </ul>
    <!-- <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search your friends">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form> -->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo U('Index/index');?>">关于Doyourlove</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo session('login_username');?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo U('User/logout');?>">退出</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  </div><!-- /.navbar-collapse -->
</header>
<!-- 导航栏 End-->

<div class="container">
    <div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<div align="center" class="alert alert-success" id="loginInfo">
    			<p>欢迎登陆dyl</p>
    		</div>
    		<form class="form-horizontal alert alert-info" role="form" method="post" id="loginForm" idAttr="<?php echo U('Post/index');?>">
		  <div class="form-group">
		    <label for="username" class="col-sm-2 control-label">Email/Username</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="username" name="username" placeholder="Email/Username" value="<?php echo cookie('remember_me');?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="password" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox" id="remember_me" name="remember" <?php echo cookie('remember_me')?'checked="checked"':'';?>> Remember me
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign in</button>
		    </div>
		  </div>
		</form>
    	</div>
    </div>
</div>
<script type="text/javascript" src="/admin/js/login_admin.js"></script>
 <div align="center">
    <footer class="about-footer" role="contentinfo">
      <div class="container">
        <p>Designed and built with bootstrap and jQuery by <a target="_blank" href="http://about.me/tashuo">ta_shuo</a>.</p>
        <p>@copyright ta_shuo</p>
        <p>版权所有·违法必究</p>
      </div>
    </footer>
</div>

    <script src="/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/js/main.js"></script>

  </body>
</html>