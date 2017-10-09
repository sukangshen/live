<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
//use frontend\models;
/**
 * NewsSearch represents the model behind the search form about `frontend\models\News`.
 */
class Biao extends Model
{
	//定义他的属性
	public $username;
	//public $password;
	public function rules(){
		return [
		];
	}
}

?>