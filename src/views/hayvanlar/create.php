<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mosaka0\hayvanlar\models\Hayvanlar */

$this->title = 'Create Hayvanlar';
$this->params['breadcrumbs'][] = ['label' => 'Hayvanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hayvanlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
