<?php


namespace frontend\models;
use yii\base\Model;
use frontend\models;
use yii\data\ActiveDataProvider;
use yii;
use db;

/**
* 
*/
class Book extends Model
{
   public $book_name;
   public $book_desc;
   public $hobby;
   public function rules()
    {
        return[
        ];
    }

   public function attributeLabels(){
    return [
    'book_name'=>'书名',
    'book_desc'=>'书的简介',
    'hobby'=>'类型',
    ];
   }
}