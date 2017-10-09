<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>书名</td>
			<td>作者</td>
			<td>简介</td>
			<td>价格</td>
			<td>价格</td>
			<td>操作</td>
		</tr>

		<?php foreach($res as $key => $value){ ?>
			<tr><td><?php echo $value['id']?></td>
			<td><?php echo $value['name']?></td>
			<td><?php echo $value['bookname']?></td>
			<td><?php echo $value['text']?></td>
			<td><?php echo $value['price']?></td>
		<td><a href="?r=index/del&id=<?php echo $value['id'];?>">删除</a></td>
		<td><a href="?r=index/show&id=<?php echo $value['id'];?>">修改</a></td>
		</tr>
		<?php } ?>

	</table>
</body>
</html>