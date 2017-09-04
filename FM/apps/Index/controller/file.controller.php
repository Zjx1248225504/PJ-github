<!--Index模块->file表格数据模块-->
<?php
	//载入函数
	require_once 'apps/Index/func/file.func.php';
	//use 使用app\Index\func 命名空间中的File类，并用File替代
	use app\Index\func\File as File;
?>
<div class="center-block" style="width: 98%; text-align: center;">
	<h1 class="center-block" style="width: 30%;">在线文件管理系统</h1>
</div>
<?php
	include WWWROOT.'PJ/FM/apps/Index/demo/file-head.demo.php';
?>
<table width="98%" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF" align="center">
	<tr class="text-center Th">
		<td>编号</td>
		<td>名称</td>
		<td>类型</td>
		<td>大小</td>
		<td>可读</td>
		<td>可写</td>
		<td>可执行</td>
		<td>创建时间</td>
		<td>修改时间</td>
		<td>访问时间</td>
		<td>操作</td>
	</tr>
	<?php
		//file 目录路径在 System_constant中设定
		$path = FILE;
		$File = new File;
		$Rd = $File -> readDirectory($path);
		
		//['file']与['dir']数组合并
		$Fd = array_merge($Rd['file'],$Rd['dir']);
		if($Fd){
			$i = 1;
			//foreach是一种遍历数组简便方法
			foreach($Fd as $val){
				$src = $path."/".$val;
				include WWWROOT.'PJ/FM/apps/Index/demo/file.demo.php';
				$i++;
			}
		}
	?>
</table>