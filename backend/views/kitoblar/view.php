<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kitoblar */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kitoblars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kitoblar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'rasm',
            'nomi',
            'Text:html',
            [
                'attribute' => 'rasm',
                'format' => ['html'],
                'value' => function () use ($model) {
                    return Html::img($model->getImageUrl(),['style' => 'width:100px;']);
                },
            ],
            'bolim',
        ],
    ]) ?>

</div>
