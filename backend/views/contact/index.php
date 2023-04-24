<?php
$query = $db->query("SELECT * FROM `boglanish`");
while($row = $query->fetch_object()):
    ?>

    <div class="card" style="width: 18rem; display:inline-block; margin: 20px 80px">
        <h5 class="card-title"><?= $row->ism?></h5>
        <h5 class="card-title"><?= $row->email?></h5>
        <div class="card-body">
            <h5 class="card-title"><?= $row->mavzu?></h5>


            <p style="color: blue"  data-bs-toggle="collapse" data-bs-target="#example<?= $row->id ?>" aria-expanded="false" aria-controls="collapseExample">
                Davomini...
            </p>
            <div class="collapse" id="example<?= $row->id?>">
                <div class="card card-body">
                    <?php echo $row->text?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;?>
