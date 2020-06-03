<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vip */

$this->title = $model->vip_name;
$this->params['breadcrumbs'][] = ['label' => 'Vips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vip-view">

    <h1>会员：<?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->vip_id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'vip_id',
            'vip_name',
            'vip_job',
            'vip_age',
        ],
    ]) ?>

</div>
