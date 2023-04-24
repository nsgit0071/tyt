<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Yangliklarv */

$this->title = 'Create Yangliklarv';
$this->params['breadcrumbs'][] = ['label' => 'Yangliklarvs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yangliklarv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
