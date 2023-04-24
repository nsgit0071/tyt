<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Boglanish */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>
<div class="container">
    <form>

        <h3>Biz bilan bog'lanish<i class="fas fa-file-signature"></i></h3>

        <fieldset class="ism">
            <?= $form->field($model, 'ism')->textInput(['maxlength' => true]) ?>
        </fieldset>
        <fieldset class="email">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true,'type' => 'email']) ?>
        </fieldset>
        <fieldset>
            <?= $form->field($model, 'mavzu')->textInput(['maxlength' => true]) ?>
        </fieldset>
        <fieldset>
            <?= $form->field($model, 'Text')->textarea(['rows' => 6,'placeholder'=>"Savollar yoki takliflar bo'lsa bu yerga yozishingiz mumkun"]) ?>
        </fieldset>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary active']) ?>
        </div>
    </form>


</div>




    <?php ActiveForm::end(); ?>
<style type="text/css">
    .ism{
        width: 600px;
        float: left;
      margin-right: 100px
    }
    .email{
        width: 580px;

    }

</style>