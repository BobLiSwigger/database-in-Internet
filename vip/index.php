<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\searchs\VipSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vip-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vip', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'vip_id',
            'vip_name',
            'vip_job',
            'vip_age',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
