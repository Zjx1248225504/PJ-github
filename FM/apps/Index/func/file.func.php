<?php
	namespace app\Index\func;
	//File 文件处理类函数
	class File {
		//遍历目录文件函数（只读取目录最外层内容,并处理输出变量值）
		public function readDirectory($path){
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
			closedir($handle);
			return $arr;
		}
		
		//转换文件字节大小函数
		public function Dw($size){
			$Dw = array("Byte","KB","MB","GB","TB","EB");
			$i = 0;
			while ($size >= 1024){
				$size = $size / 1024;
				$i++;
			}
			//取浮点数
			return round($size,2).$Dw[$i];
		}
		
		//测试函数
		public function test($test){
			
		}
	}
?>