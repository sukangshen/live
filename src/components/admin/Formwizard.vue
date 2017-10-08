<template>
	<div>       
		<tr>
			<td>礼物名称</td>
			<td><input type="text"  v-model="newPerson.name"/></td>
		</tr>
		<tr>
			<td>礼物价值</td>
			<td><input type="text" v-model="newPerson.money"/></td>
		</tr>

		<tr>
			<td>礼物邮箱</td>
			<td><input type="text" v-model="newPerson.emile"/></td>
		</tr>

		<tr>
			<td>电话</td>
			<td><input type="text" v-model="newPerson.tel"/></td>
		</tr>


		<tr>
			<td></td>
			<td><button @click="createPerson">添加</button></td>
			
		</tr>	
		
	</div>
</template>


<script>
	export default {
data() {
    return {
            newPerson: {
                name: '',
                money: '',
                emile: '',
                tel: '',
                
            },        
}
 },
	methods: {
        createPerson: function(){

        this.$http.jsonp('http://www.cuishanjiang.com/?r=room/addgift',{params:this.newPerson}).then(function(response){ 	
//			this.people = response.data // 
//			this.a = response.data
//			alert('成功')
		}, function(response) 
		{ // 这里是处理错误的回调 
			console.log(response) 
			alert('成功');location.href='/#/tables';
		}); 
       }    
   }
}	
</script>

<style>
	/*@import '/static/assets/css/bootstrap.min.css';
	@import '/static/assets/css/font-awesome.min.css';
	@import '/static/assets/css/jquery-ui-1.10.3.custom.min.css';
	@import '/static/assets/css/chosen.css';
	@import '/static/assets/css/datepicker.css';
	@import '/static/assets/css/bootstrap-timepicker.css'
	@import '/static/assets/css/daterangepicker.css'
	@import '/static/assets/css/colorpicker.css';
	@import "http://fonts.googleapis.com/css?family=Open+Sans:400,300";
	@import '/static/assets/css/ace.min.css';
	@import '/static/assets/css/ace-rtl.min.css';
	@import '/static/assets/css/ace-skins.min.css';*/
</style>