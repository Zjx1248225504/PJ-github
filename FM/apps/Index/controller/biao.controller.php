<?php
//Index模块-file表格数据模块
	//载入函数
	require_once WWWROOT.'PJ/FM/apps/Index/func/File.php';
	//use 使用app\Index\func 命名空间中的Func类，并用Func替代
	use app\Index\func\File as File;
	
	//file 目录路径在 System_constant中设定
	$path = file;
	$Func = new File;
	$Rd = $Func -> readDirectory($path);
	
	//['file']与['dir']数组合并
	$Fd = array_merge($Rd['file'],$Rd['dir']);
	if($Fd){
		$i = 1;
		//foreach是一种遍历数组简便方法
		foreach($Fd as $val){
			$src = $path."/".$val;
			include WWWROOT.'PJ/FM/apps/Index/demo/biao.demo.php';
			$i++;
		}
	}
?>