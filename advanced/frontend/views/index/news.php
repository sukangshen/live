<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<center>
	<form action="?r=index/newsadd" method="post">
		<table>
		<h1 style="color:red">翠山江的书店展示方法</h1>
			<tr>
				<td>作者</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>书名</td>
				<td><input type="text" name="bookname"></td>
			</tr>
			<tr>
				<td>简介</td>
				<td>
				<textarea name="text" cols="30" rows="10"></textarea>
				</td>
			</tr>
			<tr>
			<td>价格</td>
				<td><input type="text" name="price"></td>
				
			</tr>
			<tr>
				<td><input type="submit" value="提交"></td>
				<td></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>