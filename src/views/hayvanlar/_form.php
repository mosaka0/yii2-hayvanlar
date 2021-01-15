<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mosaka0\hayvanlar\models\Hayvanlar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hayvanlar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kilo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'boy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tür')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
