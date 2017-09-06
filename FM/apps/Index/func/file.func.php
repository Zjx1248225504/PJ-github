<?php
	namespace app\Index\func;
	//系统工具类函数
	class Fun {
		public function AlertMes($mes){
			echo "<script type='text/javascript'>alert('{$mes}');</script>";
		}
	}
	
	//File 文件处理类函数
	class File {
		//遍历目录文件函数（只读取目录最外层内容,并处理输出变量值）
		public function ReadDirectory($path){
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
		
		//在指定目录中创建新文件
		public function CreateFile($path,$filename){
			//1、验证文件名的合法性（是否包含特殊字符）
			$pattern = "/[\/,\*,<>,\?\|]/";
			//进行正则表达式匹配，成功返回 1 ，否则返回 0
			//basename()返回路径中的文件名部分
			if (preg_match($pattern, basename($filename))){
				return "非法文件名(文件名中不能包含/\*<>?|)哦~";
			}else{
				//2、检测当前目录下是否存在同名文件
				if (file_exists($filename)){
					return "文件已存在，请重命名后重新创建~";
				}else{
					//通过touch($filename)来创建文件
					touch($path.$filename);
					if(touch($path.$filename)){
						return "文件创建成功~";
					}else{
						return "文件创建失败~";
					}
				}
			}		
		}
		
		//测试函数
		public function Test($test){
			
		}
	}
?>