<?php
use yii\helpers\Html;
use common\widgets\post\PostWidget;
use yii\base\Widget;

$this->title='讨论区';
$this->params['breadcrumbs'][] = $this->title;
?>
<?=PostWidget::widget()?>