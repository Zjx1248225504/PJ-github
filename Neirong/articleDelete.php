<?php
 header("content-type:text/html;charset=utf8");
 require_once 'init.php';
 $id=(int)$_GET['id'];
 $sql="delete from article where id = '$id'";
 //echo $sql;
 $re=mysql_query($sql);
 if($re){
  echo "删除成功";
  echo "<a href='articleList.php'>返回文章列表</a>";
 }else{
  echo "删除失败";
  echo "<a href='articleList.php'>返回文章列表</a>";
 }
?>