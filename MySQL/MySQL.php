<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
		<?php
			$servername = "localhost:3306";
			$username = "root";
			$password = "bj123456";
			
			//与MySQL创建连接 mysqli_connect()
			$conn = mysqli_connect($servername,$username,$password);
			
			//检测连接
			if ($conn->connect_error) {
			    die("连接失败: " . $con->connect_error . "<br/>");
			} else {
				echo "连接MySQL成功" . "<br/>";
			}
		//	if ($conn){
		//		echo "连接数据库成功" . "<br/>";
		//	} else {
		//		exit("连接数据库出错：" . mysqli_error() . "<br/>");
		//	}
			
			//创建数据库
		    $sql = "CREATE DATABASE mydb";

		    if ($conn->query($sql) == TRUE) {
		        echo "数据库创建成功". "<br/>";
		    } else {
		        echo "创建数据库失败: " . $conn->error . "<br/>";
		    }
		    //设置字符集
		    mysqli_query($conn,"set names 'gb2312'");
		    
			//选择数据库 mysqli_select_db()
			mysqli_select_db($conn,"mydb");
			
			//创建结果集
			$result = mysqli_query($conn,"Select * from test");
			
			//结果集转数组
			$row = mysqli_fetch_assoc($result);
			echo $row['char'].'+'.$row['int'].'+'.$row['float'];
			
			//断开连接
			$conn->close();
			//mysqli_close($conn);
		?>	
    </body>
</html>