<div id="Header">
    <!-- 公告 -->
    <div id="Notice">
        <div class="Notice-Box">
            <!-- 站点公告 -->
            <img class="Ico1" src="images/Notice.png" alt="">
            <span>
                站点公告&nbsp;:&nbsp;关于网站改版的通知&nbsp;2017年12月15日
            </span>
            <!-- 微信二维码 -->
            <a class="weixin" href="#">
                <div class="weixin">
                    扫码关注微信公众号
                </div>
                <img class="Ico2" src="images/weixin.png" alt="">
                <img class="ewm" src="images/ewm.jpg" alt="">
            </a>
        </div>
    </div>
    <!-- 头部 -->
    <div class="Header_box clearfix">
        <img id="Logo" src="images/logo.png" alt="">
        <form name="Search" method="post" action="">
            <input type="text" class="Search-text" placeholder="新闻&nbsp;&nbsp;热点资讯">
            <input type="submit" class="Search-bt" value="搜&nbsp;&nbsp;&nbsp;索">
        </form>
    </div>
</div>
<script>
    //Search提示文本替换
    $(".Search-text").focus(function (){
        $(".Search-text").attr("placeholder","请输入搜索内容");
    });
    $(".Search-text").blur(function (){
        $(".Search-text").attr("placeholder","新闻 热点资讯");
    });
    
</script>











