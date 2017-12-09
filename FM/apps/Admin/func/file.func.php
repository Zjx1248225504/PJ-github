<?php
	//转换文件字节大小函数
	function Dw($size){
		$Dw = array("Byte","KB","MB","GB","TB","EB");
		$i = 0;
		while ($size >= 1024){
			$size = $size / 1024;
			$i++;
		}
		//取浮点数
		return round($size,2).$Dw[$i];
	}
?>