<?php
/**
 * Created by PhpStorm.
 * User: 李晨光
 * Date: 2017/6/7
 * Time: 8:38
 */

namespace frontend\controllers;
use yii;
use yii\web\Controller;
//use db;
use frontend\models\Order;
use frontend\models\Login;
use yii\data\Pagination;
class LoginController extends Controller{
    public function init(){
        $this->enableCsrfValidation=false;
    }

    //视图
    public function actionLogin(){
      return $this->render('login');
    }
    //接收数据
    public function actionLogin_reg(){
            $username=yii::$app->request->post('username');
            $pwd=yii::$app->request->post('pwd');
//            print_r($username);die;


        $post=yii::$app->db->createCommand("select * from login where username='$username' and pwd='$pwd'")->queryOne();
        //设置session
        $session = \Yii::$app->session;
        // print_r($db);die;
        $session->set('u_id',$post['id']);

        //Yii::$app->session['id']=$post['u_id'];
//            print_r($post);die;

             if($post){
                 echo "<script>alert('登陆成功');location.href='?r=login/book'</script>";
             }else{
                 echo "<script>alert('登陆失败，用户名或者密码错误');location.href='?r=login/login'</script>";
             }

    }


    
    //添加数据页面
    public function actionBook(){
        $model = new Login();
       return $this->render('book',['model'=>$model]);
    }
    //添加数据信息
    public function actionAdd(){

           if($arr = Yii::$app->request->post('Login')){
               $db=Yii::$app->db;
               $data=$db->createCommand()->insert('book',$arr)->execute();
    //           print_r($data);die;
              if($data){
                  echo "<script>alert('添加成功');location.href='?r=login/show'</script>";
              }else{
                  echo "<script>alert('添加失败');location.href='?r=login/add'</script>";
              }
           }
        }

//     //分页展示
//     public function actionShow(){
//         $test = new Order();
// //        print_r($test);die;
//         $total_count=$test->find()->count();
//         $data['pages'] = new Pagination(['totalCount' => $total_count]);
//         $data['pages']->defaultPageSize = 5;
//         $book_list = $test->find()->offset($data['pages']->offset)->limit($data['pages']->limit)->asArray()->all();
// //        print_r($book_list);die;
//         $data['pages']->params=array("tab"=>'all');
//         return $this->render('show',['data' => $data, 'book_list' => $book_list, ]);
//     }
//     //删除
//         public function actionDel(){
//             $id=yii::$app->request->get('id');
// //            print_r($id);die;
//             $db=yii::$app->db->createCommand()->delete('book',array('id'=>$id))->execute();
//             if($db){
//                 echo"<script>alert('删除成功');location.href='?r=login/show'</script>";
//             }else{
//                 echo"<script>alert('删除失败');location.href='?r=login/show'</script>";
//             }
//         }
//     //修改
//     public function actionUpdate(){
//         $id=yii::$app->request->get('id');
// //        print_r($id);die;
//         return $this->render('update_reg',array('goods_id'=>$id));
//     }
//     public function actionUpdate_reg(){
//         $arr = yii::$app->request->post();
//         print_r($arr);die;
//     }
//     //点赞
//     public function actionZan()
//     {
//         $arr = yii::$app->request->post();
//         $u_id=\Yii::$app->session->get('u_id');
//         $sql="select num,u_id from book where id=".$arr['id'];
//         $data = yii::$app->db->createCommand($sql)->queryOne();
//         //print_r($data);die;
//         $data['num'] = $arr['num']+1;
//         $sql1 ="update book set num=".$data['num'].",u_id=".$u_id." where id=".$arr['id'];
//         $add = yii::$app->db->createCommand($sql1)->execute();
//         if($add)
//         {
//             echo 1;
//         }else
//         {
//             echo 0;
//         }
//     }
//     //作者
//     public function actionWrite_show(){
//         $model = new Login();
//         return $this->render('write_show',['model'=>$model]);
//     }
//     //红包
//     public function actionBao(){
//         $total=100;//红包总金额
//         $num=2;// 分成红包个数
//         $min=0.01;//每个人最少能收到0.01元

//         for ($i=1;$i<$num;$i++){
//             $safe_total=($total-($num-$i)*$min)/($num-$i);//随机安全上限
//             $money=mt_rand($min*100,$safe_total*100)/100;
//             $total=$total-$money;
// //            print_r($total);die;

//             echo '恭喜你抢到'.$i.'个红包：'.$money.' 元 <br>';
//         }

//        // echo '第'.$num.'个红包：'.$total.' 元，余额：0 元';

//     }

}