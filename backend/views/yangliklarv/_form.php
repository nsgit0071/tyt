<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Yangliklarv */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yangliklarv-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tube_link')->textInput(['maxlength' => true,'placeholder' => '286x200']) ?>

    <?= $form->field($model, 'nomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qoshimcha')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
