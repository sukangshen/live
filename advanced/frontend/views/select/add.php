<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
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
<h1 style="color:red">评论区</h1>
	<table>
		<tr>
			<td>序号</td>
			<td>评论的人</td>
			<td>评论的详情</td>
		</tr>
		<?php foreach ($data as $key => $value) {?>
		<tr>
			<td><?php echo $value['u_id'];?></td>
			<td><?php echo $value['name'];?></td>
			<td><?php echo $value['type'];?></td>
		</tr>

		<?php }?>
	</table>
	<?php 
echo linkPager::widget([
	'pagination' => $page,
	]);
?>
	</center>
</body>
</html>





</body>
</html>