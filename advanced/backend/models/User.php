<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
//use frontend\models;
/**
 * NewsSearch represents the model behind the search form about `frontend\models\News`.
 */
class User extends Model
{

	//添加的model
	public function user($data)
{
	return $res = Yii::$app->db->createCommand()->insert('login',$data)->execute();
}

	//展示的model
	public function select()
{
	$sql = "select * from login ";
	return $res = Yii::$app->db->createCommand($sql)->queryAll();
}

	//注册的方法
	public function regin($data)
{
	return $res = Yii::$app->db->createCommand()->insert('login',$data)->execute();
}
}
