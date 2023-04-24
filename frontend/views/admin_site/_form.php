<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Kitoblar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kitoblar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rasm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rasmm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bolim')->dropDownList([ 'filter-app' => 'Filter-app', 'filter-card' => 'Filter-card', 'filter-web' => 'Filter-web', '<?php echo $row->Bolim ?>' => '<?php echo $row->Bolim ?>', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
