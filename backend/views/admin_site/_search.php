<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\Admin_SiteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-site-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'logo') ?>

    <?= $form->field($model, 'imgf') ?>

    <?= $form->field($model, 'imgs') ?>

    <?= $form->field($model, 'imgt') ?>

    <?php // echo $form->field($model, 'hero_h1') ?>

    <?php // echo $form->field($model, 'hero_h2') ?>

    <?php // echo $form->field($model, 'about_n') ?>

    <?php // echo $form->field($model, 'about_t') ?>

    <?php // echo $form->field($model, 'news_n') ?>

    <?php // echo $form->field($model, 'news_t') ?>

    <?php // echo $form->field($model, 'books_n') ?>

    <?php // echo $form->field($model, 'books_t') ?>

    <?php // echo $form->field($model, 'counts_n') ?>

    <?php // echo $form->field($model, 'team_n') ?>

    <?php // echo $form->field($model, 'team_t') ?>

    <?php // echo $form->field($model, 'contact_n') ?>

    <?php // echo $form->field($model, 'contact_t') ?>

    <?php // echo $form->field($model, 'map_link') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'telegram_link') ?>

    <?php // echo $form->field($model, 'facebook_link') ?>

    <?php // echo $form->field($model, 'instagram_link') ?>

    <?php // echo $form->field($model, 'youtube_link') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
