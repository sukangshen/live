<template>
  <div class="Tables">

　　　　　　　

                <span class="input-icon">
		<input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text"v-model="sear" @blur="sea">搜索
		<i class="icon-search nav-search-icon"></i>
								</span>

<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Simple &amp; Dynamic</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text">
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="icon-double-angle-right"></i>
									Static &amp; Dynamic Tables
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>

<!-- 搜索<input type="text"> -->






													<tr>
														<th class="center">
															<label>
																<input class="ace" type="checkbox">
																<span class="lbl"></span>
															</label>
														</th>
														<th>用户id</th>
														<th>用户姓名</th>
														<th class="hidden-480">礼物价格</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															邮箱
														</th>
														<th class="hidden-480">电话</th>

														<th></th>
													</tr>
												</thead>




												<tbody>



<tr v-for="data in arr">



<td class="center">
<label><input class="ace" type="checkbox"> 
<span class="lbl"></span></label>
</td> 
<td>
<a href="#">{{data.id}}</a></td> 
<td>{{data.name}}</td> 
<td class="hidden-480">{{data.money}}</td> 
<td>{{data.emile}}</td> 
<td class="hidden-480">
<span class="label label-sm label-success">{{data.tel}}</span></td> 
<td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
<button class="btn btn-xs btn-success">



<i class="icon-ok bigger-120"></i></button> 

<a href="http://localhost:8080/index.html#/Formwizard">添加礼物</a>

<a href="http://localhost:8080/index.html#/update"><button class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></button> </a>


<button class="btn btn-xs btn-danger" v-on:click="del(data)">
<i class="icon-trash bigger-120">


</i></button> <button class="btn btn-xs btn-warning">
<i class="icon-flag bigger-120">
</i></button>
</div> 
<div class="visible-xs visible-sm hidden-md hidden-lg">
<div class="inline position-relative">
<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
<i class="icon-cog icon-only bigger-110"></i></button> 
<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close"><li>
<a href="#" data-rel="tooltip" title="" data-original-title="View" class="tooltip-info"><span class="blue">
<i class="icon-zoom-in bigger-120"></i>
</span></a>
</li>
 <li><a href="#" data-rel="tooltip" title="" data-original-title="Edit" class="tooltip-success"><span class="green"><i class="icon-edit bigger-120"></i>
</span></a></li> <li><a href="#" data-rel="tooltip" title="" data-original-title="Delete" class="tooltip-error"><span class="red"><i class="icon-trash bigger-120">
</i></span>
</a></li>
</ul></div></div>
</td>
</tr>

	
					
												</tbody>
											</table>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->

								<div class="hr hr-18 dotted hr-double"></div>

								<!-- <h4 class="pink">
									<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
									<a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
								</h4> -->


								<!-- <div class="hr hr-18 dotted hr-double"></div> -->


								<!-- <div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">jQuery dataTables</h3>
										<div class="table-header">
											Results for "Latest Registered Domains"
										</div>

										</div>
									</div>
								</div> -->

		

<ul class="pagination">
<li><a href="javascript:;">&laquo;</a></li>
<li><a href="javascript:;" @click="page(1)">首页</a></li>
<li><a href="javascript:;" @click="page(prev)">上一页</a></li>
<li><a href="javascript:;" @click="page(next)">下一页</a></li>
<li><a href="javascript:;" @click="page(end)">尾页</a></li>
	<li><a href="#">&raquo;</a></li>
</ul>




								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
 
  </div>


</template>


<script>


export default {
  data() {
    return {
      arr: [],
      sear:'',
      prev:1,
      next:2,
      end:'',
    }
  },




//分页的方法
 mounted:function(page) { 
	this.$http.jsonp('http://www.cuishanjiang.com/?r=room/sel', {params:{name:this.sear}},{ 
		headers: { }, emulateJSON: true }).then(function(response){ // 这里是处理正确的回调 
		console.log(response)
		this.arr=response.body.data
		this.prev=response.body.prev
		this.next=response.body.next
		this.end=response.body.end
	
//	this.articles = response.data["subjects"] //也可以 
	}, function(response) 
	{ // 这里是处理错误的回调 
		console.log(response) 
	}); 
},


//删除的方法
methods:{
	del:function(data)
	{
       this.$http.jsonp('http://www.cuishanjiang.com/?r=room/del&id='+data.id, {},{ 
		headers: { }, emulateJSON: true }).then(function(response)
{ // 这里是处理正确的回调 
	
	this.arr = response.data // 
//	this.articles = response.data["subjects"] //也可以 
	}, function(response) 
	{ // 这里是处理错误的回调 
		console.log(response)
		 alert('成功');location.href='/#/tables';

	});  
	},

	//分页替换的方法
	 page:function(page) { 
	this.$http.jsonp('http://www.cuishanjiang.com/?r=room/sel', {params:{page:page,name:this.sear}},{ 
		headers: { }, emulateJSON: true }).then(function(response){ // 这里是处理正确的回调 
		console.log(response)
		this.arr=response.body.data
		this.prev=response.body.prev
		this.next=response.body.next
		this.end=response.body.end
	
//	this.articles = response.data["subjects"] //也可以 
	}, function(response) 
	{ // 这里是处理错误的回调 
		console.log(response) 
	}); 
},

//搜索的失焦事件
sea:function()
{
	this.$http.jsonp('http://www.cuishanjiang.com/?r=room/sel', {params:{name:this.sear}},{ 
		headers: { }, emulateJSON: true }).then(function(response){ // 这里是处理正确的回调 
		console.log(response)
		this.arr=response.body.data
		this.prev=response.body.prev
		this.next=response.body.next
		this.end=response.body.end
	
//	this.articles = response.data["subjects"] //也可以 
	}, function(response) 
	{ // 这里是处理错误的回调 
		console.log(response) 
	}); 

}
}


//搜索的方法

}





</script>




