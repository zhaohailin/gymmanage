<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }
    public function login(){
    	$this->display();
    }
    public function verify(){
        $config = array(
        	"expire" => 600, 
        	"useCurve" => false,
            "fontSize" => 26,
            "length" => 4,
        );
        $verify = new \Think\Verify($config);
        $verify->entry();
    }

}