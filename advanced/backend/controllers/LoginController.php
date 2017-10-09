<?php
namespace backend\controllers;
//显示页面的路径
use yii\web\Controller;
use yii\data\Pagination;
use yii\db\Query;
use db;
use yii\db\mssql\PDO;
use backend\models\User;
use yii;
//加载数据库
header("content-type:text/html; charset=utf-8");
class LoginController extends Controller
{
	public $enableCsrfValidation = false;
	//登录的展示
	public function actionLogin()
	{

	return $this->render('login');
	}

	//登录的方法
	public function actionLogindo()
	{

		$name = Yii::$app->request->post('name');
		$pass = Yii::$app->request->post('pass');
		//防sql注入
		$pdo = new PDO("mysql:host=47.94.108.20;port=3306;dbname=xiangmu","user","123456");
        $sql='select * from login where name = :name and pass = :pass';
        $pdoStatment = $pdo->prepare($sql); //预编译
        $pdoStatment->execute(array('name'=>$name,'pass'=>$pass)); //接收
        $res=$pdoStatment->fetch(); //取出结果
		// $res = Yii::$app->db->stateteCommand("select * from login where name='$name' and pass='$pass'")->queryOne();
		if ($res)
		{
		Yii::$app->session['user']=$res['u_id'];
        echo "<script>alert('登录成功');location.href='?r=admin/admin'</script>";
       }
       else
       {
       	echo "<script>alert('登录失败');location.href='?r=login/login'</script>";
       }
	}

	//注册的方法
	public function actionRegin()
	{
		//echo 1;
		return $this->render('regin');
	}

		//入库的方法
		public function actionRegindo()
	{

		//echo 1;
		$data= Yii::$app->request->post();
		//print_r($data);die;
		if (empty($data['name'])||empty($data['pass'])) 
		{
			echo "<script>alert('其中任意一个信息不能为空');location.href='?r=login/login'</script>";die;
		}
		else
		{
		$model = new User();
		$res = $model->regin($data);
		//print_r($res);die;
		if ($res) {
        echo "<script>alert('注册成功');location.href='?r=login/login'</script>";
       }
       else
       {
       	echo "<script>alert('祖册失败');location.href='?r=login/rogin'</script>";
       }
	}
}

		

}