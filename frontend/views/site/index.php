<?php


use \common\models\AdminSiteQuery;
use yii\bootstrap4\Html;

/** @var array $admin */
/** @var array $about */
/** @var array $about */
/* @var $content string */
?>


<?php foreach ($admin as $item)?>
<html lang="en" >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
</head>
<body>


<?php
$db = new mysqli("localhost","root","","texnikum");
$query = $db->query("SELECT * FROM `admin_site`");
if($row = $query->fetch_object()):
?>
    <div id="carouselExampleFade" class="carousel carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->imgf ?>" style="width: 100%; height: 750px;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->imgs ?>"  style="width: 100%; height: 750px;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->imgt ?>"  style="width: 100%; height: 750px;" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php endif;?>

<!-- End Hero -->
<main id="main">

    <!-- ======= About Section ======= -->
    <?php
    $db = new mysqli("localhost","root","","texnikum");
    $query = $db->query("SELECT * FROM `haqida`");
    if($row = $query->fetch_object()):
        ?>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2><?= $item['about_n']?></h2>

                </div>
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img style="width: 600px; height: 400px" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                        <h3 class="btn btn-light"><?= $item['about_t']?></h3>
                        <h3><?= $row->nomi?></h3>
                        <p class="fst-italic" style="text-align: justify;">
                            <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->text),900)?>
                        </p>
                        <button class="btn btn-group btn btn-primary" ><a style="color: white" href="<?php echo  \yii\helpers\Url::to(['about'])?>">Batafsil</a></button>

                    </div>
        </section>
    <?php endif;?>
   <!-- End About Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services" >
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $item['news_n']?></h2>
                <p><?= $item['news_t']?></p>
            </div>

            <div class="row">
                <div  class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div  class="icon-box">
                        <div class="icon"><i class="fas fa-file-image"></i></div>
                        <h4><a href="<?= \yii\helpers\Url::to(["news"])?>">Texnikumdagi yangliklar</a></h4>
                        <p>Yangliklar bo'limiga kirish uchun shu yerga bosing va texnikumda bo'layotga yangliklardan bo-xabar bo'ling</p>
                    </div>
                </div>
                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `yangliklar`");
                ?>
                <div class="slider col-lg-4 mb-4">
                    <?php while($row = $query->fetch_object()): ?>
                    <div class="slide" ><img src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>">
                        <p><a href="<?= \yii\helpers\Url::to(["news"])?>">...</a></p></div>
                    <?php endwhile;?>
                </div>


                <div style="margin: auto;" class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-file-video"></i></div>
                        <h4><a href="<?= \yii\helpers\Url::to(["video"])?>">Video yangliklar</a></h4>

                        <p>Yangliklar bo'limiga kirish uchun shu yerga bosing va texnikumda
                            bo'layotga yangliklardan bo-xabar bo'ling</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $item['books_n']?></h2>
                <p><?= $item['books_t']?></p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Xammasi</li>
                        <li data-filter=".filter-app">Aniq fanlar</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
<?php
$db = new mysqli("localhost","root","","texnikum");
$query = $db->query("SELECT * FROM `kitoblar` WHERE id=20");
?>

                <?php if($row = $query->fetch_object()): ?>
                    <div class="col-lg-4 col-md-6 portfolio-item *  <?= $row->bolim ?>">
                        <div class="portfolio-wrap" style="width:350px; height: 250px;">
                            <img style="width:350px; height: 250px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasmm ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4> <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->nomi),20)?></h4>
                                <p><?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->Text),180)?></p>
                                <div class="portfolio-links">
                                    <a href="<?php echo Yii::$app->params['backendUrl'].'/file/'.$row->rasm?>" download title="More Details"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
