<!--Index模块-file表格主体-->
<tr class="text-center Tb">
	<!--编号-->
	<td><?php echo $i;?></td>
	<!--名称-->
	<td><?php echo $val;?></td>
	<!--类型-->
	<!--<td><?php echo '<img src="'.$src.'"/>';?></td>-->
	<td><?php if(filetype($src) == "file"){echo '<img title="这是一个文件" src="images/file.ico.png"/>';} else {echo '<img title="这是一个文件夹" src="images/dir.ico.png"/>';}?></td>
	<!--大小-->
	<td><?php echo $Func -> Dw(filesize($src));?></td>
	<!--文件可读-->
	<td><?php if(is_readable($src)){echo "可读";} else {echo "不可读";} ?></td>
	<!--文件可写-->
	
	<!--文件可执行-->
</tr>