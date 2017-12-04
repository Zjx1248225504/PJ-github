<!--Index模块->file表格数据模块-->
<?php
	//载入工具类函数
	require_once 'apps/Index/func/file.func.php';
	//use 使用app\Index\func 命名空间中的File类，并用File替代
	use app\Index\func\File as File;
	use app\Index\func\Fun as Fun;
	$File = new File;
	$Fun = new Fun;
	//file 目录路径
	$path = 'file/';
?>
<!--<div class="center-block" style="width: 98%; text-align: center;">
	<h1 class="center-block" style="width: 30%;">在线文件管理系统</h1>
</div>-->

<!--加载顶部导航栏模块-->
<?php
	header("content-type:text/html;charset=utf8");
	include 'apps/Index/demo/file-head.demo.php';
	//1、判断顶部菜单选项点击
	if(isset($_POST['NewFile'])){
		$act = $_POST['Act']; 
		$filename = $_POST['FileName'];
		//echo "<script>alert('{$File -> CreateFile($path,$filename)}');</script>";
		//运行新建文件函数，并跳出提示信息
		$File -> CreateFile($path,$filename);
		$Fun -> AlertMes($File -> CreateFile($path,$filename));
	}
?>
<!--加载文件数据表格模块-->
<table width="100%" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF" align="center">
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
		//2、展示file 目录路径中的文件数据
		$Rd = $File -> ReadDirectory($path);
		//['file']与['dir']数组合并
		$Fd = array_merge($Rd['file'],$Rd['dir']);
		if($Fd){
			$i = 1;
			//foreach是一种遍历数组简便方法
			foreach($Fd as $val){
				$src = $path."/".$val;
				include 'apps/Index/demo/file.demo.php';
				$i++;
			}
		}
		
	?>
</table>

<style type="text/css">
	.Th {
		background: linear-gradient(to bottom,#000000,#333333); color: #FFFFFF;
	}
	.Th td:hover {
		background: linear-gradient(to bottom,#333333,#000000);
	}
</style>