<?php endif;?>
                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `kitoblar`  WHERE id=21");
                ?>
                <?php if($row = $query->fetch_object()): ?>
                    <div class="col-lg-4 col-md-6 portfolio-item *  <?= $row->bolim ?>">
                        <div class="portfolio-wrap" style="width:350px; height: 250px;">
                            <img style="width:350px; height: 250px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasmm ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4> <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->nomi),20)?></h4>
                                <p><?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->Text),180)?></p>
                                <div class="portfolio-links">
                                    <a href="<?php echo Yii::$app->params['backendUrl'].'/file/'.$row->rasm?>" download title="More Details"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `kitoblar`  WHERE id=22");
                ?>
                <?php if($row = $query->fetch_object()): ?>
                    <div class="col-lg-4 col-md-6 portfolio-item   <?= $row->bolim ?>">
                        <div class="portfolio-wrap" style="width:350px; height: 250px;">
                            <img style="width:350px; height: 250px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasmm ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4> <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->nomi),20)?></h4>
                                <p><?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->Text),180)?></p>
                                <div class="portfolio-links">
                                    <a href="<?php echo Yii::$app->params['backendUrl'].'/file/'.$row->rasm?>" download title="More Details"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>

                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `kitoblar`  WHERE id=23");
                ?>
                <?php if($row = $query->fetch_object()): ?>
                    <div class="col-lg-4 col-md-6 portfolio-item *  <?= $row->bolim ?>">
                        <div class="portfolio-wrap" style="width:350px; height: 250px;">
                            <img style="width:350px; height: 250px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasmm ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4> <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->nomi),20)?></h4>
                                <p><?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->Text),180)?></p>
                                <div class="portfolio-links">
                                    <a href="<?php echo Yii::$app->params['backendUrl'].'/file/'.$row->rasm?>" download title="More Details"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `kitoblar`  WHERE id=24");
                ?>
                <?php if($row = $query->fetch_object()): ?>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web  <?= $row->bolim ?>">
                        <div class="portfolio-wrap" style="width:350px; height: 250px;">
                            <img style="width:350px; height: 250px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasmm ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4> <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->nomi),20)?></h4>
                                <p><?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->Text),180)?></p>
                                <div class="portfolio-links">
                                    <a href="<?php echo Yii::$app->params['backendUrl'].'/file/'.$row->rasm?>" download title="More Details"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `kitoblar`  WHERE id=25");
                ?>
                <?php if($row = $query->fetch_object()): ?>
                    <div class="col-lg-4 col-md-6 portfolio-item *  <?= $row->bolim ?>">
                        <div class="portfolio-wrap" style="width:350px; height: 250px;">
                            <img style="width:350px; height: 250px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasmm ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4> <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->nomi),20)?></h4>
                                <p><?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->Text),180)?></p>
                                <div class="portfolio-links">
                                    <a href="<?php echo Yii::$app->params['backendUrl'].'/file/'.$row->rasm?>" download title="More Details"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `kitoblar`  WHERE id=26");
                ?>
                <?php if($row = $query->fetch_object()): ?>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web  <?= $row->bolim ?>">
                        <div class="portfolio-wrap" style="width:350px; height: 250px;">
                            <img style="width:350px; height: 250px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasmm ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4> <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->nomi),20)?></h4>
                                <p><?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->Text),180)?></p>
                                <div class="portfolio-links">
                                    <a href="<?php echo Yii::$app->params['backendUrl'].'/file/'.$row->rasm?>" download title="More Details"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>


        </div>
            <button class="btn btn-group btn btn-primary" ><a href="<?php echo  \yii\helpers\Url::to(['/kitoblar'])?>">Batafsil</a></button>

    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <?php
    $db = new mysqli("localhost","root","","texnikum");
    $query = $db->query("SELECT * FROM `yoshlar`");
    if($row = $query->fetch_object()):
    ?>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Yoshlar ittifoqi</h2>
            </div>
            <div class="container">
                <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img style="height: 400px" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" class="img-fluid col-lg-12 col-md-12"  alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3><?= $row->nomi?></h3>
                    <p class="fst-italic col-lg-" style="text-align: justify;">
                        <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->Text),1300)?>
                    </p>
                    <?php endif;?>
                    <button class="btn btn-group btn btn-primary" ><a href="<?php echo  \yii\helpers\Url::to(['yoshlar'])?>">Batafsil</a></button>
                </div>
                </div>
            </div>
    </section>

    <!-- End Counts Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $item['team_n']?></h2>
                <p><?= $item['team_t']?></p>
            </div>

            <div class="row">
                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `tuzilma`  WHERE id=9");
                if($row = $query->fetch_object()):
                ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img style="height: 300px; width: 300px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" class="img-fluid" alt="">
                            <div class="social">
                                <a href="<?= $row->telegram?>"><i class="bi bi-telegram"></i></a>
                                <a href="<?= $row->facebook?>"><i class="bi bi-facebook"></i></a>
                                <a href="<?= $row->instagram?>"><i class="bi bi-instagram"></i></a>

                            </div>
                        </div>
                        <div class="member-info">
                            <h4><?= $row->ism?> <?= $row->familiya?></h4>
                            <span><?= $row->mansab?></span>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `tuzilma`  WHERE id=10");
                if($row = $query->fetch_object()):
                ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img style="height: 300px; width: 300px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" class="img-fluid" alt="">
                            <div class="social">
                                <a href="<?= $row->telegram?>"><i class="bi bi-telegram"></i></a>
                                <a href="<?= $row->facebook?>"><i class="bi bi-facebook"></i></a>
                                <a href="<?= $row->instagram?>"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><?= $row->ism?> <?= $row->familiya?></h4>
                            <span><?= $row->mansab?></span>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `tuzilma`  WHERE id=11");
                if($row = $query->fetch_object()):
                ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img style="height: 300px; width: 300px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" class="img-fluid" alt="">
                            <div class="social">
                                <a href="<?= $row->telegram?>"><i class="bi bi-telegram"></i></a>
                                <a href="<?= $row->facebook?>"><i class="bi bi-facebook"></i></a>
                                <a href="<?= $row->instagram?>"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><?= $row->ism?> <?= $row->familiya?></h4>
                            <span><?= $row->mansab?></span>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php
                $db = new mysqli("localhost","root","","texnikum");
                $query = $db->query("SELECT * FROM `tuzilma`  WHERE id=12");
                if($row = $query->fetch_object()):
                ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img style="height: 300px; width: 300px;"  src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->rasm ?>" class="img-fluid" alt="">
                            <div class="social">
                                 <a href="<?= $row->telegram?>"><i class="bi bi-telegram"></i></a>
                                <a href="<?= $row->facebook?>"><i class="bi bi-facebook"></i></a>
                                <a href="<?= $row->instagram?>"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><?= $row->ism?> <?= $row->familiya?></h4>
                            <span><?= $row->mansab?></span>
                        </div>
                    </div>
                </div>
                <?php endif;?>
            </div>
            <button type="button" class="btn btn-primary "><a href="<?php echo  \yii\helpers\Url::to(['tuzilma'])?>">Middle</a></button>
        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $item['contact_n']?></h2>
                <p><?= $item['contact_t']?></p>
            </div>

            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3032.5544684273027!2d70.91047158045355!3d40.52933770213243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38baee9f48b02f27%3A0xc2c3059508445381!2sKokand%20Railway%20Professional%20College!5e0!3m2!1sen!2s!4v1643384714121!5m2!1sen!2s" style="border:0;width: 100%; height: 270px;" allowfullscreen="" loading="lazy"></iframe>
            </div>


<div class="row">
    <div class="flex ">
        <div class="info">
                                    <div  class="address ns ">
                                        <i class="bi bi-geo-alt "></i>
                                        <a href="#map"><h4>Joylashuv</h4></a>
                                        <p><?= $item['location']?></p>
                                    </div>
            <div  class="phone ns ">
                <i class="bi bi-phone"></i>
                <h4>Tel</h4>
                <a href="tel:<?= $item['tel']?>"> <p><?= $item['tel']?></p></a>
            </div>
            <div  class=" ns " >
                <i class="bi bi-check-all"></i>
                <a href="<?= \yii\helpers\Url::to(['create'])?>"><h4>Bog'lanish</h4></a>
                <p>Kirish uchun bosing</p>
            </div>
            <div  class="email ns ">
                <i class="bi bi-envelope"></i>
                <h4>Email</h4>
                <p><?= $item['email']?></p>
            </div>
    </div>
</div>



</main><!-- End #main -->
<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section><!-- End Clients Section -->


</body>
</html>