<?php
namespace frontend\models;
use yii;
use yii\base\Model;
use common\models\PostModel;
/**表单模型*/
class PostForm extends Model{
	public $p_id;
	public $title;
	public $content;
	public $user_id;
	public $tags;
	public $p_time;
/**定义场景 创建,更新,删除*/
	const SCENARIOS_CREATE ='create';
	const SCENARIOS_UPDATE ='update';
	const SCENARIOS_DELETE ='delete';
/**场景设置*/
	public function scenarios(){
		$scenarios=[
			self::SCENARIOS_CREATE=>['title','content','tags'],
			self::SCENARIOS_UPDATE=>['title','content','tags'],
		];
		return array_merge(parent::scenarios(),$scenarios);
	}


	public function rules(){
		return[//规则
			[['p_id','title','user_id'],'required'],
			[['p_id','user_id'],'integer'],
			['title','string','max'=>50],

		];
	}

	public function attributeLabels(){
		return[
			'p_id'=>'编码',
			'title'=>'标题',
			'content'=>'内容',
			'tags'=>'标签',
		];
	}


	public function create(){

		$transaction =Yii::$app->db->beginTransaction();

		try{
			$model=new PostModel();
			$model->setAttributes($this->attributes);
			$model->user_id=yii::$app->user->identity->id;
			$model->p_time=time();

			if(!$model->save())
				throw new \Exception('文章提交失败！');
			$this->p_id=$model->p_id;

			$transaction->commit();
			return true;

		}
		catch(\Exception $e){//捕获异常
			$transaction->rollBack();
			return false;
		}
	}

	public static function getlist($curpage=1,$pageSize=10,$orderBy=['p_id'=>SORT_DESC]){
		$model=new PostModel();
		$select=[];
		$query =$model->find()->select($select)->orderBy($orderBy);
		$res=$model->getPages($query,$curpage,$pageSize);
		//$res['data'];
		return $res;
	}


}
