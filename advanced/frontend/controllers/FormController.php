<?php
namespace frontend\controllers;
//显示页面的路径
use yii\web\Controller;
//载入model层
use frontend\models\Form;
use yii\data\Pagination;
use yii\db\Query;
use yii;
//加载数据库

class FormController extends Controller
{
	public function actionForm()
	{
		//载入model 后面的参数是model的表名
		$model = new Form();
		$str=$model->age();
		$res = $model->hobby('hobby',['id','hobby']);
		$hobby=$model->arr($res,'id','hobby');
		return $this->render('index',['model'=>$model,'str'=>$str,'hobby'=>$hobby]);
	}
}