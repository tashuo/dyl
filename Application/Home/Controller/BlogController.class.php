<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller {
	public function __construct(){
		parent::__construct();
		$Common = D('Common');
		if($Common->isLogin()){
			$this->assign('isLogin', 1);
		}
		$this->assign('blogClass', 'active');
	}

	public function index(){
		$Blog = D('Admin/AdminPost');
		$count = count($Blog->getBlogList());
                	$Page = new \Think\Page($count, 8);	
                	$show = $Page->show();
	
                	$where = array('state' => 1);
                	$limit = $Page->firstRow.','.$Page->listRows;
                	$blogList = $Blog->getBlogList($where, $limit);

                	$this->assign('blogList', $blogList);
                	$this->assign('page', $show);
		$this->display();
	}

	public function detail(){
		$blogId = I('get.blogId')?I('get.blogId'):1;
		$Blog = D('Admin/AdminPost');
		$blogInfo = $Blog->getBlogDetail($blogId);
		if($blogInfo){
			$Blog->addViews($blogId);
			$this->assign('blogInfo', $blogInfo);
		}

		$nextBlogId = $Blog->getNextBlogId($blogId);
		$preBlogId = $Blog->getPreBlogId($blogId);

		$this->assign('preBlogId', $preBlogId);
		$this->assign('nextBlogId', $nextBlogId);
		$this->display();
		
	}


}