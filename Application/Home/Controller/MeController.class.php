<?php
    namespace Home\Controller;
    use Think\Controller;
    Class MeController extends Controller{
    	public function __construct(){
    		parent::__construct();
		$Common = D('Common');
		if(!$Common->isLogin()){
			$this->error('请先登录', U('Index/login'));
		}
                        
		$this->assign('meClass', 'active');
    	}

    	public function index(){
    		$Blog = D('Post');
    		$where = array('uid' => session('login_uid'),
    				  'state' => 1,
    				);
		$count = count($Blog->getBlogList($where));
                	$Page = new \Think\Page($count, 8);	
                	$show = $Page->show();
	
                	$limit = $Page->firstRow.','.$Page->listRows;
                	$blogList = $Blog->getBlogList($where, $limit);

                	$this->assign('blogList', $blogList);
                        $this->assign('completeInvite', cookie('login_completeTip'));
                	$this->assign('page', $show);
    		$this->display();
    	}

    	public function home(){
    		
    	}

            private function _createInviteLink(){
                        $uid = session('login_uid');
                        
            }
    }