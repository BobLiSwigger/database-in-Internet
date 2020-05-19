<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\PostModel;

class PostForm extends Model{
	public $post_id;//属性和数据据库中的表一一对应
	public $heading;
	public $post_text;
	public $post_kind;
	public $post_time;
	public $vip_id;
	public $_lastError = "";

	const SCENARIOS_CREATE = 'create';//定义常量，创建场景
	const SCENARIOS_UPDATE = 'update';

	//这里面的sce这个函数是Model中自带的
	public function scenarios(){
		$scenarios =[
			self::SCENARIOS_CREATE => ['heading','post_text','post_kind'],
		];
		return array_merge(parent::scenarios(),$scenarios);
	}

	public function rules(){
		return [
			[['post_id','post_text','post_kind'],'required'],
		];
	}

	public function create(){
		$transaction = Yii::$app->db->beginTransaction();
		try{
			$model = new PostModel();
			$model->setAttributes($this->attributes);
			$model->summary = $this->_getSummary();
			$model->post_id=Yii::$app->user->identity->id;
			$model->post_time=time();
			$transaction->commit();
			return true;
		}catch(\Exception $e){
			$transaction->rollBack();
			$this->_lastError = $e->getMessage();
			return false;
		}
	}

}
		