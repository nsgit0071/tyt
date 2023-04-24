<?php
$db = new mysqli("localhost","root","","texnikum");
$query = $db->query("SELECT * FROM `yoshlar`");

    ?>
    <div class="menu" style=" background-color:rgba(30,30,31,0.93); height: 70px; width: 100%;"></div>
<?php while($row = $query->fetch_object()):?>
    <div class="card" style="width: 18rem;  display:inline-block; margin: 60px 30px; ">
        <img style="height: 250px" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $row->nomi?></h5>
            <p style="height: 120px" class="card-text"> <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->Text),100)?></p>


            <p style="color: blue"  data-bs-toggle="collapse" data-bs-target="#example<?= $row->id ?>" aria-expanded="false" aria-controls="collapseExample">
                Davomini...
            </p>
            <div class="collapse" id="example<?= $row->id?>">
                <div class="card card-body">
                    <?= $row->qoshimcha?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;?>