<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\KitoblarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kitoblar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rasm') ?>

    <?= $form->field($model, 'nomi') ?>

    <?= $form->field($model, 'Text') ?>

    <?= $form->field($model, 'rasmm') ?>

    <?php // echo $form->field($model, 'bolim') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
