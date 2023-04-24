<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bolim */

$this->title = 'Update Bolim: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bolims', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bolim-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
