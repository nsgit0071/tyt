<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Admin Panelga Hush kelibsiz</h1>

        <a style="color: black;list-style: none;" href="<?php echo \yii\helpers\Url::to(['/user/index'])?>"><p class="lead"><?php echo Yii::$app->user->identity->username?></p></a>


    </div>

    <div class="body-content">



    </div>
</div>
