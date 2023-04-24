<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\YoshlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yoshlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yoshlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yoshlar', ['create'], ['class' => 'btn btn-success']) ?>
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
                'label' => 'logo',
                'content' => function($model){

                    return Html::img($model->getImageUrl(),['style'=>'width:50px;']);

                }
            ],
            'nomi',
            'Text:ntext',
            'qoshimcha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
