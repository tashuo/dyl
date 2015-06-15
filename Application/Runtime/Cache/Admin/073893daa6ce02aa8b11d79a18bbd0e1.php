<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>[title]--dyl后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/admin/../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/../css/style.css">
    <script src="/admin/../js/jquery-1.8.2.min.js"></script>
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
      <li class="<?php echo ($blogClass); ?>"><a href="<?php echo U('Blog/index');?>">博客</a></li>
      <li class="<?php echo ($manageUserClass); ?>"><a href="<?php echo U('Manager/user');?>">用户管理</a></li>
      <li class="<?php echo ($manageDataClass); ?>"><a href="<?php echo U('Manager/data');?>">数据监控</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo U('Index/index');?>">关于Doyourlove</a></li>
      <?php if(session('login_admin') == 1): ?><li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo session('login_username');?><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo U('Index/logout');?>">退出</a></li>
          </ul>
        </li>
        <?php else: ?>
        <li><a href="<?php echo U('Index/login');?>">登录</a></li><?php endif; ?>
    </ul>
  </nav>
  </div><!-- /.navbar-collapse -->
</header>
<!-- 导航栏 End-->

<div class="container">
    <div class="row">
    	<div class="col-md-12">
	<ul class="nav nav-tabs" role="tablist">
    		<li role="presentation" class="<?php echo ($blogListClass); ?>"><a href="<?php echo U('Blog/index');?>">博客列表</a></li>
		<li role="presentation" class="<?php echo ($blogAddClass); ?>"><a href="<?php echo U('Blog/add');?>">写博客</a></li>
	</ul>
	<div class="table-responsive">
	    <table class="table table-hover">
	        <tr class="success">
	            <th>标题</th>
	            <th>作者</th>
	            <th>时间</th>
	            <th>浏览数</th>
	            <th>评论数</th>
	            <th>操作</th>
	        </tr>
	        <?php if(is_array($blogList)): foreach($blogList as $key=>$v): ?><tr>
	        	    <td><?php echo ($v["subject"]); ?></td>
	                <td><?php echo ($v["author"]); ?></td>
	                <td><?php echo (date('Y-m-d H:i:s',$v["dateline"])); ?></td>
	                <td><?php echo ($v["views"]); ?></td>
	                <td><?php echo ($v["replies"]); ?></td>
	                <td><a href="<?php echo U('Blog/edit','vid='.$v[id]);?>" target="_blank">编辑</a> || 
	                <?php if(($v['state']) == "1"): ?><a href="<?php echo U('Blog/delete');?>" idAttr="<?php echo ($v["id"]); ?>" class="deleteProLink">删除</a>
	                <?php else: ?>
	                	<a href="<?php echo U('Blog/undelete');?>" idAttr="<?php echo ($v["id"]); ?>" class="undeleteProLink">恢复</a><?php endif; ?>
	                </td>
	            </tr><?php endforeach; endif; ?>
	    </table>
	</div>
	<div align="center"><?php echo ($page); ?></div>

    	</div>
    </div>
</div>
 <div align="center">
    <footer class="about-footer" role="contentinfo">
      <div class="container">
        <p>Designed and built with bootstrap and jQuery by <a target="_blank" href="http://about.me/tashuo">ta_shuo</a>.</p>
        <p>@copyright ta_shuo</p>
        <p>版权所有·违法必究</p>
      </div>
    </footer>
</div>

    <script src="/admin/../bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/js/main.js"></script>
    <!-- // <script src="http://10.0.0.19:8080/target/target-script-min.js"></script> -->

  </body>
</html>