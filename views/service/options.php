<?php
$seo=$data['seo'];
?>
<section class="search-engine p-t140 p-b20">
    <div class="container">
        <div class="flex-row">
            <div class="col-md-3 col-sm-6 col-xs-12 align-self-center">
                <?php
                foreach ($seo as $col1){ ?>
                    <?php
                    if ($col1['col-right']==1){ ?>

                        <div class="icon-box <?= $col1['class']; ?>">
                            <div class="bg-s3"></div>
                            <div class="bg-before"></div>
                            <div class="bg-after"></div>
                            <div class="icon-main"><span class="<?= $col1['icon']; ?>"></span></div>
                            <div class="content-box">
                                <h5>
                                    <a href="<?= $col1['link']; ?>">
                                        <?= $col1['title']; ?>
                                    </a>
                                </h5>
                                <p><?= $col1['description']; ?></p>
                            </div>
                        </div>

                            <?php } ?>
                <?php } ?>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12 text-center sm-order-last">
                <img src="assets/images/img-services-4.png" alt="">
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 align-self-center">
                <?php
                foreach ($seo as $col1){ ?>
                    <?php
                    if ($col1['col-left']==1){ ?>

                        <div class="icon-box <?= $col1['class']; ?>">
                            <div class="bg-s3"></div>
                            <div class="bg-before"></div>
                            <div class="bg-after"></div>
                            <div class="icon-main"><span class="<?= $col1['icon']; ?>"></span></div>
                            <div class="content-box">
                                <h5>
                                    <a href="<?= $col1['link']; ?>">
                                        <?= $col1['title']; ?>
                                    </a>
                                </h5>
                                <p><?= $col1['description']; ?></p>
                            </div>
                        </div>

                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>