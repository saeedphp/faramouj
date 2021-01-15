<?php
$service=$data['service'];
 ?>
<section class="home4-service">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="ot-heading text-center">
                    <h6><span>خدمات ما
</span></h6>
                    <h2 class="main-heading">بهترین را معرفی کنید <br> خدمات جستجوگرها برای تجارت</h2>
                </div>
            </div>
        </div>
        <div class="flex-row justify-content-center">
            <?php
            foreach ($service as $row){ ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon-box s3">
                    <div class="bg-s3"></div>
                    <div class="bg-before"></div>
                    <div class="bg-after"></div>
                    <div class="icon-main">
                        <img src="assets/images/service/<?= $row['id']; ?>/service.png" alt="All Sizes Business">
                    </div>
                    <div class="content-box">
                        <h5><?= $row['title']; ?></h5>
                        <p><?= $row['description']; ?></p>
                    </div>
                    <div class="action-box">
                        <a href="<?= $row['link']; ?>" class="octf-btn octf-btn-icon octf-btn-primary"><?= $row['button']; ?><i class="flaticon-left-arrow"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>