<?php
/**
 * Created by PhpStorm.
 * User: 李晨光
 * Date: 2017/6/13
 * Time: 19:24
 */

namespace frontend\models;
use yii\base\Model;
use yii;

class Login extends Model
{
        public $book_name;
        public $book_write;
        public $book_price;
        public $book_desc;

    public function rules(){
        return[
//            ['username','required','message'=>'用户名不能为空'],
//
//            ['verify','required','message'=>'验证码不能为空'],
//            ['verify','captcha'],
//            ['id','required','message'=>'身份证号不能为空'],
//            ['pwd','required','message'=>'密码不能为空'],
//            ['write_name','required','message'=>'笔名不能为空'],
//            [['id'],'match','pattern'=>'/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/','message'=>'身份证格式不正确'],
//            [['username'],'match','pattern'=>'/^([\u4e00-\u9fa5]){2,4}$/','message'=>'姓名格式不正确[2-4位中文]'],
//            [['write_name'],'match','pattern'=>'/^([\u4e00-\u9fa5]){2,8}$/','message'=>'笔名格式不正确[2-8位中文]'],
//            [['pwd'],'match','pattern'=>'/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,12}$/','message'=>'密码格式为[6-12]位字母和数字组成'],
        ];
    }
    public function attributeLabels(){
        return[
            'book_name'=>'书名',
            'book_write'=>'作者',
            'book_price'=>'价格',
            'book_desc'=>'简介',
        ];
    }
}