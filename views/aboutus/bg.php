<?php
$bg=$data['bg'];
?>

<section class="p-t125 p-b160 sm-p-b60">
    <div class="container">
        <?php
        foreach ($bg as $row){ ?>
            <div class="row flex-row justify-content-center">
            <div class="col-md-6 col-sm-12-col-xs-12 align-self-center">
                <a href="<?= $row['link']; ?>">
                    <img src="<?= $row['img']; ?>" alt="">
                </a>
            </div>
            <div class="col-md-6 col-sm-12-col-xs-12 align-self-center">
                <div class="about-content p-l80 xs-p-l0">
                    <div class="ot-heading left-align">
                        <h6><span><?= $row['pretitle']; ?></span></h6>
                        <h2 class="main-heading"><?= $row['title']; ?></h2>
                    </div>
                    <p class="font22 text-dark">
                        <?= $row['posttitle'] ?>
                    </p>
                    <p class="p-b45">
                        <?= $row['description']; ?>
                    </p>
                    <div class="video-popup">
                        <div class="btn-inner">
                            <a class="btn-play" href="<?= $row['video']; ?>">
                                <i class="fas fa-play"></i>
                                <span class="circle-1"></span>
                                <span class="circle-2"></span>
                            </a>
                        </div>
                        <span> ویترین ویدئو</span>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>