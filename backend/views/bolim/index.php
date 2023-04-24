<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\BolimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bolims';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bolim-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bolim', ['create'], ['class' => 'btn btn-success']) ?>
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
            'Bolim',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
