<?php
	function readDirectory($path){
		//打开指定目录,遍历目录函数
		$handle = opendir($path);
		while (($item = readdir($handle)) !== false){
			//屏蔽.与..这两个特殊字符
			if ($item != "." && $item != ".."){
				if (is_file ($path . "/" . $item)){
					$arr ['file'] [] = $item; 
				}	
				if (is_dir ($path . "/" . $item)){
					$arr ['dir'] [] = $item; 
				}
			}
		}
		closedir ($handle);
		return $arr;
	}
//	$path = 'file';
//	print_r(readDirectory($path));
?>