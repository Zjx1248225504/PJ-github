<!--Index模块->file表格->顶部导航栏-->
<ul id="top" class="center-block clearfix" style="width: 100%;">
	<li><a href="<?php echo 'index.php';?>">主目录</a></li>
	<li><span class="sp1">新建文件</span></li>
	<li><span class="sp2">新建文件夹</span></li>
	<li><span class="sp3">上传文件</span></li>
	<li><span class="sp4">返回上级目录</span></li>
</ul>
<!--导航二级菜单-->
<!--新建文件-->
<div class="top21 center-block clearfix">
	<input type="text" name="filename" placeholder="请输入文件名称"/>
	<input type="hidden" name="src"/>
	<input type="hidden" name="act"/>
	<input type="submit" value="创建文件"/>
</div>
<!--新建文件夹-->
<div class="top22 center-block clearfix">
	<input type="text" name="filename" placeholder="请输入文件夹名称"/>
	<input type="hidden" name="src"/>
	<input type="hidden" name="act"/>
	<input type="submit" value="创建文件夹"/>
</div>


<!--Index模块->file表格->顶部导航栏样式-->
<style type="text/css">
	#top {
		background: linear-gradient(to bottom,#333333,#000000);
	}
	#top li{
		float: left;
	}
	#top li a,span{
		display: block; padding: 10px 30px; color: #FFFFFF; font-style: inherit; text-decoration:none;
	}
	#top li a:hover,span:hover{
		color: #999999; background: linear-gradient(to bottom,#000000,#222222); cursor: pointer;
	}
	#top li .Active{
		color: #999999; background: linear-gradient(to bottom,#000000,#222222);
	}
	/*新建文件*/
	.top21,.top22 {
		display: none; width: 98%; background-color: #C0C0C0; padding: 8px 1%;
	}
	.top21 input[type=text],.top22 input[type=text] {
		background-color: #FFFFFF; padding: 0.25% 0.5%; border-radius: 6px;
	}
	.top21 input[type=submit],.top22 input[type=submit] {
		background-color: #333333; color: #FFFFFF; padding: 0.25% 0.5%; border-radius: 6px;
	}
	.top21 input[type=submit]:hover,.top22 input[type=submit]:hover {
		background-color: #FFFFFF; color: #333333;
	}
	/*新建文件夹*/
	
</style>
<!--Index模块->file表格header模块demo js-->
<script>
	//顶部导航栏元素
	var sp1 = $('.sp1'),sp2 = $('.sp2'),sp3 = $('.sp3'),sp4 = $('.sp4');
	//导航二级菜单
	var top21 = $('.top21'),top22 = $('.top22');
	sp1.click(function(){
		sp1.addClass('Active'); sp2.removeClass('Active');
		top21.show(0); top22.hide(0);
	});
	sp2.click(function(){
		sp2.addClass('Active'); sp1.removeClass('Active');
		top22.show(0); top21.hide(0);
	});
	sp3.click(function(){
		sp1.removeClass('Active'); sp2.removeClass('Active');
		top21.hide(0); top22.hide(0);
	});
	sp4.click(function(){
		sp1.removeClass('Active'); sp2.removeClass('Active');
		top21.hide(0); top22.hide(0);
	});
</script>



