<?php
namespace frontend\controllers;
//显示页面的路径
use yii\web\Controller;
//载入model层
use frontend\models\Rbac;
use yii;
use frontend\models\Form;

//加载数据库
header("content-type:text/html; charset=utf-8");
class RbacController extends Controller
{

	public function actionIndex(){
		return $this->render('index');
	}

	//展示创建角色的方法
	public function actionRbac(){
		$model = new Rbac();
		return $this->render('rbac',['model'=>$model]);
	}
	//创建角色的方法
	public function actionRbacdo(){
		$role = Yii::$app->request->post('Rbac');
		//print_r($role);die;
		$item = $role['role'];
		//print_r($data);die;
		$auth = Yii::$app->authManager;
	    $role = $auth->createRole($item);
	    $role->description = '创建了 ' . $item . ' 角色';
	    $auth->add($role);
	    return $this->render('index');
	     echo "<script>alert('角色创建成功');location.href='?r=rbac/index'</script>";
	}

	public function actionPower(){
		$model = new Rbac();
		return $this->render('power',['model'=>$model]);
	}

	//创建权限的方法
	public function actionPowerdo(){
		$role = Yii::$app->request->post('Rbac');
		//print_r($role);die;
		$item = $role['power'];
		$auth = Yii::$app->authManager;
	    $createPost = $auth->createPermission($item);
	    $createPost->description = '创建了 ' . $item . ' 许可';
	    $auth->add($createPost);
	    return $this->render('index');
	     echo "<script>alert('权限创建成功');location.href='?r=rbac/index'</script>";
	}

	//分配角色的权限
	public function actionRp(){
		$models  = new Form();
		$model  = new Rbac();

		//把文件的名字传到model层里面
		//$model = new Loginform();
		$role = Rbac::getrole('auth_item');
		$power = Rbac::getpower('auth_item');
		//var_dump($power);die;
		$roles = $models->arr($role,'name','name');
		$powers = $models->arr($power,'name','name');
		return $this->render('rp',['model'=>$model,'role'=>$roles,'power'=>$powers]);
	}

	//将分配好的权限和角色入库
	public function actionDorp(){
		$data = Yii::$app->request->post('Rbac');
		//print_r($power);die;
		$power=$data['power'];
		$role=$data['role'];
		//实例化调用model层的方法
		$item = Rbac::rolepower($role,$power);
		// print_r($item);die;

		foreach ($item as $items) {
			$auth = Yii::$app->authManager;
		    $parent = $auth->createRole($items[0]);
		    $child = $auth->createPermission($items[1]);
		    //把值传到model层
		    $auth->addChild($parent, $child);
		}

		 echo "<script>alert('权限分配成功');location.href='?r=rbac/index'</script>";
	}


		//给用户分配角色
		public function actionUr(){
			$models  = new Form();
			$model  = new Rbac();

			//把文件的名字传到model层里面
			//$model = new Loginform();
			$role = Rbac::getrole('auth_item');
			$user = Rbac::getuser('user');
			//var_dump($power);die;
			$roles = $models->arr($role,'name','name');
			$users = $models->arr($user,'id','username');
			return $this->render('ur',['model'=>$model,'role'=>$roles,'user'=>$users]);
		}

		//将分配的角色入库
		public function actionDour(){

			$data = Yii::$app->request->post('Rbac');
			//print_r($power);die;
			$user=$data['user'];
			$role=$data['role'];
			//实例化调用model层的方法
			$item = Rbac::rolepower($user,$role);
			// print_r($item);die;
			foreach ($item as $items) 
			{
			$auth = Yii::$app->authManager;
		    $reader = $auth->createRole($items[1]);
		    $auth->assign($reader, $items[0]);
			}
			
		// 	foreach ($item as $items) {
		// 	$auth = Yii::$app->authManager;
		//     $parent = $auth->createRole($items[0]);
		//     $child = $auth->createPermission($items[1]);
		//     //把值传到model层
		//     $auth->addChild($parent, $child);
		// }

		 echo "<script>alert('角色分配成功');location.href='?r=rbac/index'</script>";
		}
		//权限控制
		public function beforeAction($action)
			{
			    $action = Yii::$app->controller->action->id;
			    if(\Yii::$app->user->can($action)){
			        return true;
			    }else{
			        throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
			    }
			}

}