<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DxyareaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dxyareas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dxyarea-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dxyarea', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'continentName',
            'continentEnglishName',
            'countryName',
            'countryEnglishName',
            //'provinceName',
            //'provinceEnglishName',
            'province_zipCode',
            'province_confirmedCount',
            //'province_suspectedCount',
            'province_curedCount',
            'province_deadCount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
