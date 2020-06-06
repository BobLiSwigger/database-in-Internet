<?php

/*
*1811490林雪+curd generator辅助工具
*/

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '会员信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
                        'status' => [
                'label' => '状态',
                'attribute' => 'status',
                'value' => function ($model) {
                    return ($model->status == 10 ? '激活' : '非激活');
                },
                'filter' => [
                    '9' => '非激活',
                    '10' => '激活'
                ]
            ],
            'created_at:datetime',
            //'updated_at',
            //'verification_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
