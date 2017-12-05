<?php
    namespace apps\Index\MySQL_func;
    //MySQL类函数
    class MySQLfunc {
    //$ConnName 为数据库连接信息
        public $ConnName;

    //数据库操作 Query(数据库名,SQL语句);
        public function Query($Base,$Sql) {
            $ConnName = $this -> ConnName;
            $conn = mysqli_connect($ConnName[0],$ConnName[1],$ConnName[2]);
            $re = mysqli_select_db($conn,$Base);//选择数据库
            //mysqli_query($conn,$Sql);//数据库操作
            $Data = mysqli_query($conn,$Sql);//数据库操作
            mysqli_close($conn);
            return $Data;
        }


    
























    
    /* 以下为测试用方法 */
    //数据库连接测试 Test(MySQL地址,用户名,密码,数据库名);
        public function Test($servername,$username,$password,$base) {
            $conn = mysqli_connect($servername,$username,$password);//链接MySQL
            $re = mysqli_select_db($conn,$base);//选择数据库
            mysqli_query($conn,'set names utf8');//设置交互字符集,防止插入数据库中的中文乱码
            if ($conn -> connect_error) {
                return "连接失败: " . $con->connect_error;
            } else {
                return "连接MySQL成功";
            }
        }
    //关闭数据库 Close(MySQL地址,用户名,密码,数据库名);
        public function Close($servername,$username,$password,$base) {
            $conn = mysqli_connect($servername,$username,$password,$base);
            mysqli_close($conn);
        }

    }
?>