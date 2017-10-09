<?php
/**
 * Created by PhpStorm.
 * User: 李晨光
 * Date: 2017/6/15
 * Time: 10:49
 */

namespace backend\models;
use yii\base\Model;
use yii\web\UploadedFile;

class Upload extends Model{
    public $file;

    public function rules()
    { return [
        [
            ['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],];
    }
    public function attributeLabels(){
        return[
            'file'=>'上传图片（做多4张）'
        ];
    }
    public function upload(){
//        return $this->validate();
        if ($this->validate()) {

            if(!file_exists('uploads')){
                mkdir('uploads');
            }
            $path=array();
            foreach ($this->file as $file) {
                $file_path='uploads/'. $file->baseName . '.' . $file->extension;
               $file->saveAs($file_path);
                $path[]=$file_path;
                
            }
            return $path;

        }
        else {
            return false;
        }
    }
}
