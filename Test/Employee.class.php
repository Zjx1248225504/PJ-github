<?php
	//定义类
	class Employee {
		//定义类属性
		private $_name;
		private $_age;
		//定义类方法
		public function introduce() {
			//$this 为当前对象Employee;
			echo '姓名:'.$this->_name.'<br/>'.'年龄'.$this->_age.'<br/>';
		}
		//__construct()构造函数
		public function __construct($name,$age) {
			//初始化操作,为私有属性赋值:
			$this -> _name = $name;
			$this -> _age = $age;
		}
		//__destruct()析构函数
		public function __destruct() {
		    //清理操作
		    echo 'destruct;' . '<br/>';
		}
	}
	
	class Test {
		function test1() {
			echo 'Test'.'<br/>';
		}
	}
?>