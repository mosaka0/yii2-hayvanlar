<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mosaka0\hayvanlar\models\Hayvanlar */

$this->title = 'Update Hayvanlar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hayvanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hayvanlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
