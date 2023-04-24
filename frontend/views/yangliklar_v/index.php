<?php
$db = new mysqli("localhost","root","","texnikum");
$query = $db->query("SELECT * FROM `yangliklarv`");
?>
    <div class="menu" style=" background-color:rgba(30,30,31,0.93); height: 70px; width: 100%;"></div>

<?php
while($row = $query->fetch_object()):
    ?>
<div class="header" style="margin: 60px -25px;display: inline-block;">
    <div class="card"  style="width: 18rem; display:inline-block; margin: 30px 70px">
    <div style="width: 186px; height: 200px

"> <?php echo $row->tube_link?></div>
        <div class="card-body">
            <h5 class="card-title"><?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->nomi),30)?></h5>
            <p class="card-text"><?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->Text),200)?></p>
            <p style="color: blue"  data-bs-toggle="collapse" data-bs-target="#example<?= $row->id ?>" aria-expanded="false" aria-controls="collapseExample">
                Davomini...
            </p>
            <div class="collapse" id="example<?= $row->id?>">
                <div class="card card-body">
                    <?php echo \yii\helpers\StringHelper::truncate(strip_tags($row->qoshimcha),900)?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>