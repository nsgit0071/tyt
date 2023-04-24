<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\KitoblarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kitoblars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu" style=" background-color:rgba(30,30,31,0.93); height: 70px; width: 200%;"></div>
<div class="kitoblar-index" style="margin: 60px 0">





    <?php // echo $this->render('_search', ['model' => $searchModel]);
    $db = new mysqli("localhost" , "root","","texnikum");
    $query = $db->query("SELECT * FROM `yangliklar`");
    if($row = $query->fetch_object()):
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [



            [
                /** @var \common\models\AdminSite $model */
                'label' => 'rasm',
                'content' => function($model){


                    return Html::img($model->getImageUrl(),['style'=>'width:500px;height:300px']);
                }
            ],



//            'nomi',

            'Text:html',


            [
                /** @var \common\models\AdminSite $model */
                'label' => 'Kitob',
                'content' => function($model){
                    return Html::a('Kitobga kirish uchun bosing', $model->getImageUrlB(), ['class' => 'btn btn-success','style' => 'width:150px;']);
                }
            ],
        ],

    ]);
endif;
    ?>


</div>
