<div id="Header">
    <div class="Header_box clearfix">
        <img id="Logo" src="images/logo.png" alt="">
        <form name="Search" method="post" action="">
            <input type="text" class="Search-text" placeholder="新闻&nbsp;&nbsp;热点资讯">
            <input type="submit" class="Search-bt" value="搜&nbsp;&nbsp;&nbsp;索">
        </form>
    </div>
</div>
<script>
    //Search
    $(".Search-text").focus(function (){
        $(".Search-text").attr("placeholder","请输入搜索内容");
    });
    $(".Search-text").blur(function (){
        $(".Search-text").attr("placeholder","新闻 热点资讯");
    });
    
</script>











