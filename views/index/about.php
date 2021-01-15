<?php
$about=$data['about'];
?>
<section class="home4-about">
    <div class="container">
        <?php
        foreach ($about as $row){ ?>
            <div class="flex-row">

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="home4-about-right">
                    <img src="<?= $row['img']; ?>" alt>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12 align-self-center">
                <div class="home4-about-left">
                    <div class="ot-heading left-align">
                        <h6><span><?= $row['subtitle']; ?></span></h6>
                        <h2 class="main-heading"><?= $row['title']; ?></h2>
                    </div>
                    <?= $row['description']; ?>
                    <div class="home4-about-left-btn">
                        <a href="<?= $row['link']; ?>">
                            <img src="<?= $row['button']; ?>" alt="" >
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <?php } ?>
    </div>
</section>