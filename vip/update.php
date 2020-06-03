<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vip */

$this->title = '修改 会员: ' . $model->vip_name;
$this->params['breadcrumbs'][] = ['label' => 'Vips', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vip_id, 'url' => ['view', 'id' => $model->vip_id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="vip-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
