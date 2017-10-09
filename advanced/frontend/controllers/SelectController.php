<?php
namespace frontend\controllers;
//显示页面的路径
use yii\web\Controller;
use yii\data\Pagination;
use yii\db\Query;
use yii;
//加载数据库

class SelectController extends Controller
{
		//数据的展示页面
	public function actionShow(){
		$db = new Query;
		//print_r($db);die;
		//查询所有的数据总条数
		$count = $db->from('news')->count();
		
		$pagination = new Pagination(['totalCount' => $count,'pageSize' =>3]);
		//print_r($pagination);die;
		// //每页显示的数据
		$data = $db->select('*')
					->from('news')
					->offset($pagination->offset)
					->limit($pagination->limit)
					->all();
		//print_r($data);die;

		return $this->render('show',['data'=>$data,'page'=>$pagination]);
		//return $this->render('show',['data'=>$data,'page'=>$pagination]);
	}

	public function actionDianzan(){
		//传值,接值
		$id = Yii::$app->request->post('id');
		$like = Yii::$app->request->post('e');

		$res = Yii::$app->db->createCommand()->update('news',['like'=>$like],'id='.$id)->execute();
		if ($res) {
		echo 1;
		}else{
		echo 2;
		}
	}

	//评论的z展示页面
	public function actionAdd(){
		$db = new Query;
		//print_r($db);die;
		//查询所有的数据总条数
		$count = $db->from('add')->count();
		$pagination = new Pagination(['totalCount' => $count,'pageSize' =>3]);
		//print_r($pagination);die;
		// //每页显示的数据
		$data = $db->select('*')
					->from('add')
					->offset($pagination->offset)
					->limit($pagination->limit)
					->all();
		//print_r($data);die;

		return $this->render('add',['data'=>$data,'page'=>$pagination]);
	}


}