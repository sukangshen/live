<?php 
namespace backend\controllers;
//显示页面的路径
use yii\web\Controller;
use yii\data\Pagination;
use yii\db\Query;
use yii;
use backend\models\User;
use backend\models\Upload;
use backend\models\Yiishow;
use yii\web\UploadedFile;
class UploadController extends CommenController
{
    public $enableCsrfValidation = false;
    //上传
    public function actionUpload()
    {
        $model= new Upload();
        $models =new Yiishow();
//        print_r($models);die;
        if (Yii::$app->request->isPost) 
        {
            $model->file = UploadedFile::getInstances($models,'file');
            if ($models->upload())
            {
                yii::$app->getSession()->setFlash('success','上传成功');
            }
            else
            {
                yii::$app->getSession()->setPlash('error','上传失败，请重试');
            }
        }
        return $this->render('upload',['model'=>$model,'models'=>$models]);
    }

    //上传
    public function actionGetlv()
    {

        $model = new Upload();
        if (Yii::$app->request->isPost) 
        {
            $arr=Yii::$app->request->post('Yiishow');
            $model->file = UploadedFile::getInstances($model, 'file');
//         var_dump($model->file);die;
//            print_r($model->upload());die;
            $path=$model->upload();

            $arr['file']=$path[0];
            if (empty($path))
            {
                
            }
            //print_r($arr);die;
             $re=Yii::$app->db->createCommand()->insert('scenic',$arr)->execute();
           // var_dump($re);die;
             if ($re) 
             {
                echo "<script>alert('成功');location.href='?r=admin/article'</script>";
            }
            }
        //die;
        $data=yii::$app->request->post();
    }

    public function actionAdd()
    {
        if($arr = Yii::$app->request->post())
        {
            //print_r($arr);die;
            $db=Yii::$app->db;
            $data=$db->createCommand()->insert('scenic',$arr)->execute();
            //print_r($data);die;
            if($data)
            {
                echo "<script>alert('添加成功')</script>";
            }
            else
            {
                echo "<script>alert('添加失败');location.href='?r=login/add'</script>";
            }
        }
    }
        //下载
       public function actionXiazai(){
        $res = \YII::$app->response;
        $res->sendFile('uploads/IMG_2488.jpg');
    }
}
?>