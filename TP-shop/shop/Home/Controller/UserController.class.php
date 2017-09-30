<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	//用户登录
	public function login(){
		$this->show('<h3>Home/User/dell</h3>','utf-8');   
	} 
	
	//用户注册
	public function register(){
		$this->show('<h3>Home/User/register</h3>','utf-8');   
	}
}