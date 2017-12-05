<!-- Login 登录界面模块 -->
<?php
//载入工具类函数
	require_once 'apps/Index/func/FM.func.php';
        use apps\Index\func\Fun as Fun;
        $Fun = new Fun;
    require_once 'apps/Index/func/MySQL.func.php';
        use apps\Index\MySQL_func\MySQLfunc as MySQLfunc;
        $Mf = new MySQLfunc;
//加载login界面
    include 'apps/Index/demo/login.demo.php';
    //配置数据库连接信息
    $Mf -> ConnName = array("localhost:3306","root","bj123456");
    //设置交互字符集,防止插入数据库中的中文乱码
    $Mf -> Query("fm",'SET NAMES utf8');
    $Date = $Mf -> Query("fm",'SELECT * FROM fm_user');
    //echo gettype($Date) . '<br/>';
    //MySQL结果集转数组
    $a = array();
    while($row = mysqli_fetch_array($Date)) {
        array_push($a,$row);
        echo $row[1] . '</br>';      
    }
    
   
?>


























