<!--Developed by ChristianSwift. All right reserved.-->
<html style="background:url(yuzhou/assets/bg.png) ; background-repeat:repeat">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<!--Title and Favicon-->
<meta charset="UTF-8">
<title>陕江的自创项目特效</title>

<!--Audio Play-->
<audio autoplay>
	<source src="yuzhou/assets/theme.mp3" type="audio/mpeg" />
	Your browser does not support the audio element.
</audio>

<!--jQuery-->
<script src="yuzhou/js/jquery-2.1.3.min.js"></script>

<!--SweetAlert Files-->
<script src="yuzhou/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="yuzhou/dist/sweetalert.css">

<!--Star War Script CSS-->
<link rel="stylesheet" type="text/css" href="yuzhou/css/starwar.css" />

<!--Auto Finish-->
<!--<script type="text/javascript"> 
	setTimeout(window.location.href='http://www.baidu.com',3); 
</script>-->
</head>

<body><script src="yuzhou/demos/googlegg.js"></script>

<!--instruction-->
<center><em style="color:rgba(255,255,255,0.3);font-size:2px;font-style:normal">点击任意位置进入首页！</em></center>

<!--Click to jump-->
<script>
	document.onclick = redirect;

	function redirect() {
		swal({
				title: "通知",
				text: "是否进入项目首页？",
				//type: "info",
				showCancelButton: true,
				closeOnConfirm: false,
				showLoaderOnConfirm: true,
			},
			function() {
				setTimeout(window.location.href = '?r=muban/index', 1);
			});
	}
</script>

<!--Blue font before all start-->
<div style="overflow:hidden; position:absolute; left:0; top:0; width:50px; height:25px;"></div>

<p id="start">在很久很久以前<br/> far away&hellip;</p>

<!--title-->
<h1>陕江的生涯<sub>Simulation</sub></h1>

<div id="titles">
	<div id="titlecontent">

		<!--subtitle-->
		<p class="center">shanjiang cui III<br /> 热血语录</p>

		<!--article-->
		<p style="text-indent : 1em">2017年在神奇的中关村出现了一位神秘的人物，那么问题来了，他是谁呢，没错，他就是崔陕江</p>

		<p style="text-indent : 1em">来源：<a href="http://www.cuishanjiang.cn/frontend/web/?r=muban/index" target="_blank">崔陕江</a></p>

		<p style="text-indent : 1em">In 2017, a mysterious figure appeared in the magical Zhongguancun, and then the question came, who was he? Yes, he was Cui Shanjiang </p>

		<p style="text-indent : 1em">点击屏幕进入项目网站首页，&hellip;</p>

	</div>
</div>

</body>
</html>