<?php
 header("content-type:text/html;charset=utf8");
 date_default_timezone_set('Asia/Shanghai');
 $title=trim($_POST['title']);
 $content=trim($_POST['content']);
 $time=date("y-m-d H:i:s");
 require_once 'init.php';
 $sql="insert into article(title,content,create_time) values('$title','$content','$time')";
 //echo $sql;
 $re=mysql_query($sql);//执行sql语句
 if($re){
  echo "发布成功";
  echo '<a href="articleList.php">返回文章列表</a>';
 }else{
  echo "发布失败";
  echo '<a href="articleList.php">返回文章列表</a>';
 }
 mysql_close();//关闭数据库
?>