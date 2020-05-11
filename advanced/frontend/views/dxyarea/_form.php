<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dxyarea */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dxyarea-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'continentName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'continentEnglishName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'countryName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'countryEnglishName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinceName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinceEnglishName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_zipCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_confirmedCount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_suspectedCount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_curedCount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_deadCount')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
