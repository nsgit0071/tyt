<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Boglanish */

$this->title = 'Create Boglanish';
$this->params['breadcrumbs'][] = ['label' => 'Boglanishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="boglanish-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
