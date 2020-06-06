<?php

/*
*1811490林雪+curd generator辅助工具
*/

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '内容管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-model-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'p_id',
            'title' => [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => function ($model) 
                {
                    return '<a href="'.Url::to(['post/view', 'id'=> $model->p_id]).'">'.$model->title.'</a>';
                }
            ],
            'tags',
            'content:ntext',
            'user_id',
            //'tabs',
            'p_time:datetime:datetime',
            //'view_count',
            //'comment_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
