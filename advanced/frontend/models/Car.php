<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models;
/**
 * NewsSearch represents the model behind the search form about `frontend\models\News`.
 */
class Car extends Model
{
	//定义他的属性
	public $username;
	
	//规则的方法.固定的
	public function rules()
	{
		return [
		];
	}
	public function attributeLabels()
	{
		return [
		
		

		];
	}
	public function Age()
	{
			$str= array();
			for ($i=1; $i <100 ; $i++) 
		{ 
			$str[] =$i;
		}
			return $str;
	}

	
	public static function hobby($tablename,$parem)
	{
		//print_r($parem);die;
			$str = '';
			if(is_array($parem))
		{
			foreach ($parem as $value) 
		{
				$str.=','.$value;
		}
			$arr = substr($str,1);
			//print_r($arr);die;
			$sql = ' select '. $arr .' from '. $tablename;
			$res = Yii::$app->db->createCommand($sql)->queryAll();
			return $res;
		}
	}
	public function arr($res,$key,$val)
	{
			$arr = array();
			foreach ($res as $value) 
			{
				$arr[$value[$key]]=$value[$val];
			}
			return $arr;
	}
}