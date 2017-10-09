<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 文章列表 </title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/jquery.autotextarea.js"></script>
</head>
<body>
<div id="dcWrap">
 <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="images/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul>
    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
     <div class="drop mTopad"><a href="product.php?rec=add">商品</a> <a href="article.php?rec=add">文章</a> <a href="nav.php?rec=add">自定义导航</a> <a href="show.html">首页幻灯</a> <a href="page.php?rec=add">单页面</a> <a href="manager.php?rec=add">管理员</a> <a href="link.html"></a> </div>
    </li>
    <li><a href="../index.php" target="_blank">查看站点</a></li>
    <li><a href="index.php?rec=clear_cache">清除缓存</a></li>
    <li><a href="http://help.douco.com" target="_blank">帮助</a></li>
    <li class="noRight"><a href="module.html">DouPHP+</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
     <div class="drop mUser">
      <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
      <a href="manager.php?rec=cloud_account">设置云账户</a>
     </div>
    </li>
    <li class="noRight"><a href="login.php?rec=logout">退出</a></li>
   </ul>
  </div>
 </div>
</div>

<!-- dcHead 结束 --> 
<div id="dcLeft">
<div id="menu">
 <ul class="top">
  <li><a href="?r=admin/index"><i class="home"></i><em>管理首页</em></a></li>
 </ul>
 <ul>
  <li><a href="?r=admin/system"><i class="system"></i><em>系统设置</em></a></li>
  <li><a href="?r=admin/nav"><i class="nav"></i><em>自定义导航栏</em></a></li>
  <li><a href="?r=admin/show"><i class="show"></i><em>首页幻灯广告</em></a></li>
  <li><a href="?r=admin/page"><i class="page"></i><em>单页面管理</em></a></li>
 </ul>
   <ul>
  <li><a href="?r=admin/product_category"><i class="productCat"></i><em>商品分类</em></a></li>
  <li><a href="?r=admin/product"><i class="product"></i><em>商品列表</em></a></li>
 </ul>
  <ul>
  <li><a href="?r=admin/article_category"><i class="articleCat"></i><em>文章分类</em></a></li>
  <li><a href="?r=admin/article"><i class="article"></i><em>项目列表</em></a></li>
 </ul>
   <ul class="bot">

  <li><a href="?r=admin/manager"><i class="manager"></i><em>网站管理员</em></a></li>
  <li><a href="?r=upload/upload"><i class="managerLog"></i><em>旅游项目添加</em></a></li>
 

 </ul>
</div>
</div>




 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>文章列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="addarticle.html?rec=add" class="actionBtn add">添加文章</a>文章列表</h3>
    <div class="filter">
    <form action="article.php" method="post">
     <select name="cat_id">
      <option value="0">未分类</option>
                  <option value="1"> 公司动态</option>
                        <option value="2"> 行业新闻</option>
                 </select>
     <input name="keyword" type="text" class="inpMain" value="" size="20" />
     <input name="submit" class="btnGray" type="submit" value="筛选" />
    </form>
    <span>
        <a class="btnGray" href="article.php?rec=sort">开始筛选首页文章</a>
        </span>
    </div>
        <div id="list">
    <form name="action" method="post" action="article.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
      <th width="40" align="center">编号</th>
      <th align="left">项目的名称</th>
      <th width="150" align="center">添加日期</th>
      <th width="80" align="center">项目联系电话</th>
      <th width="80" align="center">项目的价格</th>
      <th width="80" align="center">项目的介绍</th>
      <th width="80" align="center">项目展示</th>
     </tr>


      <?php 
      foreach($res as $key => $value){ 
        ?>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="10" /></td>
      <td align="center">10</td>
      <td><a href="article.php?rec=edit&id=10"><?php echo htmlspecialchars($value['scenic_name']);?></a></td>
      <td align="center"><a href="article.php?cat_id=1"><?php echo htmlspecialchars($value['open_time']);?></a></td>
      <td align="center"><?php echo htmlspecialchars($value['scenic_tel']);?></td>
      <td align="center"><?php echo htmlspecialchars($value['scenic_price']);?></td>
      <td align="center"><?php echo htmlspecialchars($value['scenic_name']);?></td>
      <td align="center"><a href=""><img src="<?php echo $value['file'];?>" style="height:50px;width:100px"></a></td>
      <td align="center">
        <a href="article.php?rec=edit&id=10">编辑</a> | <a href="article.php?rec=del&id=10">删除</a>
             </td>
     </tr>
      <?php }?>


         </table>
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0">请选择...</option>
      <option value="del_all">删除</option>
      <option value="category_move">移动分类至</option>
     </select>
     <select name="new_cat_id" style="display:none">
      <option value="0">未分类</option>
                  <option value="1"> 公司动态</option>
                        <option value="2"> 行业新闻</option>
                 </select>
     <input name="submit" class="btn" type="submit" value="执行" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <div class="pager">总计 10 个记录，共 1 页，当前第 1 页 | <a href="article.php?page=1">第一页</a> 上一页 下一页 <a href="article.php?page=1">最末页</a></div>           </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
 <script type="text/javascript">
 
 onload = function()
 {
   document.forms['action'].reset();
 }

 function douAction()
 {
     var frm = document.forms['action'];

     frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
 }
 
 </script>
</body>
</html>