<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel mosaka0\hayvanlar\models\HayvanlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'HAYVANAT BAHCESINDEKI HAYVANLAR';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hayvanlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Hayvanlar Oluştur', ['create'], ['class' => 'btn btn-success']) ?>
        <br><br>
        <?= Html::a('Bırakılan hayvanlar', ['hayvanlarsil'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',
            'kilo',
            'boy',
            'tür',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
