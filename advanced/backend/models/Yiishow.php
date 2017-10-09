<?php

namespace backend\models;

use yii\base\Model;

/**
 * NewsSearch represents the model behind the search form about `frontend\models\News`.
 */
class Yiishow extends Model
{
	public $scenic_name;
	public $open_time;
	public $scenic_tel;
	public $scenic_price;
	public $scenic_message;
	//public $file;
	public function rules(){
		return [

		];
	}
	public function attributeLabels(){
		return [
		'scenic_name'=>'商品的名字',
		'open_time'=>'商品的添加的时间',
		'scenic_tel'=>'商家的电话',
		'scenic_price'=>'商品的价格',
		'scenic_message'=>'商品的属性',
		];
	}



}