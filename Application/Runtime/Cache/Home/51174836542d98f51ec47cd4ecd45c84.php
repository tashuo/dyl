<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>个人中心--dyl</title>
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

<!-- 页面主体 Start-->
<div class="container">
  <div class="row">
    <!-- 左侧主体 Start-->
    <div class="col-xs-12 col-sm-6 col-md-8">
        <div class="page-header">
          <h1>Do Your LOVE 
                <small>
                  <?=$_SESSION['login_user'];?>
                </small>
                <?php
 ?>
          </h1>
        </div>


        <div class="input-group input-group-lg">
          <input type="text" class="form-control" placeholder="发表此刻的心情" name="feed" />
          <span class="input-group-addon btn glyphicon glyphicon-send"> 发表</span>
        </div>

        <br />
        <?php if(is_array($blogList)): foreach($blogList as $k=>$v): ?><div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-toggle="collapse" href="#<?php echo ($k); ?>"><?php echo ($v["subject"]); ?></a>
              </h4>
            </div>
            <div id="<?php echo ($k); ?>" class="panel-collapse collapse">
              <div class="panel-body"><?php echo ($v["content"]); ?></div>
            </div>
          </div><?php endforeach; endif; ?>

          <!--页码 Start-->
          <!-- 分页 Start-->
          <div class="text-center">
            <?php echo ($page); ?>
          </div>
          <!--分页 End-->
          <!--页码 End-->
    </div>
    <!-- 左侧主体 End-->

    <!-- 右侧主体 Start-->
    <div class="col-xs-6 col-md-4">
      <h2>Side Bar</h2>
      <br />
      <p>每日一句:</p>
        <blockquote class="pull-right">
          <p>what the fuck</p>
          <small>赠于 2014.01.04, <cite title="fuck">这是啥</cite></small>
        </blockquote>
    </div>
    <!-- 右侧主体 End-->

    </div> 
</div>



<!-- 邀请提示 -->
<?php if(($completeInvite) == "1"): ?><!--邀请提示窗-->
<div class="modal fade" id="inviteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center" id="myModalLabel">欢迎注册来到DoyourLove</h3>
      </div>
      <div class="modal-body">
        <h4><strong>注意事项:</strong></h4>
        <h5>1、邀请女朋友注册前必须先完成"爱巢"页面的信息;</h5>
        <h5>2、第一条完善后通过生成唯一的邀请码来邀请女友;</h5>
        <h5>3、了解DoyourLove,可以访问<a href="<?php echo U('Home/index');?>">这里</a></h5>
        <h5>4、旅途愉快.</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-primary" href="<?php echo U('Home/build');?>">完善信息</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
  //邀请模态框
  $('#inviteModal').modal();
</script>

<!--清除提醒邀请的cookie，保证只弹出一次-->
<?php echo cookie('login_completeTip', 0);?>
</else><?php endif; ?>

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