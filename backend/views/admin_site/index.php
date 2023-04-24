<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\Admin_SiteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Sites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-site-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Admin Site', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                'attribute' => 'id',
                'contentOptions' => ['style' => 'width:10px;'],

            ],
            [
                /** @var \common\models\AdminSite $model */
                'label' => 'Rasm',
                'content' => function($model){

                    return Html::img($model->getImageUrl(),['style'=>'width:60px;']);

                }
            ],
            [
                /** @var \common\models\AdminSite $model */
                'label' => '1 rasm',
                'content' => function($model){

                    return Html::img($model->getImageUrl(),['style'=>'width:100px;']);

                }
            ],
            [
                /** @var \common\models\AdminSite $model */
                'label' => '2 rasm',
                'content' => function($model){

                    return Html::img($model->getImageUrlS(),['style'=>'width:60px;']);

                }
            ],
            [
                /** @var \common\models\AdminSite $model */
                'label' => '3 rasm',
                'content' => function($model){

                    return Html::img($model->getImageUrlT(),['style'=>'width:60px;']);

                }
            ],
            //'hero_h1',
            //'hero_h2',
            //'about_n',
            //'about_t',
            //'news_n',
            //'news_t',
            //'books_n',
            //'books_t',
            //'counts_n',
            //'team_n',
            //'team_t',
            //'contact_n',
            //'contact_t',
            //'map_link',
            //'location',
            //'email:email',
            //'tel',
            //'status',
            //'telegram_link',
            //'facebook_link',
            //'instagram_link',
            //'youtube_link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
