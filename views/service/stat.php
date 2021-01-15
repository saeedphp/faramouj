<?php
$content=$data['content'];
$counter=$data['counter'];
?>
<section class="p-b110">
    <div class="container">
        <?php
        foreach ($content as $row){ ?>
            <div class="flex-row">
            <div class="services-left-1">
                <img src="<?= $row['img']; ?>" alt="">
            </div>
            <div class="services-right-1 align-self-center">
                <div class="ot-heading">
                    <h6><span><?= $row['subtitle']; ?></span></h6>
                    <h2 class="main-heading"><?= $row['title']; ?></h2>
                </div>
                <p class="m-b50"><?= $row['description']; ?></p>
                <div class="row">
                    <?php
                    foreach ($counter as $count){ ?>
                    <div class="col-md-4 col-sm-6 col-xs-6 xs-text-center sm-m-b40">
                        <div class="ot-counter s3">
                            <div>
                                <span class="num" data-to="<?= $count['count']; ?>" data-time="<?= $count['duration']; ?>">0</span>
                                <span>+</span>
                            </div>
                            <h6><?= $count['title']; ?></h6>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>