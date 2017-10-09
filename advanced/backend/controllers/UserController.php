<?php


namespace backend\controllers;

use yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\User;
header("content-type:text/html; charset=utf-8");
/**
 * Site controller
 */
class UserController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionManager_add()
	{
		//print_r($data);die;
		$model = new user();
		// print_r($model);die;
		$data = Yii::$app->request->post();
		$res=$model->user($data);
		//print_r($ar);die;
		if ($res) {
        echo "<script>alert('成功');location.href='?r=admin/manager'</script>";
       }
       else
       {
       	echo "<script>alert('添加失败');location.href='?r=admin/addmanager'</script>";
       }
	}

	
	//邮箱的方法
	public function actionEmail(){
	$mail= Yii::$app->mailer->compose(); 
	$mail->setTo('1421141443@qq.com'); //要发送给那个人的邮箱 
	$mail->setSubject("通缉令"); //邮件主题 
	$mail->setTextBody('北京市公安局'); //发布纯文字文本 
	$mail->setHtmlBody("云公刑缉〔2017〕2号 　　2017年6月23日，海淀第一监狱发生一起监狱服刑罪犯脱逃案件，犯罪嫌疑人崔陕江(系服刑罪犯)涉嫌脱逃罪。 　　犯罪嫌疑人崔陕江：男，汉族，25岁，高中文化，陕西省宝鸡市人，身份证号：61032419920701****。户籍地址：陕西省曲宝鸡市扶风县天度镇。体貌特征：身高1.78米，体型中等，方脸，后背有一约10厘米的烫伤疤。"); //发送的消息内容 
	var_dump($mail->send());
	}
}
?>