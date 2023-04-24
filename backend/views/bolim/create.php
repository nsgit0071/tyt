<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bolim */

$this->title = 'Create Bolim';
$this->params['breadcrumbs'][] = ['label' => 'Bolims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bolim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
