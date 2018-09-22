<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
	
		$this->display();
	}
	
	public function login(){
	
		if (!$_POST) $this->error('页面不存在!');
    	$admin_name = I('admin_name');
    	$admin_psw = I('admin_psw','','md5');
		
    	$user = M('jt_admin_user')->where(array('admin_name' => $admin_name))->find();
    	//echo M('jt_admin_user')->_sql();
		
		if (!$user || $user['admin_psw'] != $admin_psw){
    		$this->error('账号或密码错误!');
    	}
    	if ($user['lock']=='2') $this->error('用户已锁定');

    	$data = array(
    		'admin_id' => $user['admin_id'],
    		'admin_lasttime' => time(),
    		'admin_lastip' => get_client_ip(),
    	);
    	M('jt_admin_user')->save($data);
    	cookie('admin_id', $user['admin_id']);
    	
        cookie('admin_name', $user['admin_name']);
    	cookie('admin_lasttime', date('Y-m-d H:i:s', $data['admin_lasttime']));
    	cookie('admin_lastip', $user['admin_lastip']);
		cookie('lever', $user['lever']);
		
		$this->redirect('Index/index');
	}
	
	 /**
    * 退出登陆
    */
    public function logout() {
       /* session_unset();
        session_destroy();*/
        cookie('admin_id', null);
     
        $this->redirect('Login/index');
    }
}