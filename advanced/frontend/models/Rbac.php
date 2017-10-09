<?php

namespace frontend\models;

use Yii;
use db;
use yii\base\Model;
// use yii\data\ActiveRbac;
use frontend\models;
/**
 * NewsSearch represents the model behind the search form about `frontend\models\News`.
 */
class Rbac extends Model
{	
	public $role;
	public $power;
	public $user;
	public function rules(){
	return [

		];
	}

	public function attributeLabels()
	{
		return [
		'role'=>'创建角色的名字',
		'power'=>'创建权限的名字',
		'user'=>'用户',

		];
	}

	//查询所有的角色名字
	public static function getrole($tablename){
		//查出所有的角色的名字,
		$sql = "select name from $tablename where type=1";
		//执行sql语句
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		return $data;
	}

	//查询所有的权限名字
	public static function getpower($tablename){
		//查出所有的角色的名字,
		$sql = "select name from $tablename where type=2";
		//执行sql语句
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		return $data;
	}

	public static function rolepower($role,$power){
		$arr =array(); 
		//分别循环角色，和权限，然后把他们混合在一起
		foreach ($role as $key => $value) {
			foreach ($power as $key => $v) {
				$arr[] = array($value,$v);
			}
		}
		return $arr;
		//print_r($arr);die;
	}

	//给用户分配角色
	public static function getuser($tablename){
		//查出所有的角色的名字,
		$sql = "select id,username from $tablename";
		//执行sql语句
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		return $data;
	}
}