<?php
$db = new mysqli("localhost","root","","texnikum");

?>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\BoglanishSearch */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="menu" style=" background-color:rgba(30,30,31,0.93); height: 70px; width: 100%;"></div>
<div class="search">
    <input id="search " type="text">
    <input type="button" value="ok">
</div>
<section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2></h2>
                <p></p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Xammasi</li>
                        <?php
                        $query = $db->query("SELECT * FROM `bolim` ");
                        while ($row = $query->fetch_object()):
                            ?>
                            <li data-filter="<?= $row->Bolim?>" ><?= $row->Bolim?></li>
                        <?php endwhile;?>
                        <li data-filter=".filter-app">Aniq fanlar</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>

                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
<?php
$query = $db->query("SELECT * FROM `kitoblar` ");
while($roww = $query->fetch_object()): ?>
    <div class="col-lg-4 col-md-6 portfolio-item *  <?= $roww->bolim ?>" id="output">
        <div class="portfolio-wrap" style="width:350px; height: 250px;">
            <img style="width:350px; height: 250px;" src="<?php echo Yii::$app->params['backendUrl'].'/uploads/'.$roww->rasmm ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4> <?php echo \yii\helpers\StringHelper::truncate(strip_tags($roww->nomi),20)?></h4>
                <p><?php echo \yii\helpers\StringHelper::truncate(strip_tags($roww->Text),180)?></p>
                <div class="portfolio-links">
                    <a href="<?php echo Yii::$app->params['backendUrl'].'/file/'.$roww->rasm?>" download title="More Details"><i class="fas fa-eye"></i></a>
                </div>
            </div>
        </div>
    </div>

<?php endwhile;?>
            </div>
        </div>

</section>
<script type="text/javascript">
    $(document).ready(function (){
       $("search").keypress(function (){
          $.ajax({
             type:'POST',
             url:'index.php',
              data:{
                   name:$("#search").val(),
              },
              success:function (data){
                 $("#output").html(data)
              }
          });
       });
    });
</script>