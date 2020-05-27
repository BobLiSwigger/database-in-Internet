<?php
namespace common\widgets\post;
use yii;
use yii\base\Widget;
use common\models\PostModel;
use frontend\models\PostForm;
use yii\dtat\Pagination;

class PostWidget extends Widget{

	public $title ='全部文章';//文章列表标题
	public $limit=10;//显示条数
	public $page=false;//分页

	public function run(){
		$curpage=yii::$app->request->get('page',1);
		$res=PostForm::getlist($curpage,$this->limit);
		$result['body']=$res['data']?:[];
		if($this->page){
			$pages=new Pagination(['totalCount'=>$res['count'],'pageSize'=>$res['pageSize']]);
			$result['page']=$pages;
		}
		return $this->render('list',['data'=>$result]);
	}






}