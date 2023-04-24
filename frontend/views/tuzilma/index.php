<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<div class="menu" style=" background-color:rgba(30,30,31,0.93); height: 70px; width: 100%;"></div>
<div class="container">
    <div class="col-lg-12">
        <div class="row" style="">
            <?php
            $db = new mysqli("localhost","root","","texnikum");
            $query = $db->query("SELECT * FROM `tuzilma`");
            while($row = $query->fetch_object()):
                ?>

                    <img style="margin-left: -10px; margin:10px 0; width: 500px; height: 300px; border-radius: 15px"  class="col-lg-6 col-md-6 col-sm-6" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" alt="">
            <div class="col-lg-6 col-md-6">
                <p>
                   <b>Familiya:</b> <?= $row->familiya?>
                </p>
                <p>
                    <b>Ism:</b> <?= $row->ism?>
                </p>
                <p>
                    <b>Mansab:</b> <?= $row->mansab?>
                </p>
                <p>
                    <b>Telefon raqam:</b> <?= $row->tel?>
                </p>
                <p>
                    <b>Malumot:</b><?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->text),320)?>
                </p>
                <div class="social-links mt-3">
                    <a href="<?= $row->telegram?>" class="twitter"><i class="fab fa-telegram fa-2x"></i></a>
                    <a href="<?= $row->facebook?>" class="facebook"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="<?= $row->instagram?>" class="instagram"><i class="fab fa-instagram fa-2x"></i></a>

                </div>


            </div>
                <div style="border-bottom: 30px solid rgba(128,128,128,0.2)"></div>
            <?php endwhile;?>
        </div>
    </div>
</div>
            
</body>
</html>
