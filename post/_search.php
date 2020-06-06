<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PostSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'p_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'tags') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'tabs') ?>

    <?php // echo $form->field($model, 'p_time') ?>

    <?php // echo $form->field($model, 'view_count') ?>

    <?php // echo $form->field($model, 'comment_count') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
