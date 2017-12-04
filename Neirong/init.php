<?php
    //http://www.jb51.net/article/70180.htm 使用说明
    //连接数据库
    //五步走
    //往数据库添加文章
    $servername = "localhost:3306";
    $username = "root";
    $password = "bj123456";
    $conn = mysqli_connect($servername,$username,$password);//链接数据库
    //echo $conn;
    $re = mysqli_select_db($conn,"pdo121");//选择数据库
    mysqli_query($conn,'set names utf8');//设置交互字符集,防止插入数据库中的中文乱码
?>