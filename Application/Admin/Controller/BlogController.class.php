<?php
    namespace Admin\Controller;
    use Think\Controller;
    Class BlogController extends Controller{
    	public function __construct(){
    		parent::__construct();
    		if(!D('Home/Common')->isLogin()){
    			$this->error('请先登陆', U('Index/login'));
    		}
    	}

    	public function index(){
                $Blog = D('AdminPost');

                $count = count($Blog->getBlogList());
                $Page = new \Think\Page($count, 15);
                $show = $Page->show();

                $where = array();
                $limit = $Page->firstRow.','.$Page->listRows;
                $blogList = $Blog->getBlogList($where, $limit);

                $this->assignAll();
                $this->assign('blogList', $blogList);
                $this->assign('blogListClass', 'active');
                $this->assign('page', $show);
                $this->display();

    	}

    	public function add(){
                $this->assignAll();
                $this->assign('blogAddClass', 'active');
                $this->display();
    	}

    	public function edit(){
                echo I('get.blogId');
    	}

    	public function delete(){

    	}

            //加载同样的变量
            public function assignAll(){
                $this->assign('blogClass', 'active');
            }
    }