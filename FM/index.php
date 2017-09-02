<!DOCTYPE html>
<?php
	//载入框架常量
	require_once 'System_constant.php';
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
				//加载Index模块-file表格数据模块
				include 'apps/Index/controller/biao.controller.php';
				
			?>
		</table>
	</body>
</html>
