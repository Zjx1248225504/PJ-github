<?php
	$path = '/file/';
//	if ($dh = opendir($path)){
//	    while (($file = readdir($dh)) !== false){
//	    	if($file != "." && $file != ".."){
//	    		echo "filename:" . $file . "<br>";
//	    	}
//	    }
//	    closedir($dh);
//	}
	
	function readDirectory(){
		//打开指定目录,遍历目录函数
		$handle = opendir($path);
//		while (($item = readdir($handle)) !== false){
//			//屏蔽.与..这两个特殊字符
//			if($item != "." && $item != ".."){
//				if(is_file($path."/".$item)){
//					$arr['file'][] = $item; 
//				}	
//				if(is_dir($path."/".$item)){
//					$arr['dir'][] = $item; 
//				}
//			}
//		}
//		closedir($handel);
//		return $arr;
	}
	
	readDirectory();
	//print_r(readDirectory($path));
?>