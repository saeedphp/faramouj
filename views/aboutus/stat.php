<?php
$process=$data['process'];
?>

<div class="row p-b75 sm-p-tb60">
    <div class="about-swrap-top-1">
        <?php
        foreach ($process as $row){ ?>
            <div class="col-md-4 col-sm-6 col-xs-12 <?= $row['class']; ?>">
            <div style="background-image: url(<?= $row['bg-image']; ?>)" class="service-box-s2 s-box service-box-s2-bg1">
                <div style="color: <?= $row['color']; ?>;background: <?= $row['background']; ?>" class="number-box">0<?= $row['number']; ?></div>
                <div class="content-box">
                    <h5><?= $row['title']; ?></h5>
                    <p>
                        <?= $row['description']; ?>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>