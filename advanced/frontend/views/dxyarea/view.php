<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dxyarea */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dxyareas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dxyarea-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'continentName',
            'continentEnglishName',
            'countryName',
            'countryEnglishName',
            'provinceName',
            'provinceEnglishName',
            'province_zipCode',
            'province_confirmedCount',
            'province_suspectedCount',
            'province_curedCount',
            'province_deadCount',
        ],
    ]) ?>

</div>
