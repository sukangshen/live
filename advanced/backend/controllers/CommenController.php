<?php
namespace backend\controllers;
//显示页面的路径
use yii\web\Controller;
use yii\data\Pagination;
use yii\db\Query;
use yii;
//加载数据库

class CommenController extends Controller
{
	//public $enableCsrfValidation = false;
	public function beforeAction($action)
	{
		$user = Yii::$app->session->get('user');
		//验证用户是否登录//
		//$user = Yii::$app->session->get('user');
		if (empty($user))
		{
			echo "<script>alert('想跳墙，呵呵');location.href='?r=login/login'</script>";
		}else
		{
			return parent::beforeAction($action);
		}
	}
}