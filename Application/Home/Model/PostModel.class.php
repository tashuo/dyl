<?php
    namespace Home\Model;
    Class PostModel extends CommonModel{
    	public function getBlogList($where = array(), $limit = ''){
    		$Blog = M('Post');
    		$list = $Blog->where($where)->order('dateline DESC')->limit($limit)->select();
    		return $list;
    	}

    	public function getBlogDetail($blogId){
                        $Blog = M('Post');
                        $where = array('id' => $blogId);
                        $blogInfo = $Blog->where($where)->find();
                        if($blogInfo){
                            return $blogInfo;
                        }
    	}

            //获取上一篇，下一篇文章的id
            public function getPreBlogId($blogId){
                        $Blog = M('Post');
                        return $Blog->where('id < '.$blogId)->order('dateline DESC')->getField('id');
            }

            public function getNextBlogId($blogId){
                        $Blog = M('Post');
                        return $Blog->where('id > '.$blogId)->order('dateline ASC')->getField('id');
            }

            public function addViews($blogId){
                        $where = array('id' => $blogId);
                        M('Post')->where($where)->setInc('views');
            }

    	public function postBlog($postData){
    		$Common = D('Home/Common');
    		if($Common->isLogin(1)){
    			$userInfo = $Common->getLoginUserInfo();

    			$data = array();
    			$data['uid'] = $userInfo['uid'];
    			$data['subject'] = htmlspecialchars($postData['subject']);
    			$data['content'] = $postData['content'];
    			$data['dateline'] = $data['last_modify'] = time();
    			$data['state'] = $postData['state'];
    			$data['author'] = $userInfo['username'];
    			$data['views'] = $data['replies'] = 0;

    			$Blog = M('AdminPost');
    			if($blogId = $Blog->data($data)->add()){
    				return array('code' => 1,
    					        'blogId' => $blogId,
    					        'url' => U('Blog/edit', 'blogId='.$blogId),
    					        );
    			}else{
    				return array('code' => 0,
    					        'msg' => '发表失败',
    					        );
    			}
    		}
    	}

    }