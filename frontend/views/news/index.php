

<?php
$db = new mysqli("localhost","root","","texnikum");
$query = $db->query("SELECT * FROM `haqida`");
?>
<div class="menu" style=" background-color:rgba(30,30,31,0.93); height: 70px; width: 100%;"></div>
    <section id="about" class="about" style="margin: -30px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Yangliklar</h2>

            </div>



<?php
$query = $db->query("SELECT * FROM `yangliklar`");
while($row = $query->fetch_object()):
    ?>

    <div class="card" style="width: 18rem; display:inline-block; margin: 30px 70px">
        <img style="height: 250px" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $row->nomi?></h5>
            <div style="height: 100px">
            <p class="card-text"  style="text-align: justify-all"> <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->text),100)?></p>
            </div>

            <p style="color: #42429c" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Davomini...
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <?= $row->qosimcha?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;?>
