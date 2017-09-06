<!--Index模块->file表格->顶部导航栏-->
<ul id="top" class="center-block clearfix" style="width: 100%;">
	<li class="Logo"><a href="<?php echo 'index.php';?>"><img src="images/LOGO.ico.png"/></a></li>
	<li><span class="CreateFile">新建文件</span></li>
	<li><span class="CreateDir">新建文件夹</span></li>
	<li><span class="sp3">上传文件</span></li>
	<li><span class="sp4">返回上级目录</span></li>
</ul>
<!--导航二级菜单-->
<!--新建文件表单-->
<form action="#" method="post">
	<div class="CreateFile2 center-block clearfix">
		<input type="text" name="FileName" placeholder="请输入文件名称"/>
		<input type="hidden" name="Act" value="CreateFile"/>
		<input type="submit" name="NewFile" value="创建文件"/>
	</div>
</form>
<!--新建文件夹表单-->
<form action="#" method="post">
	<div class="CreateDir2 center-block clearfix">
		<input type="text" name="DirName" placeholder="请输入文件夹名称"/>
		<input type="hidden" name="Act" value="CreateDir"/>
		<input type="submit" name="NewDir" value="创建文件夹"/>
	</div>
</form>

<!--Index模块->file表格->顶部导航栏样式-->
<style type="text/css">
	#top {
		background: linear-gradient(to bottom,#333333,#000000);
	}
	#top .Logo a{
		padding: 10px 20px;  
	}
	#top .Logo a img{
		width: 30px;  
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
	.CreateFile2,.CreateDir2 {
		display: none; width: 98%; background:  linear-gradient(to bottom,#a3a3a3,#656565);; padding: 8px 1%;
	}
	.CreateFile2 input[type=text],.CreateDir2 input[type=text] {
		background-color: #FFFFFF; padding: 0.25% 0.5%; border-radius: 6px;
	}
	.CreateFile2 input[type=submit],.CreateDir2 input[type=submit] {
		background-color: #333333; color: #FFFFFF; padding: 0.25% 0.5%; border-radius: 6px;
	}
	.CreateFile2 input[type=submit]:hover,.CreateDir2 input[type=submit]:hover {
		background: linear-gradient(to bottom,#000000,#333333);
	}
	/*新建文件夹*/
	
</style>
<!--Index模块->file表格header模块demo js-->
<script>
	//顶部导航栏元素
	var CreateFile = $('.CreateFile'),CreateDir = $('.CreateDir'),sp3 = $('.sp3'),sp4 = $('.sp4');
	//导航二级菜单元素
	var CreateFile2 = $('.CreateFile2'),CreateDir2 = $('.CreateDir2');
	
	CreateFile.click(function(){
		//顶部导航菜单选项被选择后类名改变
		CreateFile.addClass('Active'); CreateDir.removeClass('Active');
		//二级菜单显示隐藏
		CreateFile2.show(0); CreateDir2.hide(0);
	});
	CreateDir.click(function(){
		CreateDir.addClass('Active'); CreateFile.removeClass('Active');
		CreateDir2.show(0); CreateFile2.hide(0);
	});
	sp3.click(function(){
		CreateFile.removeClass('Active'); CreateDir.removeClass('Active');
		CreateFile2.hide(0); CreateDir2.hide(0);
	});
	sp4.click(function(){
		CreateFile.removeClass('Active'); CreateDir.removeClass('Active');
		CreateFile2.hide(0); CreateDir2.hide(0);
	});
</script>



