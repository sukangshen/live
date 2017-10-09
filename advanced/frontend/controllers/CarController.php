<?php
namespace frontend\controllers;
//显示页面的路径
use yii\web\Controller;
//载入model层
use frontend\models\Car;
use yii\data\Pagination;
use yii\db\Query;
use yii;
//加载数据库

class CarController extends Controller
{
	//停车的展示的方法
	public function actionIndex(){
		return $this->render('index');
	}

	public function actionCar()
	{
		$sql = "select * from car";
		//链接数据库
		$db = Yii::$app->db;
		//执行sql语句
		$res = $db->createCommand($sql)->queryAll();
		return $this->render('car',['res'=>$res]);
		//载入model 后面的参数是model的表名
	}

	public function actionCardo(){
		$data = Yii::$app->request->post();
		$id = $data['id'];
		$like = $data['e'];
		$res = Yii::$app->db->createCommand()->update('car',['like'=>$like],'id='.$id)->execute();
		//print_r($data);die;
		if ($res) 
		{
			echo 1;
		}
		else
		{
			echo 2;
		}
	}

}