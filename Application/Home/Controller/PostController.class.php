<?php
    namespace Home\Controller;
    use Think\Controller;
    Class PostController extends Controller{
    	public function index(){
    		switch(I('post.formActionType')){
    			case 'register':
    				if(IS_AJAX){
    					$result = D('Common')->userRegister(I('post.'));
    					if($result['code']){
                                                                        //如果成功注册则默认保存登录信息
                                                                        session('login_uid', $result['uid']);
    						session('login_username', htmlspecialchars(I('post.username')));
                                                                        session('login_time', time());
    					}
    					$this->ajaxReturn($result);
    				}
                                                break;
                                    case 'login':
                                                if(IS_AJAX){
                                                            $result = D('Common')->userLogin(I('post.'));
                                                            if($result['code']){
                                                                //登录成功
                                                                $isAdmin = I('post.admin')?1:0;
                                                                session('login_admin', $isAdmin);
                                                                session('login_uid', $result['uid']);
                                                                session('login_reminds', $result['reminds']);
                                                                session('login_username', htmlspecialchars(I('post.username')));
                                                                session('login_time', time());

                                                                //查询是否已经完成邀请,未完成则做出标记提示
                                                                $userinfo = D('Common')->getLoginUserInfo();
                                                                if(!$userinfo['complete_invote']){
                                                                    session('login_completeTip', 1);
                                                                    cookie('login_completeTip', 1);
                                                                }

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
                                    defalut:
                                                ;
    		}
    	}
    }