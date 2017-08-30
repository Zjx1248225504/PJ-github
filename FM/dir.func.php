<?php
//存放目录相关操作函数
	function readDirectory(){
		//打开指定目录,遍历目录函数
		$handle = opendir($path);
		while (($item = readdir($handle)) !== file){
			//屏蔽.与..这两个特殊字符
			if($item != "." && $item != ".."){
				if(is_file($path."/".$item)){
					$arr['file'][] = $item; 
				}	
				if(is_dir($path."/".$item)){
					$arr['dir'][] = $item; 
				}
			}
		}
		closedir($handel);
		return $arr;
	}
	$path = __FILE__;
	print_r(readDirectory($path));
?>