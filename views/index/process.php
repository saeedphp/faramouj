<?php
$process=$data['process'];
?>
<section class="home4-process p-lr30">
    <div class="container-fluid">
        <div class="row" style="transform: scaleX(-1)">
            <?php
            foreach ($process as $row){ ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 md-m-b30" style="transform: scaleX(-1)">
                <div class="service-box s-box">
                    <div class="overlay"></div>
                    <span class="big-number">
                        0<?= $row['number']; ?>
                    </span>
                    <div class="icon-main number-box"><span class="<?= $row['icon']; ?>"></span></div>
                    <div class="content-box">
                        <h5><a href="<?= $row['link']; ?>"><?= $row['title']; ?></a></h5>
                        <p><?= $row['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>