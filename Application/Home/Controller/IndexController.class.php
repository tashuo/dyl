<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct(){
		parent::__construct();
		$Common = D('Common');
		if($Common->isLogin()){
			$this->assign('isLogin', 1);
		}
	}

	public function index(){
		session('login_uid') && $this->assign('isLogin', 1);
		$this->assign('indexClass', 'active');

		$this->display();
	}

	public function login(){
    		$this->assign('loginClass', 'active');
    		$this->assign('title', '登录');
    		$this->display();
    	}

    	public function register(){
    		$this->assign('registerClass', 'active');
    		$this->display();
    	}

    	public function logout(){
                        session(null);
                        session('[destroy]');
                        $this->success('退出登录,正在跳回首页', U('Index/index'));
    	}

            //判断用户名是否存在
            public function isUsernameExist(){
                if(IS_GET){
                    if(D('Common')->getUserInfoByUsername(I('get.username'))){
                        $this->ajaxReturn(1);
                    }
                }else{
                    $this->error('非法请求');
                }
            }
}