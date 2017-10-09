<?php 

namespace frontend\controllers;

use Yii;
use think\db;
use yii\web\Controller;
/**
 * Site controller
 */
header('content-type:textml;charset=utf8');
class RoomController extends Controller
{
    //注册添加
    public function actionAdd()
    {
        $arr = Yii::$app->request->get();
        $zz="/^[a-zA-Z0-9]{3,9}$/";
     if(empty($arr['username']))
     {
         $array['content']="参数不能为空";
         $array['code'] = "101";
         exit($_GET['callback'].'('.json_encode($array).')');
     }elseif(!preg_match($zz, $arr['username']))
     {
         $array['content']="参数有误(必须在3-9位之间)";
         $array['code'] = "103";
         exit($_GET['callback'].'('.json_encode($array).')');
     }else
     {
         $sel = "select * from user WHERE username = '".$arr['username']."'";
         $sql =  Yii::$app->db->createCommand($sel)->queryOne();
        if($sql)
        {
            $array['content']="用户名已存在";
            $array['code'] = "108";
            exit($_GET['callback'].'('.json_encode($array).')');
        }else{
            $arr['time'] = time();
            $add = Yii::$app->db->createCommand()->insert('room',['username'=>$arr['username'],'room_time'=>$arr['time']])->execute();
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
    //分页查询
    public function actionSel()
    {
        $arr = yii::$app->request->get();
        $db = yii::$app->db;
        $name = yii::$app->request->get('name') ? yii::$app->request->get('name') : '';
        $page = yii::$app->request->get('page') ? yii::$app->request->get('page') : 1;
        
        $num  = 3;
        $a = yii::$app->db->createCommand( "select count(id) from gift where name like '%$name%'")->queryAll();
        $sum = $a[0]['count(id)'];
        $sum_page = ceil($sum/$num);
        $limit = ($page-1)*$num;
        
        $data['prev']=$page-1<0?0:$page-1;
        $data['next']=$page+1>=$sum_page?$sum_page:$page+1;
        $data['end'] = $sum_page;
        $data['page'] = $page;
        if (yii::$app->request->get('id')) {
            $id = Yii::$app->request->get('id');
            $res = $db->createCommand("select * from gift where id=$id and name like '%$name%' limit $limit,$num")->queryAll();
        }else{
            $res = $db->createCommand("select * from gift where  name like '%$name%' limit $limit,$num")->queryAll();
        }

        if ($res) {
          $data['data']=$res;
          $data['error']=1;
        }else{
            $data['error']=0;
        }



         exit($_GET['callback'].'('.json_encode($data).')');

    }
    //删除
    public function actionDel()
    {
        //接ID值
       $arr = array();
       $id = Yii::$app->request->get('id');

        if(empty($id))
        {
          $arr['content']="参数不能为空";
          $arr['code'] = "101";
          exit($_GET['callback'].'('.json_encode($arr).')');
        }else{
            $del= Yii::$app->db->createCommand()->delete('gift',['id'=>$id])->execute();
            if($del)
            {

               
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

    //礼物添加
    /**
     * 礼物添加
     * @echo [type] [description]
     */
    public function actionAddgift()
    {
        $call = Yii::$app->request->get('callback');
        $data = Yii::$app->request->get();
        
        unset($data['r'],$data['callback']);
        $res=Yii::$app->db->createCommand()->insert('gift',$data)->execute(); 
        if ($res)
        {
            echo "<script>alert('成功');location.href='/#/tables'</script>";
        }else
        {
            echo 0;
        }
        
    }


    //搜索的方法
   

}