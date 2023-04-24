<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $form yii\widgets\ActiveForm */




use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\db\ActiveRecord;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Temir yo'l texnikumi</title>
    <link rel = "icon" href =
    "https://railway.uz/local/templates/main_v2/img/logo.png"
          type = "image/x-icon">
    <?php $this->head() ?>
</head>
<body class="">
<?php $this->beginBody() ?>

<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
<?php
$db = new mysqli("localhost","root","","texnikum");
$query = $db->query("SELECT * FROM `admin_site`");
if($row = $query->fetch_object()):
    ?>
        <h1 class="logo me-auto me-lg-0"><a href="index.html"> <span><img src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$row->logo ?>" alt=""></span></a></h1>
     <?php endif;?>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0" style="margin:0 20px ">
            <ul>
<!--#about -->
                <li><a class="nav-link scrollto" href="<?php echo \yii\helpers\Url::to(['about'])?>">Texnikum haqida</a></li>
<!--#services-->
                <li class="dropdown"><a href="#"><span>Yangliklar </span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?php echo \yii\helpers\Url::to(['news'])?>">Foto</a></li>
                        <li><a href="<?php echo \yii\helpers\Url::to(['video'])?>">Video</a></li>

                    </ul>
                </li>
<!-- portfolio-->
                <li><a class="nav-link scrollto " href="<?php echo \yii\helpers\Url::to(['/kitoblar'])?>">Kutubxona</a></li>

                <li><a class="nav-link scrollto " href="<?php echo \yii\helpers\Url::to(['tuzilma'])?>">Tuzilma</a></li>




                <li><a class="nav-link scrollto " href="<?php echo  \yii\helpers\Url::to(['yoshlar'])?>">Yoshlar ittifoqi</a></li>

                <li><a class="nav-link scrollto" href="<?php echo  \yii\helpers\Url::to(['create'])?>">Bog'lanish</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->



    </div>
</header><!-- End Header -->
<div>
<?php echo $content?>
</div>

<?php
$db = new mysqli("localhost","root","","texnikum");
$query = $db->query("SELECT * FROM `admin_site`");
if($row = $query->fetch_object()):
?>

<!-- ======= Footer ======= -->
<footer id="footer" style="margin-bottom: -150px;">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col">
                    <div class="footer-info">
                        <h3>Gp<span>.</span></h3>
                        <p>
                           <?= $row->location?> <br>
                            <br><br>
                            <strong>Tel:+</strong><?= $row->tel?><br>
                            <strong>Email:</strong><br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="<?= $row->telegram_link?>" class="twitter"><i class="fab fa-telegram"></i></a>
                            <a href="<?= $row->facebook_link?>" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="<?= $row->instagram_link?>" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="<?= $row->email?>" class="google-plus"><i class="fas fa-envelope-square"></i></a>
                            <a href="<?= $row->youtube_link?>" class="linkedin"><i class="fas fa-envelope-square"></i><i class="fas fa-envelope-square"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Saxifalar</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="index.php">Bosh saxifa</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo \yii\helpers\Url::to(['about'])?>">Texnikum xaqida</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo \yii\helpers\Url::to(['news'])?>">Yangliklar</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>



                <div  class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Biz xaqimizda o'qish uchun shu terga bosing</h4>
                    <p><?= $row->map_link?></p>
                </div>
            </div>
                </div>

            </div>
        </div>
    </div>
    <div style=" width: 100%;" class="container">
        <div style="text-align: center" class="copyright">
            &copy;  <strong><span><a href="https://t.me/Nurmuhammad0071">NS</a></span></strong>
        </div>
        <div id="preloader"></div>
        <a  href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    </div>
</footer>


<?php endif; $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
