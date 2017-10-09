<?php
namespace frontend\controllers;
//显示页面的路径
use yii\web\Controller;
//载入model层
use frontend\models\Biao;
use yii\data\Pagination;
use yii\db\Query;
use yii;
//加载数据库
//加载数据库

class BiaoController extends Controller
{
		//展示的页面
	public function actionBiao(){
		$model =new Biao();
		//print_r($model);die;
		//$data = $model->rules();
		return $this->render('biao',['model'=>$model]);
	}
}