<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\searchs\VipSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vip-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'vip_id') ?>

    <?= $form->field($model, 'vip_name') ?>

    <?= $form->field($model, 'vip_job') ?>

    <?= $form->field($model, 'vip_age') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
