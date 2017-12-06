<!-- 登录界面 -->
<div id="login">
    <div id="longin-1">
        <form name="login" method="post" action="index.php">
            <!-- LOGO -->
            <img src="images/LOGO3.ico.png"/>
            <!-- username、password -->
            <input type="text" name="username" placeholder="请输入用户名"/>
            <div ></div>
            <input type="password" name="password" placeholder="请输入密码"/>
            <div ></div>
            <input type="submit" value="Login"/>
        </form>
    </div>
</div>
<style tyle="text/css">
    #login {
        position:fixed;
        width: 100%; height: 100%;
        background: url(images/login/bg.jpg);
        background-size: auto 100%;
        background-repeat: no-repeat;
    }
    #longin-1 {
        width: 100%; height: 100%;
        //background-color: rgba(0,0,0,0.3);
    }
    #login form {
        width: 320px;
        background-color: rgba(255,255,255,0.5);
        border-radius: 25px;
        margin: 200px auto;
        padding: 40px 0;
        box-shadow: 5px 5px 5px #000;
    }
    #login form img {
        display: block;
        width: 60%;
        margin: 0 auto 20px;
        //padding-top: 25px;
    }
    #login form input {
        width: 170px;
        display: block;
        margin: 15px auto;
        padding: 6px 15px; 
        background-color: rgba(255,255,255,0.8);
        border-radius: 10px;
    }
    #login form input {
        width: 170px;
        display: block;
        margin: 15px auto;
        padding: 6px 15px; 
        background-color: rgba(255,255,255,0.8);
        border-radius: 10px;
    }
    #login form input:focus {
        box-shadow: 0 0 30px #505050;-moz-transition:all .3s;-webkit-transition:all .3s;-transition:all .3s;
    }
    #login form input[type="submit"] {
        width: 200px;
        padding: 6px 15px; 
        background: #505050;
        color: #fff;
    }
</style>
<!--Index模块->file表格header模块demo js-->
<script>
    
</script>