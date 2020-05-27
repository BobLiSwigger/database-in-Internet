<?php
namespace frontend\controllers;
/**文章控制器
*李金雯
*1811484
*/
use Yii;
use yii\web\Controller;
//use app\models\PostForm;
use frontend\models\PostForm;

class PostController extends Controller{

	public function actions(){
		return[
			'upload'=>[
				'class'=>'common\widgets\ueditor\UEditorAction',
			]
		];
	}

/**文章列表*/
	public function actionIndex()
	{ 
		return $this->render('index');
	}

	public function actionCreate(){//创建文章
		$model = new PostForm();
		$model->setScenario(PostForm::SCENARIOS_CREATE);
		
		if($model->load(yii::$app->request->post())&&$model->validate()){
			if($model->create()){
				return $this->redirect(['post/index']);
			}
			else
				throw new \Exception('文章提交失败！');
		}
		return $this->render('create', [
            'model' => $model,
        ]);

	}




}