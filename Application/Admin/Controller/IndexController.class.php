<?php
    namespace Admin\Controller;
    use Think\Controller;
    Class IndexController extends Controller{
    	public function index(){
                        if(!D('Home/Common')->isLogin(1)){
                            $this->error('请先登陆', U('Index/login'));
                        }
    	}

    	public function login(){
                        $this->display();
    	}

    	public function logout(){
                        session(null);
                        session('[destroy]');
                        $this->success('退出登录,正在跳回首页', U('Index/login'));
    	}
    }