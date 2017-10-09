<?php

namespace frontend\controllers;
//显示页面的路径
use yii\web\Controller;
use yii\data\Pagination;
use yii\db\Query;
use yii;
use frontend\models\Upload;
use frontend\models\Yiishow;
//加载数据库
//header("content-type:text/html; charset=utf-8");
class MubanController extends Controller
{
	public $enableCsrfValidation = false;

	//跳转页面
	public function actionYuzhou()
	{
		//echo 1;
		return  $this->renderPartial('yuzhou');
	}


	public function actionIndex()
	{
		//echo 1;
		return  $this->renderPartial('index');
	}

	public function actionAbout()
	{
		//echo 1;
		return $this->renderPartial('about');
	}

	public function actionCodes()
	{
		//echo 1;
		return $this->renderPartial('codes');
	}

	public function actionContact()
	{
		//echo 1;
		return $this->renderPartial('contact');
	}

		public function actionGallery()
	{
		//echo 1;
		return $this->renderPartial('gallery');
	}

		public function actionRestaurant()
	{
		//echo 1;
		return $this->renderPartial('restaurant');
	}

		public function actionRooms()
	{
		//echo 1;
		return $this->renderPartial('rooms');
	}

		//后台链接
		public function actionHoutai()
	{
		//echo 1;
		return $this->redirect('http://www.cuishanjiang.cn/backend/web/index.php?r=login/login');
	}
}