<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use db;


class IndexController extends Controller
{


	public function actionIndex()
	{
		
		$callback = isset($_GET['callback']) ? $_GET['callback'] : '';
		$posts = Yii::$app->db->createCommand('SELECT * FROM user')->queryAll();
		echo $callback.'('.json_encode($posts).')';
	}

	public function actionLogin()
	{
		$callback = isset($_GET['callback']) ? $_GET['callback'] : '';
		$username = $_GET['username'];
		$pwd = $_GET['pwd'];
	
		$sql = " SELECT * FROM user where username = '$username' or email = '$username' and password = '$pwd'";
		$post = Yii::$app->db->createCommand($sql)->queryOne();
		if ($post) {
			echo $callback.'('.json_encode(1).')';
		}
	}

	public function actionDel()
	{
		$callback = isset($_GET['callback']) ? $_GET['callback'] : '';
		$id = $_GET['id'];
		$sql = " delete from user where id = $id";
		echo $sql;die;
		$post = Yii::$app->db->createCommand($sql)->execute();
		if ($post) {
			echo $callback.'('.json_encode(1).')';
		}
	}
}


?>