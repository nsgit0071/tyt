<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\YangliklarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yangliklars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yangliklar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yangliklar', ['create'], ['class' => 'btn btn-success']) ?>
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
                'label' => 'rasm',
                'content' => function($model){

                    return Html::img($model->getImageUrl(),['style'=>'width:50px;']);

                }
            ],
            'nomi',
            'text',
            'qosimcha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
