<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Haqida */

$this->title = 'Create Haqida';
$this->params['breadcrumbs'][] = ['label' => 'Haqidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="haqida-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
