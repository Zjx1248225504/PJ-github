<?php
	//创建命名空间
	//命名空间将代码划分出不同的空间（区域），每个空间的常量、函数、类 的名字互不影响
	namespace app\common\controller;
	
	//定义Index类,类名需要和文件名保持一致
	class Index {
		public function index() {
			return "this common Index index";
		} 
	}
?>