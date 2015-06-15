<?php
    namespace Home\Controller;
    use Think\Controller;

    Class HomeController extends Controller{
    	public function _construct(){}

    	public function index(){
    		$User = M('User');
    		$finish_building = $User->where('uid = '.session('login_uid'))->getField('finish_building');
    		// echo $User->_sql();
    		echo $finish_building.'qq';
    		if(!$finish_building){
    			$this->build();
    		}else{
    			$this->buildding();
    		}
    	}

    	private function build(){
    		$this->display();
    	}

    	private function building(){}

    }
