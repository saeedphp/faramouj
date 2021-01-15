<?php
$brand=$data['brand'];
?>

<div class="row">
    <div class="col-md-12">
        <div class="partners">
            <div class="owl-carousel home-client-carousel">
                <?php
                foreach ($brand as $row){ ?>
                    <div class="partners-slide">
                        <a href="<?= $row['link']; ?>" class="client-logo">
                            <figure class="partners-slide-inner m-a0">
                                <img class="partners-slide-image" src="<?= $row['img']; ?>" alt="">
                            </figure>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>