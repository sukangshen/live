<?php 

namespace frontend\controllers;

use Yii;
use think\db;
use yii\web\Controller;
/**
 * Site controller
 */
header('content-type:textml;charset=utf8');
class IndexController extends Controller
{
    //添加
    public function actionAdd()
    {
        $arr = Yii::$app->request->get();
        $zz="/^[a-zA-Z0-9]{3,9}$/";
     if(empty($arr['class_name']))
     {
         $array['content']="参数不能为空";
         $array['code'] = "101";
         exit($_GET['callback'].'('.json_encode($array).')');
     }elseif(!preg_match($zz, $arr['class_name']))
     {
         $array['content']="参数有误(必须在3-9位之间)";
         $array['code'] = "103";
         exit($_GET['callback'].'('.json_encode($array).')');
     }else
     {
         $sel = "select * from live_class WHERE class_name = '".$arr['class_name']."'";
         $sql =  Yii::$app->db->createCommand($sel)->queryOne();
        if($sql)
        {
            $array['content']="用户名已存在";
            $array['code'] = "108";
            exit($_GET['callback'].'('.json_encode($array).')');
        }else{
            $arr['class_addTime'] = time();
            $add = Yii::$app->db->createCommand()->insert('live_class',['class_name'=>$arr['class_name'],'class_addTime'=>$arr['class_addTime']])->execute();
            if($add)
            {
                $array['content']="添加成功";
                $array['code'] = "100";
                exit($_GET['callback'].'('.json_encode($array).')');
            }else{
                $array['content']="添加失败";
                $array['code'] = "102";
                exit($_GET['callback'].'('.json_encode($array).')');
            }
        }
     }
    }
    //查询
    public function actionSel()
    {

       // $sel = "select * from live_class";
       //  $sel = Yii::$app->db->createCommand($sel)->queryAll();
       //  if($sel)
       //  {
       //      exit($_GET['callback'].'('.json_encode($sel).')');
       //  }
        $page = yii::$app->request->get('page') ? yii::$app->request->get('page') : 1;
        $num  = 3;
        $a = yii::$app->db->createCommand('select count(clas_id) from live_class')->queryAll();
        $sum = $a[0]['count(clas_id)'];
        $sum_page = ceil($sum/$num);
        $limit = ($page-1)*$num;
        $data['arr']=Yii::$app->db->createCommand("select * from live_class limit $limit,$num")->queryAll();
        $data['prev']=$page-1<0?0:$page-1;
        $data['next']=$page+1>=$sum_page?$sum_page:$page+1;
        $data['end'] = $sum_page;
        $data['page'] = $page;
         exit($_GET['callback'].'('.json_encode($data).')');

    }
    //删除
    public function actionDel()
    {
        //接ID值
       $arr = array();
       $id = Yii::$app->request->get();
        if(empty($id))
        {
          $arr['content']="参数不能为空";
          $arr['code'] = "101";
          exit($_GET['callback'].'('.json_encode($arr).')');
        }else{
            $del= Yii::$app->db->createCommand()->delete('live_class',['clas_id'=>$id])->execute();
            if($del)
            {
                $arr['content']="删除成功";
                $arr['code']   ="100";
                exit($_GET['callback'].'('.json_encode($arr).')');
            }
            else{
                $arr['content']="删除失败";
                $arr['code']   ="102";
                exit($_GET['callback'].'('.json_encode($arr).')');
            }
        }
    }

}
