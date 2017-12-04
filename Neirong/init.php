<?php
 //http://www.jb51.net/article/70180.htm 使用说明
 //连接数据库
 //五步走
 //往数据库添加文章
 $conn=mysql_connect("localhost","root","");//链接数据库
 //echo $conn;
 $re=mysql_select_db("article");//选择数据库
 mysql_query("set names utf8");//设置交互字符集
?>