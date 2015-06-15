<?php
    namespace Home\Model;
    use Think\Model;

    Class CommonModel extends Model{
    	public function getUserInfoByUsername($username, $admin = 0){
                $User = M('User');
                $where = array('username' => $username);
                if($admin){
                    $where['admin'] = 1; 
                }
                return $User->where($where)->find();
    	}

    	public function isLogin($admin = null){
                if($admin){
                    return session('login_uid')&&session('login_admin');
                }
                return session('login_uid');
    	}

    	public function getLoginUserInfo(){
    	    $User = M('User');
                $uid = session('login_uid');
                $where = array('uid' => $uid);
                return $User->field('uid, username, admin, complete_invite')->where($where)->find();
    	}

            public function userRegister($postData){
                $postData = array_map('htmlspecialchars', $postData);

                $userData['username'] = $postData['username'];
                $userData['email'] = $postData['email'];
                $userData['password'] = md5($postData['password']);
                $userData['sex'] = $postData['sex'];
                $userData['reminds'] = 0;
                $userData['register_time'] = time();
                $userData['complete_invite'] = 0;
                $userData['admin'] = 0;

                $User = M('User');
                if($uid = $User->add($userData)){
                    return array('code' => 1,
                                        'msg' => U('Me/index'),
                                        'uid' => $uid,
                                        );
                }
            }

            public function userLogin($postData){
                $postData = array_map('htmlspecialchars', $postData);
                $admin = $postData['admin']?$postData['admin']:0;
                $retUserinfo = $this->getUserInfoByUsername($postData['username'], $admin);
                if(!is_null($retUserinfo) && $retUserinfo['password'] == md5($postData['password'])){
                    $retUrl = $admin?U('Admin/Blog/index'):U('Me/index');
                    return array('code' => 1,
                                        'msg' => $retUrl,
                                        'uid' => $retUserinfo['uid'],
                                        'reminds' => $retUserinfo['reminds'],
                                        );
                }else{
                    return array('code' => 0,
                                        'msg' => '用户名或密码错误,请重试',
                                        );
                }
            }
    }