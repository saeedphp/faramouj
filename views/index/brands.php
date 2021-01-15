<?php
$brand=$data['brand'];
?>
<section class="home4-partners p-b110" style="direction: ltr;">
    <div class="container">
        <div class="partners">
            <div class="owl-carousel home-client-carousel">
                <?php
                foreach ($brand as $row){ ?>
                    <div class="partners-slide">
                    <a href="<?= $row['link']; ?>" class="client-logo">
                        <figure class="partners-slide-inner">
                            <img class="partners-slide-image" src="assets/images/brand/<?= $row['img']; ?>" alt="">
                        </figure>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>