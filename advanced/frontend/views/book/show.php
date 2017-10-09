
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
		</tr>
		<?php foreach($res as $key => $value){ ?>
			<tr>
			<td><?php echo $value['id']?></td>
			<td><?php echo $value['book_name']?></td>
			<td><?php echo $value['book_desc']?></td>
			
			</tr>
		<?php }?>
	</table>
	</center>
</body>
</html>