<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
//use common\models\TypeModel;
use frontend\controllers\PostController;
use common\widgets\ueditor\Ueditor;

$this->title = '发表帖子';
$this->params['breadcrumbs'][] = ['label' => '帖子','url' => ['post/index']];
$this->params['breadcrumbs'][] = $this->title;//这里是创建面包屑，就是类似于引导栏的东西
?>

<!-- 下面是创建帖子表格 -->
<div calss= "row">
	<div class="col-lg-9">
		<div class="panel-title box-title">
			<span>发表帖子</span>
		</div>
		<div class="panek-body">
			<?php $form = ActiveForm::begin()?>

			<!-- 这里的heading必须和数据库中的属性对应上 -->
			<?=$form->field($model, 'heading')->textinput(['maxlength'=>true])?>

			<?=$form->field($model, 'post_kind')->dropDownList($kind)?>

			<!-- <?=$form->field($model, 'post_text')->textinput(['maxlength'=>true])?> -->
			<!-- 上下的代码会相互冲突，导致文本编辑器显示不出来原本的效果，所以一定要注释掉上面 -->
			<?= $form->field($model, 'post_text')->widget('common\widgets\ueditor\Ueditor',[
			    'options'=>[
			        'initialFrameHeight' => 300,
			    ]
			]) ?>
			<!-- 上面的post_text一定要更改，刚下载的时候不是这个 -->
			<div class="form-group">
				<?=Html::submitButton("提交",['class'=>'btn btn-success'])?>
			</div>
			<?php ActiveForm::end()?>
		</div>
	</div>
	<div class="col-lg-3"></div>
</div>