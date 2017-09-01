<?php
	//遍历目录文件函数（只读取目录最外层内容,并处理输出变量值）
	function readDirectory($path){
		//opendir() 打开指定目录
		$handle = opendir($path);
		//readdir() 返回指定目录中下一个文件的文件名
		while (($item = readdir($handle)) !== false){
			//屏蔽.与..这两个特殊字符
			if ($item != "." && $item != ".."){
				if (is_file ($path . "/" . $item)){
					$arr['file'] [] = $item; 
				}	
				if (is_dir ($path . "/" . $item)){
					$arr['dir'] [] = $item; 
				}
			}
		}
		//closedir() 关闭指定目录
		closedir($handle);
		return $arr;
	}
?>