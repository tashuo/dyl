<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title><?php echo ($blogInfo["subject"]); ?>--小幸福</title>
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
    <div class="col-xs-12 col-sm-10 col-md-8 col-md-offset-2 col-sm-offset-1 blogDetail">
      <div class="blog_date">
            <p class="text-center"><small><?php echo (date('d, M',$blogInfo["dateline"])); ?></small></p>
      </div>
      <div class="title">
        <h1 class="text-center"><?php echo ($blogInfo["subject"]); ?></h1>
      </div>
      <div class="content well"><?php echo ($blogInfo["content"]); ?></div>
      <div class="blog_meta">
      	<p><a href="#replies">评论(<?php echo ($blogInfo["replies"]); ?>)</a><span  class="pull-right hot"> 热度(<?php echo ($blogInfo["views"]); ?>)</a></p>
      </div>
      <div class="blog_separate">&nbsp;</div>

      <!-- 多说评论框 start -->
      <div class="ds-thread" data-thread-key="<?php echo ($blogInfo["id"]); ?>" data-title="<?php echo ($blogInfo["subject"]); ?>" data-url="<?php echo U('Blog/detail', 'blogId='.$blogInfo[id]);?>"></div>
      <!-- 多说评论框 end -->
      <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
      <script type="text/javascript">
      var duoshuoQuery = {short_name:"tashuojolin"};
      	(function() {
      		var ds = document.createElement('script');
      		ds.type = 'text/javascript';ds.async = true;
      		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
      		ds.charset = 'UTF-8';
      		(document.getElementsByTagName('head')[0] 
      		 || document.getElementsByTagName('body')[0]).appendChild(ds);
      	})();
      </script>
      <!-- 多说公共JS代码 end -->

      <div class="pageTip">
        <ul class="pager">
          <li class="previous">
            <a href="<?php echo U('Blog/detail', 'blogId='.$nextBlogId);?>">← 前一篇</a>
          </li>
          <li class="next">
            <a href="<?php echo U('Blog/detail', 'blogId='.$preBlogId);?>">后一篇 →</a>
          </li>
        </ul>
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

    <script src="/js/flipclock.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/masonry.pkgd.min.js"></script>
    <script src="/js/holder.js"></script>
    <script src="/js/main.js"></script>

  </body>
</html>