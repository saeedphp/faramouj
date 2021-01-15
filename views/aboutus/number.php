<?php
$number=$data['number'];
?>

<div class="shadow-primary p-t90 p-b83 m-b110 btn-rounder bg-cover text-center m-t--140" style="background: url('assets/images/bg-counter-1.jpg') center center no-repeat;">
    <div class="bg-overlay"></div>
    <div class="row">
        <?php
        foreach ($number as $row){ ?>
            <div class="col-md-3 col-sm-6 <?= $row['class']; ?>">
                <div class="ot-counter s2">
                    <h6><?= $row['title']; ?></h6>
                    <div>
                        <span class="num" data-to="<?= $row['number']; ?>" data-time="<?= $row['duration']; ?>">0</span>
                        <span>+</span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>