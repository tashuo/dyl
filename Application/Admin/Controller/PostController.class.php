<?php
    namespace Admin\Controller;
    use Think\Controller;
    Class PostController extends Controller{
    	public function index(){
    		switch(I('post.formActionType')){
                                    case 'login':
                                                if(IS_AJAX){
                                                            $result = D('Home/Common')->userLogin(I('post.'));
                                                            if($result['code']){
                                                                //登录成功
                                                                $isAdmin = I('post.admin')?1:0;
                                                                session('login_admin', $isAdmin);
                                                                session('login_uid', $result['uid']);
                                                                session('login_username', htmlspecialchars(I('post.username')));
                                                                session('login_time', time());

                                                                //如果选中记住我则保存cookie，否则清理掉可能存在的cookie
                                                                if(I('post.remember_me')){
                                                                    $cookie_time = 3600*24*7;
                                                                    $cookie_name = 'remember_me';
                                                                    $cookie_value = htmlspecialchars(I('post.username'));
                                                                    cookie($cookie_name, $cookie_value, $cookie_time);
                                                                }else{
                                                                    cookie('remember_me') && cookie('remember_me', null);
                                                                }
                                                            }
                                                            $this->ajaxReturn($result);
                                                }
                                                break;
                                    case 'postBlog':
                                                if(IS_AJAX){
                                                    $result = D('AdminPost')->postBlog($_POST);
                                                    $this->ajaxReturn($result);
                                                }
                                    defalut:;
    		}
            echo 'post test';
    	}
    }