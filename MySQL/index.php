<?php
	$servername = "localhost:3306";
	$username = "root";
	$password = "bj123456";
	
	// // 一、MySQLi 面向对象
	// // 创建连接
	// $conn = new mysqli($servername, $username, $password);
	// // 检测连接
	// if ($conn->connect_error) {
	// 	die("连接失败: " . $conn->connect_error);
	// }
	// echo "连接成功";
	// 关闭连接
	// $conn->close();

	// // 二、MySQLi 面向过程
	// // 创建连接
	// $conn = mysqli_connect($servername, $username, $password);
	// // 检测连接
	// if (!$conn) {
	// 	die("Connection failed: " . mysqli_connect_error());
	// }
	// echo "连接成功";
	// 关闭连接
	// mysqli_close($conn);

	// 三、PDO
	try {
		$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
		echo "连接成功<br/>";
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE PDO121";
	
		// 使用 exec() ，因为没有结果返回
		$conn->exec($sql);
	
		echo "数据库创建成功<br/>";
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	// 关闭连接
	$conn = null;



?>