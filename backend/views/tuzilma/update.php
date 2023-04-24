<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tuzilma */

$this->title = 'Update Tuzilma: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tuzilmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tuzilma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
