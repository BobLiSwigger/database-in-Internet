<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vip */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vip-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'vip_id')->textInput() ?>

    <?php  //$form->field($model, 'vip_name')->hiddenInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'vip_job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vip_age')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
