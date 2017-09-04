<!DOCTYPE html>
<?php
	//载入框架 系统常量
	require_once 'System_constant.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>文件管理器</title>
		<link rel="stylesheet" href="css/CssReset.css">
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
		<?php
			//加载Index模块->file表格数据模块
			include 'apps/Index/controller/file.controller.php';
		?>
	</body>
</html>
