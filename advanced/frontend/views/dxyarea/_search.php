<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DxyareaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dxyarea-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'continentName') ?>

    <?= $form->field($model, 'continentEnglishName') ?>

    <?= $form->field($model, 'countryName') ?>

    <?= $form->field($model, 'countryEnglishName') ?>

    <?php // echo $form->field($model, 'provinceName') ?>

    <?php // echo $form->field($model, 'provinceEnglishName') ?>

    <?php // echo $form->field($model, 'province_zipCode') ?>

    <?php // echo $form->field($model, 'province_confirmedCount') ?>

    <?php // echo $form->field($model, 'province_suspectedCount') ?>

    <?php // echo $form->field($model, 'province_curedCount') ?>

    <?php // echo $form->field($model, 'province_deadCount') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
