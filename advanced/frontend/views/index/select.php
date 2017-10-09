<?php 
//加载控制器的分页的类
use yii\widgets\Linkpager;

?>
<a href="?r=book/type">进入新华书社</a>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
	<h1>书本的展示</h1>
	<table border="1">
		<tr>
			<td>图书的序号</td>
			<td>作者</td>
			<td>书名</td>
			<td>简介</td>
			<td>点赞</td>
			<td>福利</td>
			<td>操作</td>
		</tr>
		<?php foreach($data as $key => $value){ ?>
			<tr>
			<td><?php echo $value['id']?></td>
			<td><?php echo $value['name']?></td>
			<td><?php echo $value['bookname']?></td>
			<td><?php echo $value['text']?></td>
			<td><span class="box"  item="<?=$value['id']?>"><?=$value['like']?></span></td>
			<td><button class="hong" >红包</button></td>
		<td><a href="?r=index/del&id=<?php echo $value['id'];?>">删除</a>\<a href="?r=index/show&id=<?php echo $value['id'];?>">修改</a></td>
		

		</tr>
		<?php } ?>
	</table>

	<!-- 将分页的方法导入进来 -->
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


 		$(document).on('click','.box',function()
 		{
 		//取出方框里的值
 		var id=$(this).attr('item');
 		// var id=$(this).attr('item');
 		//给他一个唯一标识
 		var s=$(this);
 		//取到里面的值
 		var val = $(this).html();
 		//当点击一下的时候，里面的值加1
 		var e = parseInt(val)+1;
 		
 		$.ajax({
   		type: "POST",
   		url: "?r=index/dianzan",
   		data: {id:id,e:e},
   		dataType:"json",
   		success: function(msg){
   			//将span里面的值替换成加一的那个值
   			s.html(e);
   		}
});
 	})

 		$(document).on('click','.hong',function(){

 			
 			alert(suiji);



 		})

</script>

