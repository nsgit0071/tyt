<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'assets/vendor/aos/aos.css',
        'assets/vendor/bootstrap/css/bootstrap.min.css',
        'assets/vendor/bootstrap-icons/bootstrap-icons.css',
        'assets/vendor/swiper/swiper-bundle.min.css',
        'assets/css/card.css',
        'assets/css/site.css',
        'style.css',

//        FontAwesome
    'assets/fontawesome/css/fontawesome.css',
        'assets/fontawesome/css/regular.css',
        'assets/fontawesome/css/regular.css',
        'assets/fontawesome/css/solid.css',
        'assets/fontawesome/css/brands.css',

    ];
    public $js = [
        'assets/vendor/purecounter/purecounter.js',
        'assets/vendor/aos/aos.js',
        'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'assets/vendor/glightbox/js/glightbox.min.js',
        'assets/vendor/isotope-layout/isotope.pkgd.min.js',
        'assets/vendor/swiper/swiper-bundle.min.js',
        'assets/vendor/php-email-form/validate.js',
        'assets/js/main.js',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',
        'assets/js/app.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
