<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
	//商品列表
	public function showlist(){
		$this->show('<h3>Home/Goods/showlist</h3>','utf-8');   
		echo U("Goods/detail");
	} 
	//商品详细信息
	public function detail(){
		$this->show('<h3>Home/Goods/detail</h3>','utf-8');   
	} 
}