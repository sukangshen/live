<?php 
//加载控制器的分页的类
use yii\widgets\Linkpager;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<center>
<h1 style="color:red">点赞区</h1>
	<table>
		<tr>
			<td>序号</td>
			<td>笑话的作者</td>
			<td>笑话的详情</td>
			<td>笑话的名字</td>
			<td>点赞</td>
			<td>评论表</td>

		</tr>
		<?php foreach ($data as $key => $value) {?>
		<tr>
			<td><?php echo $value['id'];?></td>
			<td><?php echo $value['name'];?></td>
			<td><?php echo $value['text'];?></td>
			<td><?php echo $value['bookname'];?></td>
			<td><span class="btn" item="<?php echo $value['id'];?>"><?php echo $value['like'];?></span></td>

		</tr>

		<?php }?>
<a href="?r=select/add">评论列表</a>
	</table>
	<?php 
echo linkPager::widget([
	'pagination' => $page,
	]);
?>
	</center>
</body>
</html>


<script src="jquery-1.8.3.min.js"></script>

<script>
$(document).on('click','.btn',function(){
	var id = $(this).attr('item');
	var val= $(this).html();
	var s = $(this);
	var e = parseInt(val)+1;
	$.ajax({
   		type: "POST",
   		url: "?r=select/dianzan",
   		data: {id:id,e:e},
   		dataType:"json",
   		success: function(msg){
   			//将span里面的值替换成加一的那个值
   			s.html(e);
   		}
});
})


</script>
