<?php
	//载入类文件
	require 'Employee.class.php';
	
	//实例化类,创建对象
	$e1 = new Employee('张小萌','21');
	$e1 -> introduce();
	echo '<br/>';
	$e2 = new Employee('张萌萌','22');
	$e2 -> introduce();
	
	//TEST
	//var_dump()用于输出对象
	echo '<pre>' . var_dump($e1) . var_dump($e2) . '</pre>';
	
	$Test = new Test;
	$Test -> test1();
?>
