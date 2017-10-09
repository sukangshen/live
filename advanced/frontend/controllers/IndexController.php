<?php
namespace frontend\controllers;
//显示页面的路径
use yii\web\Controller;
use yii\data\Pagination;
use yii\db\Query;
use yii;
//加载数据库

class IndexController extends Controller
{
	public $enableCsrfValidation = false;

	//跳转页面
	public function actionIndex()
	{
	$sql = "select * from user";
	//链接数据库
	$db = Yii::$app->db;
	//执行sql语句
	$res = $db->createCommand($sql)->queryAll();
	return $this->render('index',['res'=>$res]);
	}

	//删除的方法
	public function actionDel()
	{
	//接收id
	$id = Yii::$app->request->get('id');
	$db = Yii::$app->db->createCommand()->delete('news',array('id' =>$id))->execute();
	
		if ($db) 
		{
        echo "<script>alert('成功');location.href='?r=index/select'</script>";
       }
       else
       {
       	echo "<script>alert('删除失败');location.href='?r=index/del'</script>";
       }
	}

	//添加的方法
	public function actionAdd(){
		//跳转到添加的页面
		return $this->render('add');
	}
	public function actionAdds()
	{
		$data = Yii::$app->request->post();
		//print_r($data);die;
		$res = Yii::$app->db->createCommand()->insert('user',$data)->execute();
		if ($res) {
		echo "成功";
		}else{
		echo "失败";
		}
		
	}

	//修改的方法
	public function actionShow(){
		//接收id
		$id = Yii::$app->request->get('id');
		//print_r($id);die;
		//修改展示的方法
		//查询单条的数据
		$data = Yii::$app->db->createCommand('select * from news where id='.$id)->queryOne();
		//print_r($data);die;
		return $this->render('upshow',['data'=>$data]);
	}

	//修改的执行
	public function actionUpshow(){
		$id = Yii::$app->request->post('id');
		$data = Yii::$app->request->post();
		$res = Yii::$app->db->createCommand()->update('news',$data,'id='.$id)->execute();
		//print_r($id);die;
		if ($res) 
		{
        echo "<script>alert('成功');location.href='?r=index/index'</script>";
       }
       else
       {
       	echo "<script>alert('删除失败');location.href='?r=index/show'</script>";
       }
	}

	//登录的方法
	public function actionLogin()
	{
		return $this->render('login');
	}

	//登录验证的方法
	public function actionLoginadd()
	{
		$name = Yii::$app->request->post('name');
		$pass = Yii::$app->request->post('pass');

		//print_r($data);die;
		$res = Yii::$app->db->createCommand("select * from user where name='$name' and pass='$pass'")->queryOne();
		
		if ($res) 
		{
        echo "<script>alert('登录成功');location.href='?r=index/news'</script>";
       }
       else
       {
       	echo "<script>alert('登录失败');location.href='?r=index/login'</script>";
       }
	}
	//添加书的方法
	public function actionNews()
	{
		return $this->render('news');
	}

	public function actionNewsadd(){
			//接值
		$data = Yii::$app->request->post();
		//print_r($data);die;
		$res = Yii::$app->db->createCommand()->insert('news',$data)->execute();

		if ($res) 
		{
        echo "<script>alert('添加成功');location.href='?r=index/select'</script>";
       }
       else
       {
       	echo "<script>alert('添加失败');location.href='?r=index/index'</script>";
       }
	}

	//展示的页面
	// public function actionNewsshow(){
	// $sql = "select * from news";
	// //链接数据库
	// $db = Yii::$app->db;
	// //执行sql语句
	// $res = $db->createCommand($sql)->queryAll();
	// return $this->render('newsshow',['res'=>$res]);
	// }

	//分页的方法
	public function actionSelect(){
		//实例化数据库类
		$db = new Query();
		//取到数据的总条数
		$count = $db->from('news')->count();
		//print_r($count);die;
		$pagination = new Pagination(['totalCount' => $count,'pageSize' =>10]);
		//每页显示的数据
		$data = $db->select('*')
					->from('news')
					->offset($pagination->offset)
					->limit($pagination->limit)
					->all();
		//print_r($data);die;
		return $this->render('select',['data'=>$data,'page'=>$pagination]);
	}


	//分页的方法
	// public function actionSelect(){
	// 	//实例化数据库的类
	// 	$db = new Query();
	// 	//取到数据的总条数
	// 	$count = $db->from('news')->$count();
	// 	$pagination = new Pagination(['totalCount'=>$count,'pageSize'=>3]);
	// 	$data = $db->select('*')
	// 				->from('news')
	// 				->offset($pagination->offset)
	// 				->limit($pagination->limit)
	// 				->all();

	// 	return $this->render('select',['data'=>$data,'page'=>$pagination]);
	// }

	//点赞功能
	public function actionDianzan(){
		$data = Yii::$app->request->post();
		$id = $data['id'];
		$like = $data['e'];
		$res = Yii::$app->db->createCommand()->update('news',['like'=>$like],'id='.$id)->execute();
		//print_r($data);die;
		if ($res) 
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}

	//百度编辑器的添加
	


}

?>