<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdminSite */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-site-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'logo')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgf')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgs')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgt')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hero_h1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hero_h2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'books_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'books_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'counts_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'map_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 0 => '0', 1 => '1', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'telegram_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagram_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube_link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
