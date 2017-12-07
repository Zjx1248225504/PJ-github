
//方法类

/*
媒体查询，改变html的fontSize 
*/
//jQuery 自运行函数写法
(function Rem(){
	//	设置页面总列数
    var colCount = 20;  
    //  动态设置列宽  
    var colWidth =  document.documentElement.clientWidth / colCount;
    //  确定html基本的font-size  
    document.querySelector('html').style.fontSize = colWidth + 'px';  
})();
