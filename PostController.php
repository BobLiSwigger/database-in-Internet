<?php
namespace frontend\controllers;

//use yii\web\Controller;
use Yii;
use frontend\controllers\base\BaseController;
use frontend\models\PostForm;
//use yii\base\Object;
use common\models\TypeModel;

class PostController extends BaseController{

	public function actions(){
		return[
			'ueditor'=>[
            'class' => 'common\widgets\ueditor\UeditorAction',
            'config'=>[
                //上传图片配置
                'imageUrlPrefix' => "", /* 图片访问路径前缀 */
                'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
           		 ]
			]
		];
	}

	public function actionIndex(){
		return $this->render('index');
	}

	public function actionCreate(){
		$model = new PostForm;
		//return $this->render('create',['model' => $model]);
		$kind = TypeModel::GetAllType();//该函数是自定义函数，用来获取所有数据库中的分类，显示在页面上
		$model->setScenario(PostForm::SCENARIOS_CREATE);
		return $this->render('create',['model' => $model,'kind'=>$kind]);
		//这里一定要注意！！kind这个是前后要一致的，=>和=的区别，要注意文件的对应！！！
	}


}