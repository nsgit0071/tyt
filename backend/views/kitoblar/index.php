<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\KitoblarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kitoblars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kitoblar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kitoblar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                /** @var \common\models\AdminSite $model */
                'label' => 'Rasm',
                'content' => function($model){

                    return Html::img($model->getImageUrl(),['style'=>'width:60px;']);

                }
            ],
            'rasm',
            'nomi',
            'Text:html',

            //'bolim',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
