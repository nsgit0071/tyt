<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Boglanish */
?>
<div class="menu" style=" background-color:rgba(30,30,31,0.93); height: 70px; width: 100%;"></div>


    <?php
$this->params['breadcrumbs'][] = ['label' => 'Boglanishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="boglanish-create" >

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
