<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AdminSite */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Admin Sites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="admin-site-view">

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
            [
                'attribute' => 'logo',
                'format' => ['html'],
                'value' => function () use ($model) {
                    return Html::img($model->getImageUrl(),['style' => 'width:100px;']);
                },
            ],
            [
                'attribute' => 'imgf',
                'format' => ['html'],
                'value' => function () use ($model) {
                    return Html::img($model->getImageUrlF(),['style' => 'width:100px;']);
                },
            ],

            [
                'attribute' => 'imgs',
                'format' => ['html'],
                'value' => function () use ($model) {
                    return Html::img($model->getImageUrlS(),['style' => 'width:100px;']);
                },
            ],
            [
                'attribute' => 'imgt',
                'format' => ['html'],
                'value' => function () use ($model) {
                    return Html::img($model->getImageUrlT(),['style' => 'width:100px;']);
                },
            ],
            'hero_h1',
            'hero_h2',
            'about_n',
            'about_t',
            'news_n',
            'news_t',
            'books_n',
            'books_t',
            'counts_n',
            'team_n',
            'team_t',
            'contact_n',
            'contact_t',
            'map_link',
            'location',
            'email:email',
            'tel',
            'status',
            'telegram_link',
            'facebook_link',
            'instagram_link',
            'youtube_link',
        ],
    ]) ?>

</div>
