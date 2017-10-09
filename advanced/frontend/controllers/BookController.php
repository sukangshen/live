<?php


namespace frontend\controllers;
use yii;
use yii\web\Controller;
use db;
use frontend\models\Book;
use yii\data\Pagination;
use frontend\models\Form;


class BookController extends Controller{
	// public function actionBook(){
	// 	$model = new Book();
	// 	return $this->render('book',['model'=>$model]);
	// }
	//书籍类型的展示方法
	public function actionType(){
		
		$models = new Book();
		$model = new Form();
		$res = $model->hobby('leiixing',['b_id','book_type']);
		$hobby=$model->arr($res,'b_id','book_type');
		//print_r($hobby);die;
		return $this->render('book',['model'=>$model,'models'=>$models,'hobby'=>$hobby]);
	}


	//书籍的添加入库的方法
	public function actionAdddo(){
				$arr = Yii::$app->request->post('Book');
				$res= Yii::$app->request->post('Form');
		 		//print_r($res);die;

		 	
               $db=Yii::$app->db;
               $data=$db->createCommand()->insert('book',$arr)->execute();
   				
              if($data){
                  echo "<script>alert('添加成功');location.href='?r=book/show'</script>";
              }else{
                  echo "<script>alert('添加失败');location.href='?r=book/book'</script>";
              }
          
	}


	//图书的展示
	public function actionShow(){
	$sql = "select * from book";
	//链接数据库
	$db = Yii::$app->db;
	//执行sql语句
	$res = $db->createCommand($sql)->queryAll();
	return $this->render('show',['res'=>$res]);
	}
}