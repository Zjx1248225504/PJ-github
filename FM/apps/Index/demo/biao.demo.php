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
	<td><?php if(is_readable($src)){echo '<img width="20%" src="images/correct.ico.png"/>';} else {echo '<img width="20%" src="images/error.ico.png"/>';}?></td>
	<!--文件可写-->
	<td><?php if(is_writable($src)){echo '<img width="20%" src="images/correct.ico.png"/>';} else {echo '<img width="20%" src="images/error.ico.png"/>';}?></td>
	<!--文件可执行-->
	<td><?php if(is_executable($src)){echo '<img width="20%" src="images/correct.ico.png"/>';} else {echo '<img width="20%" src="images/error.ico.png"/>';}?></td>
	<!--文件创建时间-->
	<td><?php echo date("Y-m-d H:i:s",filectime($src));?></td>
	<!--文件修改时间-->
	<td><?php echo date("Y-m-d H:i:s",filemtime($src));?></td>
	<!--文件访问时间-->
	<td><?php echo date("Y-m-d H:i:s",fileatime($src));?></td>
	<!--操作-->
	<td><?php echo 1;?></td>
</tr>