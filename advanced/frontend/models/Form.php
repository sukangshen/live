<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models;
/**
 * NewsSearch represents the model behind the search form about `frontend\models\News`.
 */
class Form extends Model
{
	//定义他的属性
	public $username;
	public $password;
	public $email;
	public $age;
	public $sex;
	public $hobby;
	//规则的方法.固定的
	public function rules()
	{
		return [
		['username','match','pattern'=>"^[a-zA-z][a-zA-Z0-9_]{2,9}$",'message'=>'用户名不能是空的,2-9位'],
		['password','match','pattern'=>"/^[a-zA-Z\d_]{8,}$/",'message'=>'密码长度必须八维'],
		['email','match','pattern'=>"/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/",'message'=>'邮箱的格式不正确']
		];
	}
	public function attributeLabels()
	{
		return [
		'username'=>'用户名字',
		'password'=>'密码',
		'email'=>'邮箱',
		'sex'=>'性别',
		'hobby'=>'爱好',

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