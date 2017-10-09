<?php
namespace frontend\controllers;
//显示页面的路径
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Add;
use yii\db\Query;
use yii;
use db;
//加载数据库
	//
class AddController extends Controller
{
	//public $enableCsrfValidation = false;
		//添加的方法
	public function actionAdd(){
		$model = new Add();
		return $this->render('add',['model'=>$model]);
	}

	public function actionAdddo(){
		$data = Yii::$app->request->post('Add');
		// var_dump($data);die;
		//print_r($data);die;
		$model = new Add();
		$res = $model->add($data);
	}

	public function actionSdo(){
		return $this->render('sdo');
	}

	public function actionSdoadd(){
		$id = Yii::$app->request->post('bianji');
		print_r($id);die;
	}

}