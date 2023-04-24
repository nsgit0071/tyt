

<?php
$db = new mysqli("localhost","root","","texnikum");
$query = $db->query("SELECT * FROM `haqida`");
?>
<div class="menu" style=" background-color:rgba(30,30,31,0.93); height: 70px; width: 100%;"></div>
<?php if($row = $query->fetch_object()): ?>
    <section id="about" class="about" style="margin: -30px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 style="margin: 0 50px " >Haqida</h2>

            </div>
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img  src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6  pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">

<div>
                    <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->text),1200)?>

</div>

                    <p style="color: blue"  data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                        Davomini...
                    </p>


                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                            <?= $row->qoshimcha?>
                        </div>
                    </div>

                </div>
    </section>
<div style="border-bottom: 30px solid rgba(128,128,128,0.2)"></div>
<?php endif;?>
<?php
$query = $db->query("SELECT * FROM `haqida`");
while($row = $query->fetch_object()):
?>

<div class="card" style="width: 18rem; display:inline-block; margin: 20px 80px">
    <img style="height: 250px" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $row->nomi?></h5>
        <p class="card-text" style="text-align: justify-all" > <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->text),100)?></p>


        <p style="color: blue"  data-bs-toggle="collapse" data-bs-target="#example<?= $row->id ?>" aria-expanded="false" aria-controls="collapseExample">
            Davomini...
        </p>
        <div class="collapse" id="example<?= $row->id?>">
            <div class="card card-body">
                <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->text),900)?>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

