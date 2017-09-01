<!DOCTYPE html>
<?php
	
	require_once 'dir.func.php';
		$path = "file";
		$Rd = readDirectory($path);
	require_once 'file.func.php';
		
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>文件管理器</title>
		<link rel="stylesheet" href="css/CssReset.css">
		<link rel="stylesheet" href="css/index.css">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">-->
	</head>
	<body>
		<h1>在线文件管理</h1>
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
				//数组合并
//				$Fd = array_merge($Rd['file'],$Rd['dir']);
//				//print_r($Fd);
//				if($Fd){
//					$i = 1;
//					//foreach是一种遍历数组简便方法
//					foreach($Fd as $val) {
//						$src = $path."/".$val;
//						include 'apps/Index/demo/biao.php';
//						$i++;
//					}
//				}
				
				
				
				
			?>
		</table>
	</body>
</html>
