<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models;
use db;
/**
 * NewsSearch represents the model behind the search form about `frontend\models\News`.
 */
class Add extends Model
{
	public $username;
	public $password;
		//添加的Model
	public function relus(){
	return [
['username','match','pattern'=>"/^[a-zA-z][a-zA-Z0-9_]{2,9}$/",'message'=>'不能为英文,2-9位'],
		];
	}

	public static function add($res){

		//print_r($res);die;
		return $data = Yii::$app->db->createCommand()->insert('add',$res)->execute();
	}

	public function attributeLabels()
	{
		return [
		];

}