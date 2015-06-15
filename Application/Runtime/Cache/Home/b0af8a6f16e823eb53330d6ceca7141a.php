<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>建造爱巢ing...--dyl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/flipclock.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery-1.8.2.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <link href="http://cdn.bootcss.com/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" rel="stylesheet">
    
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
      <li><a href="./street">街道</a></li>
      <li><a href="./yard">庭院</a></li>
      <li><a href="./home">爱巢</a></li>
      <li class="<?php echo ($meClass); ?>"><a href="<?php echo U('Me/index');?>">我</a></li>
      <li><a href="./ta">我的他/她</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo U('Index/index');?>">关于Doyourlove</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo session('login_username');?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="">消息中心  
                <?php if(session('login_reminds') > 0): ?><span class="badge"><?php echo session('login_reminds');?></span><?php endif; ?>
                </a>
          </li>
          <li><a href="<?php echo U('Index/logout');?>">退出</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  </div><!-- /.navbar-collapse -->
</header>
<!-- 导航栏 End-->

<div class="container">
	<div class="rows">

<div class="container">
<!-- 页面主体 Start-->
  <form class="form-horizontal" id="voteForm" role="form" method="post" action="<?php echo U('Post/index');?>">
        <div class="form-group">
          <label for="projectTitle" class="col-sm-2 control-label">对方爱称</label>
          <div class="col-sm-5">
            <!-- <div class="has-error"> -->
            <input type="text" class="form-control require" name="projectTitle" id="projectTitle" placeholder="爱称">
            <!-- </div> -->
          </div>
        </div>
        <div class="form-group">
          <label for="startDate" class="col-sm-2 control-label">相遇时间</label>
              <div class="col-sm-5" id="RangeDate">
                <div class="input-daterange input-group">
                            <input type="text" class="form-control require" id="startDate" name="startDate" />
                    </div>
                  </div>
        </div>
        <div class="form-group">
        <label for="startDate" class="col-sm-2 control-label">相恋时间</label>
              <div class="col-sm-5" id="RangeDate">
                <div class="input-daterange input-group">
                            <input type="text" class="form-control require" id="startDate" name="startDate" />
                    </div>
                  </div>
        </div>
        <div class="form-group">
        <label for="startDate" class="col-sm-2 control-label">她的生日</label>
              <div class="col-sm-5" id="RangeDate">
                <div class="input-daterange input-group">
                            <input type="text" class="form-control require" id="startDate" name="startDate" />
                    </div>
                  </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">是否允许查看结果</label>
          <div class="col-sm-5">
              <label class="radio-inline">
                <input type="radio" name="seeAble" value="1" checked="checked">允许
              </label>
              <label class="radio-inline">
                <input type="radio" name="seeAble" value="0">不允许
              </label>
          </div>
        </div>

        <div class="form-group">
        <label for="startDate" class="col-sm-2 control-label btn btn-info">生成........邀请........链接...</label>
              <div class="col-sm-5" id="RangeDate">
                <div class="input-daterange input-group">
                            <input type="text" class="form-control require" id="startDate" name="startDate" />
                    </div>
                  </div>
        </div>
  </form>
</div>
<!-- 页面主体 end-->

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