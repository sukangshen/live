<?php
namespace backend\controllers;
//显示页面的路径
use yii\web\Controller;
use yii\data\Pagination;
use yii\db\Query;
use yii;
use backend\models\User;
use backend\models\Upload;
use backend\models\Yiishow;
//加载数据库

class AdminController extends CommenController
{
	public $enableCsrfValidation = false;

	//跳转页面
	public function actionAdmin()
	{
		//echo 1;
		return $this->render('index');
	}

	public function actionAdd_article_category()
	
	{
		//echo 1;
		return $this->render('add_article_category');
	}

	public function actionAdd_product_category()
	{
		//echo 1;
		return $this->render('add_product_category');
	}

	public function actionAddarticle()
	{
		//echo 1;
		return $this->render('addarticle');
	}

	public function actionAddmanager()
	{
		//echo 1;
		return $this->render('addmanager');
	}

	public function actionAddnav()
	{
		//echo 1;
		return $this->render('addnav');
	}

	public function actionFenlei()
	{
		//echo 1;
		return $this->render('fenlei');
	}

	public function actionAddpage()
	{
		//echo 1;
		return $this->render('addpage');
	}

	public function actionAddproduct()
	{
		//echo 1;
		return $this->render('addproduct');
	}

	//展示项目的方法
	public function actionArticle()
	{
	$sql = "select * from scenic";
	//链接数据库
	$db = Yii::$app->db;
	//执行sql语句
	$res = $db->createCommand($sql)->queryAll();
	return $this->render('article',['res'=>$res]);
	}

	public function actionArticle_category()
	{
		//echo 1;
		return $this->render('article_category');
	}

	public function actionBackup()
	{
		//echo 1;
		return $this->render('backup');
	}

	public function actionEditshow()
	{
		//echo 1;
		return $this->render('editshow');
	}

	public function actionManager()
	{
		//echo 1;
		$model = new user();
		$res = $model->select();
		return $this->render('manager',['res'=>$res]);
	}


	public function actionManager_log()
	{
		//echo 1;
		return $this->render('manager_log');
	}

	public function actionMobile()
	{
		//echo 1;
		return $this->render('mobile');
	}

	public function actionNav()
	{
		//echo 1;
		return $this->render('nav');
	}

	public function actionPage()
	{
		//echo 1;
		return $this->render('page');
	}

	public function actionProduct()
	{
		//echo 1;
		return $this->render('product');
	}

	public function actionProduct_category()
	{
		//echo 1;
		return $this->render('product_category');
	}

	public function actionShow()
	{
		//echo 1;
		return $this->render('show');
	}

	public function actionSystem()
	{
		//echo 1;
		return $this->render('system');
	}

	public function actionTheme()
	{
		//echo 1;
		return $this->render('theme');
	}


	public function actionYiishow()
	{
		$models=new Yiishow();
		$model = new Upload();
		return $this->render('yiishow',['models'=>$models,'model'=>$model]);
		//echo 1;
	}

	//返回商城首页
	public function actionShouye()
	{
		return $this->redirect('http://www.cuishanjiang.cn/frontend/web/index.php?r=muban/index');
		//echo 1;
	}
	
}