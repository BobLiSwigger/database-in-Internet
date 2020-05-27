<?php



use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title='发表文章';
$this->params['breadcrumbs'][]=$this->title;
?>


<?php $this->beginPage() ?>
<?php $this->beginBody() ?>

<div class="row">
	<div class="col-lg-9">
		<div class= "panel-title box-title">
			<span>发表文章</span>
		</div>
		<div class="panel-body">
			<?php 
			$form = ActiveForm::begin() ?>
			<?= $form->field($model, 'title')->textinput(['maxlength'=>true])?>
			<?= $form->field($model, 'tags')->textinput(['maxlength'=>true])?>
			<?= $form->field($model, 'content')->widget('common\widgets\ueditor\UEditor',['clientOptions' => ['initialFrameHeight' => '200',]]) ?>
			<div class ="form-group">
				<?=Html::submitButton("发布",['class'=>'btn btn-success'])?>
			</div>
			<?php ActiveForm::end()?>
		</div>
	</div>
	<div class="col-lg-3">
		<div class= "panel-title box-title">
			<span>注意言论文明</span>
		</div>
		<div class="panel-body">
			<p>
				1.不可出现敏感文字
			</p>
			<p>
				2.不可出现侮辱性文字
			</p>
		</div>
	</div>
</div>
<?php $this->endBody() ?>
<?php $this->endPage() ?>