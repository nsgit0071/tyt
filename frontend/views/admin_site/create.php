<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kitoblar */

$this->title = 'Create Kitoblar';
$this->params['breadcrumbs'][] = ['label' => 'Kitoblars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kitoblar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
