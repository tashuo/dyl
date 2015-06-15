<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>Dyl--小幸福</title>
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
    <div class="col-md-3">
    	<div class="bs-sidebar" id="myaffix">
    		<ul class="nav bs-sidenav" data-spy="affix">
    			<li class="active">
    				<a href="#born">诞生</a>
    			</li>
    			<li>
    				<a href="#hope">愿景</a>
    			</li>
    			<li>
    				<a href="#support">技术支持</a>
    			</li>
    			<li>
    				<a href="#author">作者</a>
    			</li>
    		</ul>
    	</div>
    </div>
    	<div class="col-md-9" role="main">
    		<div class="bs-docs-section">
    			<div class="page-header">
    				<h1 id="born">诞生</h1>
    			</div>
    			<p class="lead">DoyourLove诞生的最初动机是LZ找不到一个合适的平台记录自己现在甜蜜的生活.</p>
    			<p>由于找了一个相对来说比较惬意的工作，老板在三月中旬就放我们回来做毕业设计，而我选的毕设题目比较简单实现起来难度系数不高，所以得以空闲出大量的时间去考虑做一点自己想做的可以做的事情。</p>
    			<p>最后从实际需求出发，结合广大恋爱青年的需要，决心做出来一个最起码可以用的过去的应用，来记录恋爱中的点点滴滴，幸福，心酸，痛苦与快乐，每一段好的不好的历程对自己来说都是人生必经的一个重要阶段，记录下来，常衣自省。</p>
    		</div>
    		<div class="bs-docs-section">
    			<div class="page-header">
    				<h1 id="hope">愿景</h1>
    			</div>
    			<p class="lead">希望利用一个平台记录下人生最美好的一个阶段.</p>
    			<p>如前所述，希望一步步完善这个平台，能让自己，大家，有一个工具去记录，分享恋爱中的小事件大事件，人生的一步步脚印，恋爱应该是人生最美好的阶段了，如果能把这个时期记录下来，不管以后你身旁的人是否还是ta，都是一段刻骨铭心的记忆。
    			</p>
    		</div>
    		<div class="bs-docs-section">
    			<div class="page-header">
    				<h1 id="support">技术支持</h1>
    			</div>
    			<p class="lead">基于bootstrap和jQuery构建整个应用.</p>
    			<p>
                                        Bootstrap最初是由
                                        <a href="https://twitter.com/mdo">@mdo</a>
                                        and
                                        <a href="https://twitter.com/fat">@fat</a>
                                        于2010中旬创造的。在开源之前被称为
                                        <em>Twitter Blueprint</em>
                                        。经过几个月的开发，Twitter举办了
                                        <a href="https://blog.twitter.com/2010/hack-week">first Hack Week</a>
                                        ，之后，这个项目被公布出来，不同水平的开发者参与进来，当时还没有任何外部的指导。在开源之前的近一年多的时间里，这个项目作为公司内部工具开发的样式指南，当然，现在它仍然扮演者同样的角色。
                                        </p>
                                        <p>
                                        Originally
                                        <a href="https://dev.twitter.com/blog/bootstrap-twitter">released</a>
                                        on
                                        <a href="https://twitter.com/mdo/statuses/104620039650557952">
                                        , we've since had over
                                        <a href="https://github.com/twbs/bootstrap/releases">twenty releases</a>
                                        , including two major rewrites with v2 and v3. With Bootstrap 2, we added responsive functionality to the entire framework as an optional stylesheet. Building on that with Bootstrap 3, we rewrote the library once more to make it responsive by default with a mobile first approach.
                                    </p>

    		</div>
    		<div class="bs-docs-section">
    			<div class="page-header">
    				<h1 id="author">作者</h1>
    			</div>
    			<p class="lead">普通web码农.</p>
    			<p>工作地点: 妖都</p>
    			<p>职位: PHP开发工程师</p>
    			<p>邮箱: dangyaming@gmail.com</p>
    		</div>
    	</div>
    
  </div>
</div>

<script>
	$(document).ready(function(){
		// $('#myaffix').affix({
		// 	offset:{
		// 		top: 10,
		// 		bottom: function(){
		// 			return (this.bottom = $('footer').outerHeight(true))
		// 			}
		// 		}
		// });
		});
</script>
<style type="text/css">
    #myaffix.affix{
        top: 10px;
    }
    div#myaffix li.active{
        background-color: #d7f5fa;
    }
</style>

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