<?php
$slider=$data['slider'];
$social=$data['social'];
?>
<section class="home4-top">
    <div class="container">
        <?php
        foreach ($slider as $row){ ?>
            <div class="flex-row">

                <div class="home4-top-right align-self-center">
                    <h6><?= $row['subtitle']; ?></h6>
                    <h2><?= $row['title']; ?></h2>
                    <p><?= $row['description']; ?></p>
                    <div class="ot-button">
                        <a href="<?= $row['link']; ?>" class="octf-btn octf-btn-primary octf-btn-icon"><span>
                                <?= $row['button']; ?>
                                <i class="flaticon-right-arrow-1"></i></span></a>
                    </div>
                </div>

                <div class="home4-top-left">
                    <div class="home4-top-left-img">
                        <img src="<?= $row['img']; ?>" alt="">
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>
    <div class="h4-social-icons">
        <?php
        foreach ($social as $row){ ?>
            <a class="social-icon" href="<?= $row['link']; ?>" target="_blank"><i class="<?= $row['icon']; ?>"></i></a>
        <?php } ?>

    </div>
</section>