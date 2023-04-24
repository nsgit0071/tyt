<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Boglanish */

$this->title = 'Update Boglanish: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Boglanishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="boglanish-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
